<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminLayout from './AdminLayout.vue';


defineProps({
    products: Array,
    users: Array,
    orders: Array,
});


onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <AdminLayout>
        <div class="flex space-x-4">
    <div class="flex-1">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Produtos</h5>
            </a>
            <p class="text-4xl font-extrabold text-indigo-500">{{ products }}</p>
            <p class="mb-3 text-sm font-medium text-gray-700 dark:text-gray-400">Quantidade de produtos disponíveis</p>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                Ver Detalhes
                <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>

    <div class="flex-1">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Usuários</h5>
            </a>
            <p class="text-4xl font-extrabold text-indigo-500">{{ users }}</p>
            <p class="mb-3 text-sm font-medium text-gray-700 dark:text-gray-400">Aqui estão os detalhes sobre a quantidade de usuários cadastrados.</p>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                Ver Detalhes
                <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>

    <div class="flex-1">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pedidos</h5>
            </a>
            <p class="text-4xl font-extrabold text-indigo-500">{{ orders }}</p>
            <p class="mb-3 text-sm font-medium text-gray-700 dark:text-gray-400">Aqui estão os detalhes sobre a quantidade de pedidos recebidos.</p>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                Ver Detalhes
                <svg class="rtl:rotate-180 w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>
</AdminLayout>
</template>
