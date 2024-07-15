<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import NavBar from './Components/NavBar.vue'
import Hero from './Components/Hero.vue'
import Footer from './Components/Footer.vue';
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
<template>
    <NavBar></NavBar>
    <Hero></Hero>
    <Footer></Footer>
</template>