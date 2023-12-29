<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import Hero from "./Hero.vue";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});

</script>
<template>
    <!--Header-->
<Header></Header>
    <!--End Header-->
    <!--Hero Propaganda-->
<Hero></Hero>
    <!-- END Hero Propaganda-->
    <!--Main content-->
    <slot />
    <!-- END Main content-->
    <!--footer-->
<Footer></Footer>
    <!--end - footer-->
</template>
