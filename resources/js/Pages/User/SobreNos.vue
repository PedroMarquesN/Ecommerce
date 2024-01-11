<script setup>
import UserLayouts from './Layouts/UserLayouts.vue';

defineProps({
    products: Array,
    users: Array,
    orders: Array,
})

</script>

<template>
    <UserLayouts>
        
        <section class="py-10 lg:py-20 bg-stone-100 font-poppins dark:bg-gray-800">
            <div class="max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
                <div class="flex flex-wrap ">
                    <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                        <div class="lg:max-w-md">
                            <div class="px-4 pl-4 mb-6 border-l-4 border-blue-500">
                                <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Quem somos nós?</span>
                                <h1 class="mt-2 text-3xl font-black text-gray-700 md:text-5xl dark:text-gray-300">
                                    Sobre Nós
                                </h1>
                            </div>
                            <p class="px-4 mb-10 text-base leading-7 text-gray-500 dark:text-gray-400">
                                A PLATINUM JEANS é uma loja de roupas dedicada a oferecer as últimas tendências da moda com
                                qualidade
                                excepcional. Nossa missão é inspirar confiança e estilo, proporcionando uma experiência de
                                compra
                                única.
                            </p>
                            <div class="flex flex-wrap items-center">
                                <div class="w-full px-4 mb-6 sm:w-1/2 md:w-1/2 lg:mb-6">
                                    <div class="p-6 bg-white dark:bg-gray-900">
                                        <span class="text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                            </svg>
                                        </span>
                                        <p class="mt-4 mb-2 text-3xl font-bold text-gray-700 dark:text-gray-400">{{products}}
                                        </p>
                                        <h2 class="text-sm text-gray-700 dark:text-gray-400">Produtos Disponíveis</h2>
                                    </div>
                                </div>
                                <div class="w-full px-4 mb-6 sm:w-1/2 md:w-1/2 lg:mb-6">
                                    <div class="p-6 bg-white dark:bg-gray-900">
                                        <span class="text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                <path
                                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                            </svg>
                                        </span>
                                        <p class="mt-4 mb-2 text-3xl font-bold text-gray-700 dark:text-gray-400">{{users}}
                                        </p>
                                        <h2 class="text-sm text-gray-700 dark:text-gray-400">Clientes Cadastrados</h2>
                                    </div>
                                </div>
                                <div class="w-full px-4 mb-6 sm:w-1/2 md:w-1/2 lg:mb-6">
                                    <div class="p-6 bg-white dark:bg-gray-900">
                                        <span class="text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                            </svg>
                                        </span>
                                        <p class="mt-4 mb-2 text-3xl font-bold text-gray-700 dark:text-gray-400">{{orders}}
                                        </p>
                                        <h2 class="text-sm text-gray-700 dark:text-gray-400">Vendas ONLINE</h2>
                                    </div>
                                </div>
                                <div class="w-full px-4 mb-6 sm:w-1/2 md:w-1/2 lg:mb-6">
                                    <div class="p-6 bg-white dark:bg-gray-900">
                                        <span class="text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
                                                <path
                                                    d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
                                            </svg>
                                        </span>
                                        <p class="mt-4 mb-2 text-3xl font-bold text-gray-700 dark:text-gray-400">98%
                                        </p>
                                        <h2 class="text-sm text-gray-700 dark:text-gray-400">Pontualidade</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0" style="position: relative;">
                        <img src="https://i.postimg.cc/9MW8G96J/pexels-the-coach-space-2977565.jpg" alt=""
                            class="absolute inset-0 w-full h-full rounded">
                    </div>


                </div>
            </div>
        </section>


    </UserLayouts>
</template>