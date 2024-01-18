<script setup>
import { onMounted, ref } from 'vue'
import { initFlowbite } from 'flowbite'
import UserAdminLayout from '../Components/AdminLayout.vue'
import LineChart from './LineChart.vue'
import { Link } from '@inertiajs/vue3'




// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();

})

</script>

<template>
  <UserAdminLayout>
    <div class="max-w-6xl w-full bg-white rounded-lg shadow dark:bg-gray-800 ml-12">
      <LineChart />
    </div>
        <div class="flex max-w-6x1 flex-nowrap justify-between mt-10 md:ml-36 mr-4">
      <Link :href="route('graphic.pie')" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Gráfico de Produtos</Link>
 
      <Link :href="route('graphic.bar')" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Gráfico de Pedidos</Link>

    </div>


  </UserAdminLayout>
</template>


