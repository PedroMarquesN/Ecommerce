<script setup>
import { onMounted, ref } from 'vue'
import { initFlowbite } from 'flowbite'
import UserAdminLayout from '../Components/AdminLayout.vue'
import LineChart from './LineChart.vue'




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
  </UserAdminLayout>
</template>


