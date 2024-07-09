<script setup>
import NavBar from './NavBar.vue';
import SideBar from './SideBar.vue';
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite';
onMounted(() => {
    initFlowbite();
})
</script>
<template>
    <div class="antialiased bg-dark-50 dark:bg-dark-900">

        <!-- NavBar Start -->
        <NavBar></NavBar>
        <!-- NavBar End -->

        <!-- Sidebar Start -->
        <SideBar></SideBar>
        <!-- Sidebar End -->



        <slot />

    </div>
</template>
