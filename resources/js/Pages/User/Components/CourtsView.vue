<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'


defineProps ({
  courts:Array,
  court_images:Array
})

</script>
<template>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" >
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
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ court.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ court.address }}</p>
            </div>
            <p class="text-xl font-medium text-gray-900"><span class="text-lime-700 text-base"> LYD ( للساعه )  </span>{{ court.price_per_hour }}</p>
          </div>
        </div>
      </div>
</template>