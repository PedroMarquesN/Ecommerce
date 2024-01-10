<?php

namespace App\Http\Controllers\User;

use App\Helper\Cart;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\UserAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        
        $user = $request->user();
        $carts = $request->carts;
        $products = $request->products;
        $mergeData = [];

        foreach($carts as $cartItem){
            foreach($products as $product){
                if($cartItem["product_id"] == $product["id"]){
                    $mergeData[]= array_merge($cartItem, ["title" => $product["title"], 'price' => $product['price']]);
                }
            }
        }

        //stripe payment

        $stripe = new \Stripe\StripeClient(env('STRIPE_KEY'));
        $lineItems = [];
        foreach($mergeData as $item){
            $lineItems[] =
            [
                'price_data' => [
                    'currency' => 'BRL',
                    'product_data' => [
                        'name' => $item['title'],
                    ],
                    'unit_amount' => (int)($item['price'] * 100),
                ],
                'quantity' => $item['quantity'],
                ];
        }

        $checkout_session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card', 'boleto'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
          ]);


          $newAddress = $request->address;
          if($newAddress['adress1'] !== null)
          {
            $address = UserAdress::where('isMain', 1)->count();
            if($address > 0){
                $address = UserAdress::where('isMain', 1)->update(['isMain' => 0]);
            }
            $address = new UserAdress();
            $address->adress1 = $newAddress['adress1'];
            $address->state = $newAddress['state'];
            $address->zipcode = $newAddress['zipcode'];
            $address->city = $newAddress['city'];
            $address->country_code = $newAddress['country_code'];
            $address->type = $newAddress['type'];
            $address->user_id = Auth::user()->id;
            $address->save();

          }

          $mainAddress = $user->user_address()->where('isMain',1)->first();
         // dd($mainAddress);
          if($mainAddress){
            $order = new Order();
            $order->status = 'unpaid';
            $order->total_price = $request->total;
            $order->session_id = $checkout_session->id;
            $order->created_by = $user->id;
            
            $order->user_adress_id = $mainAddress->id;
            $order->save();

            
            
            $cartItems = CartItem::where(['user_id'=> $user->id])->get();
            //dd($cartItems);

            foreach($cartItems as $cartItem ){
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'unit_price' => $cartItem->product->price,
                ]);



                $cartItem->delete();
                //remove cart items from cookies
                $cartItems = Cart::getCookieCartItems();
                foreach($cartItems as $item){
                    unset($item);
                }
                array_splice($cartItems,0,count($cartItems));
                Cart::setCookieCartItems($cartItems);
            }


            $paymentData = [
                'order_id' => $order->id,
                'amount'  => $request->total,
                'status' =>'pending',
                'type' => 'stripe',
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ];
            Payment::create($paymentData);
          }

          return Inertia::location($checkout_session->url);
          

    }

    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
        $sessionId = $request->get('session_id');
        try{
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if(!$session){
                throw new NotFoundHttpException;
            }
            $order = Order::where('session_id' , $session->id)->first();
            if(!$order){
                throw new NotFoundHttpException;
            }
            if($order->status === 'unpaid'){
                $order->status = 'paid';
                $order->save();
            }
            return redirect()->route('dashboard');

        }catch(\Exception $e){
            throw new NotFoundHttpException();
        }
    }


    public function cancel(Request $request){
        return redirect()->route('user.home');
    }



}
