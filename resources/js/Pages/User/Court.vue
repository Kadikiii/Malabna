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
  <NavBar class="mb-9" />
  <section class="py-16 px- mt-9 bg-white md:py-16 dark:bg-whites-400 antialiased rtl">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">

          <div class="w-full max-w-md bg-green-800 border border-gray-200 shadow rounded-lg p-5">
            <h2 class="text-lg font-cairo text-white mb-2">معلومات الملعب</h2>
            <address class="relative bg-gray-50 p-4 rounded-lg border border-gray-200 not-italic grid grid-cols-2">
              <div class="space-y-2 font-cairo text-gray-500 leading-loose hidden sm:block">
                الاسم <br />
                البريد الالكتروني <br />
                رقم الهاتف<br />
                الوصف
              </div>
              <div id="contact-details" class="space-y-2 text-gray-900 font-cairo leading-loose">
                {{ court.name }}<br />
                Court@example.com <br />
                0912345678<br />
                {{ court.address }}

              </div>
              <button data-copy-to-clipboard-target="contact-details" data-copy-to-clipboard-content-type="textContent"
                data-tooltip-target="tooltip-contact-details"
                class="absolute end-2 top-2 text-gray-500 hover:bg-gray-100 rounded-lg p-2 inline-flex items-center justify-center"
                @click="copyToClipboard" ref="copyButton">
                <span id="default-icon-contact-details" :class="{ 'hidden': isCopied }">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 20">
                    <path
                      d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                  </svg>
                </span>
                <span id="success-icon-contact-details" class="inline-flex items-center"
                  :class="{ 'inline-flex': isCopied, 'hidden': !isCopied }">
                  <svg class="w-3.5 h-3.5 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 16 12">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 5.917 5.724 10.5 15 1.5" />
                  </svg>
                </span>
              </button>
              <div id="tooltip-contact-details" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-cairo text-white transition-opacity duration-300 bg-green-600 rounded-lg shadow-sm opacity-0 tooltip">
                <span id="default-tooltip-message-contact-details" :class=" { 'hidden': isCopied }">نسخ المعلومات</span>
                <span id="success-tooltip-message-contact-details" class="hidden"
                  :class="{ 'inline': isCopied, 'hidden': !isCopied }">Copied!</span>
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            </address>
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
              LYD ( للساعه ) {{ court.price_per_hour }}
            </p>
          </div>

          <div class="mt-6 font-cairo sm:gap-4 sm:items-center sm:flex sm:mt-8">
            <p class="mb-6 font-cairo text-gray-500 dark:text-dark-400">
              {{ court.description }}
            </p>
          </div>
          <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
          <Link :href="route('checkout.store')"  class="block w-full rounded-md bg-green-600 px-3.5 py-2.5 text-center text-sm font-cairo text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600"> حجز الملعب </Link>
        </div>
      </div>
    </div>
  </section>
  <section class="py-1 mx-7  bg-white md:py-16 dark:bg-whites-400 antialiased ">
    <div id="gallery" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://www.dugoutchennai.com/wp-content/uploads/2022/12/image_futsal-2.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
          <img src="https://www.dugoutchennai.com/wp-content/uploads/2022/12/404dugout.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://media.timeout.com/images/101811475/750/562/image.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://i0.wp.com/www.futsalturf.com/wp-content/uploads/2023/11/1-Featured-Product-Regalawn-Futsal-Turf.jpg?resize=960%2C540&ssl=1"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="https://arturf.com/wp-content/uploads/2018/12/Indoor-football-grass-field-2.jpg"
            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
      </div>
      <!-- Slider controls -->
      <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-green-800/30 group-hover:bg-green/50 dark:group-hover:bg-green-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-green-400/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-green-800 rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
        
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-green-800/30 group-hover:bg-green/50 dark:group-hover:bg-green-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-green-400/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-green-800 rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
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
  data() {
    return {
      isCopied: false,
    };
  },
  methods: {
    copyToClipboard() {
      const targetElement = document.getElementById('contact-details');
      navigator.clipboard.writeText(targetElement.textContent);

      // Update the UI to show the "Copied!" state
      this.isCopied = true;

      // Reset the UI after a short delay
      setTimeout(() => {
        this.isCopied = false;
      }, 2000);
    },
  },
};

</script>
