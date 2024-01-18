<script setup>
import UserAdminLayout from '../Components/AdminLayout.vue'
import {Link} from '@inertiajs/vue3'
 
</script>


<template>
    <UserAdminLayout>
        <div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8 md:ml-44">
            <div class="flex items-center justify-between pb-6">
                <div>
                    <h2 class="font-semibold text-gray-700">Contas De Usuários</h2>
                    <span class="text-xs text-gray-500">Ver contas de Usuários</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="ml-10 space-x-8 lg:ml-40">
                        <button
                            class="flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                            </svg>

                            CSV
                        </button>
                    </div>
                </div>
            </div>
            <div class="overflow-y-hidden rounded-lg border">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                                <th class="px-5 py-3">ID</th>
                                <th class="px-5 py-3">Nome</th>
                                <th class="px-5 py-3">Cargo</th>
                                <th class="px-5 py-3">Criado em</th>
                                <th class="px-5 py-3">Status</th>
                                <th class="px-5 py-3">Permissões</th>

                            </tr>
                        </thead>
                        <tbody class="text-gray-500">
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">3</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-full w-full rounded-full"
                                                src="https://super.abril.com.br/wp-content/uploads/2019/02/tecnologia-ia-rostos-01.png"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">Pedrão</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Administrator</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Sep 28, 2022</p>
                                </td>

                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span
                                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Ativo</span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <Link :href="route('user.detail')" type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2">Permissôes</Link>

                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">7</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-full w-full rounded-full"
                                                src="https://i.pinimg.com/236x/e7/58/c9/e758c94d8634e8ed6f14f021603ddfd1.jpg"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">Kamu Traveco</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Author</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Sep 28, 2022</p>
                                </td>

                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span
                                        class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Ativo</span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <Link :href="route('user.detail')" type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2">Permissôes</Link>

                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">12</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-full w-full rounded-full"
                                                src="https://st4.depositphotos.com/6903990/27898/i/450/depositphotos_278981062-stock-photo-beautiful-young-woman-with-clean.jpg"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">Elvis Son</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Editor</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Sep 28, 2022</p>
                                </td>

                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span
                                        class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">Suspenso</span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <Link :href="route('user.detail')" type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2">Permissôes</Link>

                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">66</p>
                                </td>
                                <td class="bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-full w-full rounded-full"
                                                src="https://s2-techtudo.glbimg.com/SSAPhiaAy_zLTOu3Tr3ZKu2H5vg=/0x0:1024x609/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/c/u/15eppqSmeTdHkoAKM0Uw/dall-e-2.jpg"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">Dana White</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Administrator</p>
                                </td>
                                <td class="bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Sep 28, 2022</p>
                                </td>

                                <td class="bg-white px-5 py-5 text-sm">
                                    <span
                                        class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Inativo</span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <Link :href="route('user.detail')" type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2">Permissôes</Link>

                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">12</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 flex-shrink-0">
                                            <img class="h-full w-full rounded-full"
                                                src="https://img.freepik.com/fotos-gratis/feche-o-retrato-de-um-rosto-jovem-barbudo_171337-2887.jpg?size=626&ext=jpg&ga=GA1.1.1412446893.1704412800&semt=ais"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="whitespace-no-wrap">Elvis Son</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Editor</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap">Sep 28, 2022</p>
                                </td>

                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span
                                        class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">Suspenso</span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <Link :href="route('user.detail')" type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2">Permissôes</Link>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col items-center border-t bg-white px-5 py-5 sm:flex-row sm:justify-between">
                    <span class="text-xs text-gray-600 sm:text-sm"> Showing 1 to 5 of 12 Entries </span>
                    <div class="mt-2 inline-flex sm:mt-0">
                        <button
                            class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Prev</button>
                        <button
                            class="h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Next</button>
                    </div>
            </div>
        </div>
    </div>
</UserAdminLayout></template>