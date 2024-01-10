<script setup>

import { Link, router } from '@inertiajs/vue3'
import UserLayouts from "../User/Layouts/UserLayouts.vue";
import Swal from 'sweetalert2';
import Hero from './Layouts/Hero.vue';
import Products from '../User/Components/Products.vue'
import Slider from './Layouts/Slider.vue'
import Favoritos from './Components/Favoritos.vue'


defineProps({
    products: Array
})


</script>
<template>
    <UserLayouts>


        <!--Slider-->
        <Slider></Slider>
        <!--END Slider-->

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <!--Main content-->
            <div class="bg-white">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                    PRODUTOS FAVORITOS
                </h2>
                <Favoritos></Favoritos>
                <!--Hero Propaganda-->
                <Hero></Hero>
                <!-- END Hero Propaganda-->


                <h2 class="text-2xl font-bold tracking-tight text-gray-900">
                    Nossos Produtos
                </h2>


                <!--product list-->
                <Products :products="products">
                </Products>
                <!--end product list-->
                <div class="flex justify-center mt-5">
                    <Link :href="route('products.index')"
                        class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Lista de Produtos</Link>

                </div>

            </div>
        </div>
        <!-- END Main content-->



    </UserLayouts>
</template>
