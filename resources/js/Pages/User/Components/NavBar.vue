<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
<style>
.rtl {
    direction: rtl;
    text-align: right;
}
.font-cairo {
    font-family: 'Cairo', sans-serif;
  }
</style>
<template>
    <nav class="font-cairo border-white-200 bg-white-50 white:bg-white-800 white:border-white-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <Link :href="route('user.home')" method="get" as="button"
                class="group-hover:text-gray-900 flex items-center justify-between mr-4">
            <ApplicationLogo></ApplicationLogo>
            </Link>
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center rtl text-sm text-white-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 white:text-gray-400 white:hover:bg-gray-700 white:focus:ring-gray-600"
                aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent white:bg-gray-800 md:white:bg-transparent white:border-gray-700">
                    <li>
                        <Link :href="route('user.home')"
                            class=" mt-3  rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent"
                            aria-current="page">الصفحة الرئيسية</Link>
                    </li>
                    <li>
                        <Link :href="route('user.contact')"
                        class=" mt-3 rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent">تواصل
                            معنا</Link>
                    </li>
                    <li>
                        <a href="#"
                            class=" mt-3 mb-4 rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent">اكتشف</a>
                    </li>
                    <ul class="rtl  flex">
                        <li>
                            <Link :href="route('register')" type="button" class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">انشاء حساب</Link>
                           
                        </li>
                        <li>
                            <Link :href="route('login')" type="button" class="border focus:outline-none text-dark bg-white-700 hover:bg-gray-200 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-white dark:hover:bg-gray-200 dark:focus:ring-green-800">تسجيل الدخول</Link>
                           
                        </li>
                    </ul>
                   
                </ul>
                <div>
                    <div class="hidden sm:ml-6 sm:block">
                    </div>
                </div>
            </div>

        </div>
    </nav>
</template>