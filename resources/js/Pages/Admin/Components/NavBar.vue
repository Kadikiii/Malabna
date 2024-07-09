<template>
    <nav
        class="bg-white border-b border-gray-200 px-4 py-2.5 gray:bg-gray-800 gray:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-2 text-dark-600 rounded-lg cursor-pointer md:hidden hover:text-dark-900 hover:bg-dark-100 focus:bg-dark-100 dark:focus:bg-dark-700 focus:ring-2 focus:ring-dark-100 dark:focus:ring-dark-700 dark:text-dark-400 dark:hover:bg-dark-700 dark:hover:text-dark">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <Link :href="route('admin.dashboard')" method="get" as="button" class="group-hover:text-gray-900 flex items-center justify-between mr-4">
                    <svg width="61" height="50" viewBox="0 0 61 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.3243 69C12.5483 69 11.2403 68.328 10.4003 66.984C9.58431 65.616 9.17631 63.612 9.17631 60.972C9.17631 58.98 9.21231 57.036 9.28431 55.14C9.38031 53.244 9.48831 51.504 9.60831 49.92C9.72831 48.312 9.86031 46.932 10.0043 45.78C10.1483 44.604 10.2803 43.752 10.4003 43.224C10.6883 42.024 11.1203 40.716 11.6963 39.3L12.4523 39.516C12.1883 41.148 11.9843 43.236 11.8403 45.78C11.6963 48.324 11.6243 51.312 11.6243 54.744C11.6243 55.656 11.6483 56.616 11.6963 57.624C11.7683 58.608 11.9363 59.532 12.2003 60.396C12.4883 61.26 12.9323 61.968 13.5323 62.52C14.1563 63.048 15.0083 63.312 16.0883 63.312C17.1203 63.312 17.6363 63.996 17.6363 65.364C17.6363 66.276 17.4563 66.996 17.0963 67.524C16.7363 68.052 16.2923 68.436 15.7643 68.676C15.2603 68.892 14.7803 69 14.3243 69ZM20.8482 53.048C19.8402 52.016 18.8442 51.128 17.8602 50.384V50.06C18.0762 49.748 18.4002 49.352 18.8322 48.872C19.2402 48.368 19.6602 47.9 20.0922 47.468C20.5002 47.012 20.8002 46.724 20.9922 46.604H21.3162C22.4202 47.3 23.1642 47.888 23.5482 48.368C23.9322 48.824 24.1242 49.256 24.1242 49.664C24.1242 50.528 23.1282 51.656 21.1362 53.048H20.8482ZM14.2773 69C13.2693 69 12.7653 68.316 12.7653 66.948C12.7653 66.06 12.9453 65.352 13.3053 64.824C13.6413 64.296 14.0613 63.912 14.5653 63.672C15.0933 63.432 15.5973 63.312 16.0773 63.312C17.5173 63.312 18.6693 62.76 19.5333 61.656L20.7573 60.036C21.1413 59.508 21.6333 59.244 22.2333 59.244C22.7853 59.244 23.2533 59.364 23.6373 59.604C24.0213 59.844 24.5133 59.964 25.1133 59.964C25.4253 59.964 25.6773 60.108 25.8693 60.396C26.0613 60.684 26.1573 60.996 26.1573 61.332C26.1573 62.172 25.8933 62.796 25.3653 63.204C24.8373 63.588 24.3453 63.78 23.8893 63.78C23.2173 63.78 22.6293 63.636 22.1253 63.348C21.6693 63.06 21.3213 62.916 21.0813 62.916C20.7933 62.916 20.5293 63.084 20.2893 63.42C20.0493 63.732 19.7613 64.152 19.4253 64.68C18.9453 65.448 18.4533 66.168 17.9493 66.84C17.4693 67.488 16.9293 68.016 16.3293 68.424C15.7533 68.808 15.0693 69 14.2773 69ZM29.7076 74.732C29.2036 74.204 28.6996 73.712 28.1956 73.256C27.6916 72.824 27.1996 72.416 26.7196 72.032V71.744C26.9356 71.432 27.2596 71.024 27.6916 70.52C28.0996 70.04 28.5196 69.572 28.9516 69.116C29.3596 68.684 29.6596 68.408 29.8516 68.288H30.1756C31.1116 68.888 31.8076 69.416 32.2636 69.872C32.7436 70.352 32.9836 70.832 32.9836 71.312C32.9836 72.176 31.9876 73.316 29.9956 74.732H29.7076ZM23.875 63C23.683 63 23.467 62.892 23.227 62.676C22.963 62.46 22.831 62.1 22.831 61.596C22.831 60.828 23.083 60.24 23.587 59.832C24.067 59.4 24.559 59.184 25.063 59.184C25.615 59.184 26.131 58.932 26.611 58.428C27.115 57.924 27.451 57.192 27.619 56.232C27.571 55.968 27.523 55.704 27.475 55.44C27.451 55.152 27.439 54.852 27.439 54.54C27.439 53.964 27.535 53.268 27.727 52.452C27.919 51.612 28.135 50.808 28.375 50.04C28.639 49.272 28.879 48.696 29.095 48.312L29.851 48.492C29.707 49.068 29.635 49.584 29.635 50.04C29.635 51.024 29.851 51.792 30.283 52.344C30.715 52.896 31.255 53.28 31.903 53.496C32.551 53.712 33.199 53.82 33.847 53.82C34.423 53.82 34.819 54.036 35.035 54.468C35.275 54.876 35.395 55.344 35.395 55.872C35.395 56.784 35.203 57.516 34.819 58.068C34.459 58.596 34.015 58.968 33.487 59.184C32.983 59.4 32.503 59.508 32.047 59.508C31.231 59.508 30.499 59.388 29.851 59.148C29.227 58.884 28.699 58.416 28.267 57.744C28.123 58.56 27.871 59.376 27.511 60.192C27.151 60.984 26.671 61.656 26.071 62.208C25.471 62.736 24.739 63 23.875 63ZM31.9961 60C30.9641 60 30.4481 59.316 30.4481 57.948C30.4481 57.06 30.6281 56.352 30.9881 55.824C31.3481 55.296 31.7801 54.912 32.2841 54.672C32.8121 54.432 33.3041 54.312 33.7601 54.312C35.1761 54.312 36.4601 54.036 37.6121 53.484C37.1801 52.644 36.7361 52.02 36.2801 51.612C35.8481 51.204 35.3081 51 34.6601 51H34.1201L33.9401 50.676C34.4681 49.524 35.2481 48.672 36.2801 48.12C37.3121 47.568 38.3921 47.292 39.5201 47.292C40.1921 47.292 40.8281 47.388 41.4281 47.58C42.0521 47.772 42.5561 48.072 42.9401 48.48C43.3481 48.864 43.5521 49.368 43.5521 49.992C43.5521 50.568 43.3961 51.108 43.0841 51.612C42.7721 52.116 42.2681 52.692 41.5721 53.34C41.7641 53.436 42.0641 53.484 42.4721 53.484C42.7361 53.484 42.9401 53.592 43.0841 53.808C43.2281 54.024 43.3001 54.288 43.3001 54.6C43.3001 55.344 43.1321 55.86 42.7961 56.148C42.4841 56.412 42.0161 56.544 41.3921 56.544C40.6001 56.544 39.9041 56.34 39.3041 55.932C38.1041 57.036 37.0841 57.888 36.2441 58.488C35.4041 59.064 34.6481 59.46 33.9761 59.676C33.3281 59.892 32.6681 60 31.9961 60ZM41.3828 56C41.1668 56 40.9748 55.916 40.8068 55.748C40.6148 55.556 40.5188 55.268 40.5188 54.884C40.5188 54.212 40.7468 53.72 41.2028 53.408C41.6348 53.096 42.0068 52.94 42.3188 52.94C43.3748 52.94 44.2988 52.652 45.0908 52.076C45.8828 51.476 46.5428 50.684 47.0708 49.7C47.5988 48.692 47.9948 47.588 48.2588 46.388C48.4508 45.548 48.5948 44.084 48.6908 41.996C48.7388 40.94 48.7988 39.716 48.8708 38.324C48.9668 36.932 49.0628 35.36 49.1588 33.608C49.2548 32.24 49.3748 31.016 49.5188 29.936C49.6868 28.832 49.9148 27.8 50.2028 26.84C50.5148 25.856 50.8868 24.86 51.3188 23.852L52.0388 24.068C51.7508 25.484 51.5228 27.404 51.3548 29.828C51.2108 32.228 51.1388 35.132 51.1388 38.54C51.1388 40.004 51.2108 41.36 51.3548 42.608C51.4988 43.856 51.8468 44.864 52.3988 45.632C52.9508 46.376 53.8268 46.748 55.0268 46.748C56.0588 46.748 56.5748 47.432 56.5748 48.8C56.5748 49.712 56.3948 50.432 56.0348 50.96C55.6748 51.488 55.2308 51.872 54.7028 52.112C54.1988 52.328 53.7188 52.436 53.2628 52.436C52.0148 52.436 51.0788 52.1 50.4548 51.428C49.8308 50.732 49.3988 50.012 49.1588 49.268C48.3188 51.716 47.2388 53.456 45.9188 54.488C44.5988 55.496 43.0868 56 41.3828 56ZM53.2305 53C52.1985 53 51.6825 52.316 51.6825 50.948C51.6825 49.748 52.0305 48.848 52.7265 48.248C53.3985 47.624 54.1545 47.312 54.9945 47.312C55.1385 47.312 55.2825 47.276 55.4265 47.204L56.9745 43.748C57.0225 43.724 57.1185 43.712 57.2625 43.712C57.8625 43.712 58.3185 43.928 58.6305 44.36C58.9425 44.792 59.0985 45.308 59.0985 45.908C59.0985 47.228 58.8345 48.428 58.3065 49.508C57.8025 50.588 57.1065 51.44 56.2185 52.064C55.3545 52.688 54.3585 53 53.2305 53Z" fill="#3C8457"/>
                        </svg>
                    <span class="self-center text-1xl font-semibold whitespace-nowrap gray:text-white">Dashboard</span>
                </Link>
                <form action="#" method="GET" class="hidden md:block md:pl-2">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="relative  md:w-96">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-dark-500 gray:text-dark-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search"
                            class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10 p-2.5 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 gray:text-white gray:focus:ring-primary-500 gray:focus:border-primary-500"
                            placeholder="Search" />
                    </div>
                </form>
            </div>
            <div class="flex items-center lg:order-2">
                <button type="button" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation"
                    class="p-2 mr-1 text-dark-500 rounded-lg md:hidden hover:text-dark-900 hover:bg-dark-100 dark:text-dark-400 gray:hover:text-white gray:hover:bg-gray-700 focus:ring-4 focus:ring-dark-300 dark:focus:ring-dark-600">
                    <span class="sr-only">Toggle search</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </button>
                <!-- Apps -->
                <button type="button" data-dropdown-toggle="apps-dropdown"
                    class="p-2 text-gray-500 rounded-lg hover:text-green-900 hover:bg-green-100 green:text-gray-400 green:hover:text-white green:hover:bg-gray-700 focus:ring-4 focus:ring-green-300 green:focus:ring-gray-600">
                    <span class="sr-only">View notifications</span>
                    <!-- Icon -->
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                </button>
                <!-- Logout menu -->
                <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white divide-y divide-gray-100 shadow-lg rounded-xl"
                    id="apps-dropdown">
                    <div
                        class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-100">
                        Admin
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <Link :href="route('logout')" method="post" as="button"
                            class="block p-4 text-center rounded-lg hover:bg-gray-200 group">
                        <svg aria-hidden="true"
                            class="mx-auto mb-1 w-7 h-7 text-green-400 group-hover:text-green-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <div class="text-sm text-gray-900">
                            Logout
                        </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logout menu Ends -->
    </nav>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>