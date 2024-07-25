<style>
.rtl {
  direction: rtl;
  text-align: right;
}

.font-cairo {
  font-family: "Cairo", sans-serif;
}
</style>
<script setup>
import NavBar from "./Components/NavBar.vue";
import Footer from "./Components/Footer.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
  <NavBar />
  <section class="py-8 px bg-white md:py-16 dark:bg-whites-400 antialiased rtl">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
          

<div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
         <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://5.imimg.com/data5/SELLER/Default/2021/5/EY/RW/SB/3103550/futsal-court-construction-500x500.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="https://arturf.com/wp-content/uploads/2018/12/Indoor-football-grass-field-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpghttps://ik.imagekit.io/femedia/Brands/FunEmpire/Media_Articles/Media%20Images/Malaysia/The-Sports-Barn-PJ-Futsal-Court-KL-Selangor.webp/tr:w-500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://i0.wp.com/www.futsalturf.com/wp-content/uploads/2023/11/1-Featured-Product-Regalawn-Futsal-Turf.jpg?resize=960%2C540&ssl=1" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://www.dugoutchennai.com/wp-content/uploads/2022/12/image_futsal-2.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <div class="flex justify-center items-center pt-4 rtl">
        <button type="button" class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-green group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
               
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="flex justify-center items-center h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="text-gray-400 hover:text-gray-900 dark:hover:text-green group-focus:text-gray-900 dark:group-focus:text-white">
                <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>

        </div>
  
        <div class="mt-6 sm:mt-8 lg:mt-0">
          <h1 class="text-xl font-cairo text-gray-900 sm:text-2xl dark:text-green-600">
            {{ court.name }}
          </h1>
          <h2 class="text-xl font-cairo text-gray-900 sm:text-2xl dark:text-dark">
            {{ court.address }}
          </h2>
          <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
            <p class="text-2xl font-cairo text-gray-900 sm:text-3xl dark:text-dark">
              LYD ( للساعه )  {{ court.price_per_hour }} 
            </p>
          </div>
  
          <div class="mt-6 font-cairo sm:gap-4 sm:items-center sm:flex sm:mt-8">
            <p class="mb-6 font-cairo text-gray-500 dark:text-dark-400">
                {{ court.description }}
              </p>
          </div>
  
          <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
            <Link class="font-cairo"> حجز الملعب </Link>
        </div>
      </div>
    </div>
  </section>
  <Footer />
</template>

<script>
export default {
  props: {
    court: {
      type: Object,
      required: true,
    },
  },
};
</script>
