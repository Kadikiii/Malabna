<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import { usePage } from '@inertiajs/vue3';
const canLogin = usePage().props.canLogin;
const canRegister = usePage().props.canRegister;
const auth = usePage().props.auth;


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

.group:hover .dark\:hover\:text-white {
    color: white !important;
  }
</style>
<template>
    <nav class="font-cairo border-white-200 bg-white-50 white:bg-white-800 white:border-white-700">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-1">
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
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="navbar-solid-bg">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent white:bg-gray-800 md:white:bg-transparent white:border-gray-700">
                    <li>
                        <Link :href="route('user.home')"
                            class=" mt-3  rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent"
                            aria-current="page">الصفحة الرئيسية</Link>
                    </li>
                    <li>
                        <Link :href="route('user.contact')"
                            class=" mt-3 rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent">
                        تواصل
                        معنا</Link>
                    </li>
                    <li>
                        <Link :href="route('user.about')"
                            class=" mt-3 mb-4 rtl block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 white:text-white md:white:hover:text-green-500 white:hover:bg-gray-700 white:hover:text-white md:white:hover:bg-transparent">
                        من نحن</Link>
                    </li>

                </ul>
                <div class="flex items-center lg:order-2 rtl">
                    <div class="flex items-center lg:order-2 rtl">
                        <div v-if="canLogin" class="flex items-center gap-4">
                            <div class="font-medium dark:text-green-700 rtl ">
                                <Link v-if="auth.user" :href="route('profile.edit')"
                                    class="ml-3 mt-3 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-dark dark:hover:text-gray-900 focus:ring-1 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-white-900 rounded-md group-hover:bg-opacity-0 flex items-center">
                                    ادارة الحساب
                                    <svg class="dark:hover:text-white w-6 h-6 text-gray-800 dark:text-dark mr-2 transition-colors duration-300"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                </Link>

                                <Link v-if="auth.user" :href="route('logout')" method="post" as="button"
                                    class="ml-9 mt-3 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-dark dark:hover:text-gray-900 focus:ring-1 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-white-900 rounded-md group-hover:bg-opacity-0 flex items-center">
                                    تسجيل خروج
                                    <svg  class="dark:hover:text-white w-6 h-6 text-gray-800 dark:text-dark mr-2 transition-colors duration-300"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                      </svg>
                                      
                                </span>
                                </Link>
                                

                                <div v-else class="ml-9 mt-3">
                                    <Link v-if="canRegister " :href="route('register')" type="button"
                                        class="text-white bg-gradient-to-br from-purple-600 to-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    انشاء حساب</Link>
                                    <Link :href="route('login')" type="button"
                                        class="text-white bg-gradient-to-r from-cyan-700 to-green-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    تسجيل الدخول</Link>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="hidden sm:ml-6 sm:block">
                    </div>
                </div>
            </div>

        </div>
    </nav>
</template>