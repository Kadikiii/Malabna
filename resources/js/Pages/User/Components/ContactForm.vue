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
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 rtl">
      
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-cairo tracking-tight text-gray-900 sm:text-4xl">اتصل بنا</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600 font-cairo">املأ النموذج أدناه بالتفاصيل الصحيحة وسيقوم فريقنا بالاتصال بك</p>
      </div>
      <form action="#" method="" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div>
            <label for="first-name" class="block text-sm font-cairo leading-6 text-gray-900">الاسم الأول</label>
            <div class="mt-2.5">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-sm font-cairo leading-6 text-gray-900">اسم العائلة</label>
            <div class="mt-2.5">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block text-sm font-cairo leading-6 text-gray-900">بريد إلكتروني</label>
            <div class="mt-2.5">
              <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" />
            </div>
            
          </div>
          <div class="sm:col-span-2">
            <label for="phone-number" class="block text-sm font-cairo leading-6 text-gray-900">رقم الهاتف</label>
            <div class="relative mt-2.5">
              <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block text-sm font-cairo leading-6 text-gray-900">رسالة </label>
            <div class="mt-2.5">
              <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          
        </div>
        <div class="mt-10">
          <button type="submit" class="block w-full rounded-md bg-green-600 px-3.5 py-2.5 text-center text-sm font-cairo text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">إرسال</button>
          <Link :href="route('user.index')" type="submit" class="block mt-4 w-full border rounded-md bg-white-600 px-3.5 py-2.5 text-center text-sm font-cairo text-dark shadow-sm hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">العودة</Link>
        </div>
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#7bcf73] to-[#15fd0d] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
        </div>
      </form>
      
    </div>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'
  const agreed = ref(false)
  </script>