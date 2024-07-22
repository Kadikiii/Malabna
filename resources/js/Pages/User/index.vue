<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Layout from './Components/Layout.vue';
import svg3 from './Components/svg3.vue';
import { Link, usePage } from '@inertiajs/vue3';
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
defineProps ({
  courts:Array,
  court_images:Array
})


</script>
<template>
    <Layout>
      <section class="dark:bg-white-300 dark:text-gray-800 rtl">
        <div
          class="container flex flex-col justify-center p-1 mx-auto sm:py-2 lg:py-2 lg:flex-row lg:justify-between rtl">
          <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
              <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                  <h2 class="text-4xl font-cairo tracking-tight text-green-600">الأكثر حجزا
                  </h2>
                  <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div v-for="court in courts" :key="court.id" class="group relative font-cairo">
                      <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img v-if="court.court_images.length > 0" :src="'/${court_images[0].image}'" alt="court image"
                          class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
                          <img v-else src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNNLEL-qmmLeFR1nxJuepFOgPYfnwHR56vcw&s"
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
                          <p class="mt-1 text-sm text-gray-500">{{ court.description }}</p>
                        </div>
                        <p class="text-xl font-medium text-gray-900"><span class="text-lime-700 text-base"> LYD ( للساعه )  </span>{{ court.price_per_hour }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="dark:bg-green-300 dark:text-gray-800 rtl">
        <div
          class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between rtl">
          <div>
            <h1
              class="mb-4 text-4xl font-cairo leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">
              كيف تستفيد</h1>
            <p class="mb-8 mt-6 text-lg font-cairo text-dark lg:text-2xl dark:text-dark-400 font-serif">
              يقدم موقعنا الإلكتروني منصة مبسطة وسهلة الاستخدام تسمح لك بالبحث بسهولة عن ملاعب الكرة الخماسية المتاحة في
              بنغازي. من خلال كم زرة فقط، يمكنك عرض مدى التوفر في الوقت الفعلي وتأمين حجزك، مما يلغي
              الحاجة إلى إجراء مكالمات هاتفية تستغرق وقتًا طويلاً أو زيارة للملعب.
            </p>
            <Link :href="route('user.about')" rel="noopener noreferrer"
              class="font-cairo text-white bg-gradient-to-br from-green-700 to-green-600 hover:bg-gradient-to-bl focus:ring-1 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 px-8 py-3 text-lg font-semibold bg-white text-dark rounded-3xl hover:bg-gray-100">عرض
              المزيد</Link>
          </div>
          <div>
            <svg3></svg3>
          </div>
        </div>
      </section>
    </Layout>
</template>