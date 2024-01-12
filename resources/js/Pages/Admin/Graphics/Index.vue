<script setup>
import { onMounted } from 'vue'
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

const data = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
  datasets: [
    {
      label: 'Data One',
      backgroundColor: '#f87979',
      data: [40, 39, 10, 40, 39, 80, 40]
    }
  ]
}


const options = {
  responsive: true,
  maintainAspectRatio: false
}




// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();

})

</script>

<template>
  <UserAdminLayout>
    <Line :data="data" :options="options" />
  </UserAdminLayout>
</template>