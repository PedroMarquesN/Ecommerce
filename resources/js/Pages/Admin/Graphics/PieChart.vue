<script setup>
import { onMounted, ref } from 'vue'
import { Link, router } from '@inertiajs/vue3'
import { initFlowbite } from 'flowbite'
import UserAdminLayout from '../Components/AdminLayout.vue'
import { Pie } from 'vue-chartjs'
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
  ArcElement
} from 'chart.js'

ChartJS.register(ArcElement, Tooltip, Legend, CategoryScale, LinearScale, BarElement, Title)

const data = ref({
  labels: ['Pizza', 'Hamburguer', 'Salada', 'Sobremesa', 'Bebida'],
  datasets: [
    {
      label: 'Vendas',
      data: [1500, 1200, 500, 800, 1000],
      backgroundColor: ['#FF4500', '#FFD700', '#32CD32', '#8A2BE2', '#1E90FF'],
      borderColor: '#ffffff',
      borderWidth: 1,
    },
  ],
})

const options = ref({
  responsive: true,
  maintainAspectRatio: false,
  legend: {
    display: true,
    position: 'bottom', // ou 'right', ou false para esconder
  },
  scales: {
    x: {
      grid: {
        display: false,
      },
    },
    y: {
      grid: {
        display: false,
      },
      ticks: {
        callback: (value) => '$' + value,
      },
    },
  },
})

// inicializar os componentes com base nos seletores de atributos de dados
onMounted(() => {
  initFlowbite();
})

</script>

<template>
  <UserAdminLayout>
    <div class="max-w-5xl w-full bg-white rounded-lg md:ml-44 shadow dark:bg-gray-800 p-4 md:p-6">
      <div class="flex justify-between mb-5">
        <div>
          <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
          <p class="text-base font-normal text-gray-500 dark:text-gray-400">Vendas Da Semana</p>
        </div>
        <div
          class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
          23%
          <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 13V1m0 0L1 5m4-4 4 4" />
          </svg>
        </div>
      </div>
      <div id="bar-chart" class="mb-4">
        <!-- Adicione o componente Vue Chart.js aqui com a classe de estilo desejada -->
        <Pie :data="data" :options="options" class="chart-style" />
      </div>
      <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
        <div class="flex justify-between items-center pt-5">
          <!-- Botão -->
          <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
            type="button">
            Últimos 7 dias
            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <!-- Menu suspenso -->
          <div id="lastDaysdropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Últimos
                  7
                  dias</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
                  days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
                  days</a>
              </li>
            </ul>
          </div>
          <!-- Relatório de Vendas -->
          <a href="#"
            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
            Relatório de Vendas
            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="flex max-w-6x1 flex-nowrap justify-between mt-10 md:ml-36 mr-4">
      <Link :href="route('graphic.index')" type="button"
        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
      Gráfico de Vendas</Link>

      <Link :href="route('graphic.bar')" type="button"
        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
      Gráfico de Pedidos</Link>

  </div>
</UserAdminLayout></template>