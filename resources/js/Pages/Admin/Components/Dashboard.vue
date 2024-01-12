<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from './AdminLayout.vue';
import { Link, router } from '@inertiajs/vue3'




defineProps({
    products: Array,
    users: Array,
    totalPrice: Array,
    orders: Array,
    brands: Array,
    categories: Array,
    payments: Array
});



onMounted(() => {
    initFlowbite();

});
</script>




<template>
    <AdminLayout>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 px-4 py-11 lg:px-20 md:ml-32">
            <!-- Card 1: Produtos -->
            <div class="flex w-full">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-gray-700 to-gray-400 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mt-4 h-7 w-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>

                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl capitalize font-bold">Produtos</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{ products }}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <Link :href="route('admin.products.index')" type="button"
                            class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</Link>
                    </div>
                </div>
            </div>

            <!-- Card 2: Usuários -->
            <div class="flex w-full">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-blue-700 to-blue-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-4 h-7 w-16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl font-bold capitalize">Usuários</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{ users }}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</button>

                    </div>
                </div>
            </div>

            <!-- Card 3: Vendas -->
            <div class="flex w-full">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-4 h-7 w-16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl font-bold capitalize">Vendas</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">${{ totalPrice }}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</button>

                    </div>
                </div>
            </div>

            <!-- Card 4: Outro Card -->
            <div class="flex w-full">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mt-4 h-7 w-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>

                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl font-bold capitalize">Pedidos</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{ orders }}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <Link :href="route('admin.products.index')" type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            VER INFORMAÇÕES</Link>

                    </div>
                </div>
            </div>
            <!-- Card 5: Produtos -->
            <div class="flex w-full mt-12">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-gray-700 to-gray-400 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-4 h-7 w-16" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-xl capitalize font-bold">Visualizações</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">1.400</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</button>
                    </div>
                </div>
            </div>

            <!-- Card 6: Usuários -->
            <div class="flex w-full mt-12">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-blue-700 to-blue-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mt-4 h-7 w-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>

                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-xl font-bold capitalize">Pagamentos</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{payments}}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</button>

                    </div>
                </div>
            </div>

            <!-- Card 7: Vendas -->
            <div class="flex w-full mt-12">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mt-4 h-7 w-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>

                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl font-bold capitalize">Marcas</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{brands}}</h4>
                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">VER
                            INFORMAÇÕES</button>

                    </div>
                </div>
            </div>

            <!-- Card 8: Outro Card -->
            <div class="flex w-full mt-12">
                <div
                    class="flex w-full max-w-full flex-col break-words rounded-lg border border-gray-100 bg-white text-gray-600 shadow-lg">
                    <div class="p-3">
                        <div
                            class="absolute -mt-10 h-16 w-16 rounded-xl bg-gradient-to-tr from-emerald-700 to-emerald-500 text-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="mt-4 h-7 w-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 8.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v8.25A2.25 2.25 0 0 0 6 16.5h2.25m8.25-8.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-7.5A2.25 2.25 0 0 1 8.25 18v-1.5m8.25-8.25h-6a2.25 2.25 0 0 0-2.25 2.25v6" />
                            </svg>


                        </div>
                        <div class="pt-1 text-right">
                            <p class="text-2xl font-bold capitalize">Categorias</p>
                            <h4 class="text-2xl font-semibold tracking-tighter xl:text-2xl mt-2 shadow-md">{{ categories }}</h4>


                        </div>
                    </div>
                    <hr class="opacity-50" />
                    <div class="p-4">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            VER INFORMAÇÕES</button>

                    </div>
                </div>
            </div>
        </div>

</AdminLayout></template>