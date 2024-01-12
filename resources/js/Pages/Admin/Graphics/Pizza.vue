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
import { Pie } from 'vue-chartjs'

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
  labels: ['Category 1', 'Category 2', 'Category 3'],
  datasets: [
    {
      data: [300, 50, 100],
      backgroundColor: ['#1A56DB', '#7E3BF2', '#34D399'],
      borderColor: '#fff',
      borderWidth: 2,
    },
  ],
});

const options = ref({
  responsive: true,
  maintainAspectRatio: false,
  elements: {
    arc: {
      borderWidth: 0,
    },
  },
  plugins: {
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        font: {
          size: 14,
        },
      },
    },
  },
  layout: {
    padding: {
      left: 20,
      right: 20,
      top: 20,
      bottom: 20,
    },
  },
  tooltips: {
    bodyFont: {
      size: 14,
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
    <div>
    <pie :data="data" :options="options" class="chart-style"></pie>
  </div>
    <div class="flex flex-nowrap justify-between mt-10 ">
      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Gráfico de Produtos</button>
 
      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Gráfico de Pedidos</button>

    </div>

</UserAdminLayout></template>