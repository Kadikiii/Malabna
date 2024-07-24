<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavBar from './NavBar.vue';
import Footer from './Footer.vue';
import Hero from './Hero.vue';


</script>

<template>
    <NavBar></NavBar>
    <Hero></Hero>
    <slot/>
    <Footer></Footer>
</template>