<script setup>
import { onMounted, ref } from 'vue'
import { initFlowbite } from 'flowbite'
import UserAdminLayout from '../Components/AdminLayout.vue'
import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
} from 'chart.js'
import { Line } from 'vue-chartjs'

ChartJS.register(
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Title,
  Tooltip,
  Legend
)


const data = ref({
  labels: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
  datasets: [
    {
      label: 'Loja virtual',
      data: [1500, 1418, 1456, 1526, 1356, 1256],
      backgroundColor: '#1A56DB',
      borderColor: '#1A56DB',
      lineTension: 0,
    },
    {
      label: 'Loja PLatinum',
      data: [643, 413, 765, 412, 1423, 1731],
      backgroundColor: '#7E3BF2',
      borderColor: '#7E3BF2',
      lineTension: 0,
    },
  ],
})

const options = ref({
  responsive: true,
  maintainAspectRatio: false,
  legend: {
    display: true,
  },
  scales: {
    x: {
      display: false,
    },
    y: {
      display: false,
      ticks: {
        callback: (value) => '$' + value,
      },
    },
  },
  elements: {
    line: {
      shadow: {
        color: '#7E3BF2', // Cor da sombra
        blur: 10, // Intensidade do desfoque
        offsetX: 10, // Deslocamento horizontal
        offsetY: 5, // Deslocamento vertical
      },
    },
  },
});




// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();

})

</script>

<template>
  <UserAdminLayout>
    <div class="max-w-xl w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
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
      <div id="line-chart" class="mb-4">
        <!-- Adicione o componente Vue Chart.js aqui com a classe de estilo desejada -->
        <Line :data="data" :options="options" class="chart-style" />
      </div>
      <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
        <div class="flex justify-between items-center pt-5">
          <!-- Botão -->
          <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
            type="button">
            Ultimos 7 dias
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
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Últimos 7
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
</UserAdminLayout></template>