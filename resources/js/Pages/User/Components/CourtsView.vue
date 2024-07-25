<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import { Link } from '@inertiajs/vue3';
import {ref} from 'vue'
import { router, usePage } from '@inertiajs/vue3'


const searchQuery = ref('');

defineProps({
  courts: Array,
  court_images: Array
})

const searchCourts = () => {
    router.post(route('search.courts'), {
        searchQuery: searchQuery.value
    }).then(response => {
        courts.value = response.data.courts;
    });
};
</script>
<template>

  <form @submit.prevent="searchCourts" method="POST" class="max-w-md mx-auto">
    <label for="default-search" class="mb-4 text-sm font-cairo text-white-900 sr-only dark:text-dark">Search</label>
    <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>
      </div>
      <input type="search" id="default-search"
        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-green-500 dark:focus:border-green-500"
        placeholder="البحث عن الملاعب" 
        required 
        v-model="searchQuery" 
        @input="searchCourts"
        />
      <button type="submit"
        class="text-white absolute end-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">البحث</button>
    </div>
  </form>

  <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
    <div v-for="court in courts" :key="court.id" class="group relative font-cairo ml-16">
      <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img v-if="court.court_images.length > 0" :src="'/${court_images[0].image}'" alt="court image"
          class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
        <img v-else src="https://www.dugoutchennai.com/wp-content/uploads/2022/12/image_futsal-2.jpg"
          class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
      </div>
      <div class="mt-4 flex justify-between">
        <div>
          <h3 class="text-sm text-gray-700">
            <Link :href="route('courts.show', court.id)" class="font-cairo">
            <span aria-hidden="true" class="absolute inset-0" />
            {{ court.name }}
            </Link>
          </h3>
          <p class="mt-1 text-sm text-gray-500">{{ court.address }}</p>
        </div>
        <p class="text-xl font-medium text-gray-900"><span class="text-lime-700 text-base"> LYD ( للساعه ) </span>{{
          court.price_per_hour }}</p>
      </div>
    </div>
  </div>
</template>