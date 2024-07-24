<script setup>
import NavBar from './Components/NavBar.vue';
import Footer from './Components/Footer.vue';
import CourtsView from './Components/CourtsView.vue';
import { router, useForm } from '@inertiajs/vue3';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { ref } from 'vue'
import {
  Dialog,
  DialogPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import { XMarkIcon } from '@heroicons/vue/24/outline'
import { ChevronDownIcon, FunnelIcon, MinusIcon, PlusIcon, Squares2X2Icon } from '@heroicons/vue/20/solid'

const sortOptions = [
  { name: 'Most Popular', href: '#', current: true },
  { name: 'Best Rating', href: '#', current: false },
  { name: 'Newest', href: '#', current: false },
  { name: 'Price: Low to High', href: '#', current: false },
  { name: 'Price: High to Low', href: '#', current: false },
]

const filters = [
  {
    id: 'category',
    name: 'Category',
    options: [
      { value: 'new-arrivals', label: 'New Arrivals', checked: false },
      { value: 'sale', label: 'Sale', checked: false },
      { value: 'travel', label: 'Travel', checked: true },
      { value: 'organization', label: 'Organization', checked: false },
      { value: 'accessories', label: 'Accessories', checked: false },
    ],
  },
  
]
const mobileFiltersOpen = ref(false)

const props = defineProps ({
    courts: Array
})

const filterPrices = useForm({
    prices: [0, 150]
})

const priceFilter = () => {
    filterPrices.transform((data) => ({
        ...data,
        prices: {
            from: filterPrices.prices[0],
            to: filterPrices.prices[1]
        }
    })).get('courts', {
        preserveState: true,
        replace: true
    })
}

function updateFilteredProducts() {
    router.get('courts', {
        preserveState: true,
        replace: true
    })
}

</script>
<style>
.rtl {
    direction: rtl;
    text-align: right;
  }
  
  .font-cairo {
    font-family: "Cairo", sans-serif;
  }
</style>
<template>
<NavBar></NavBar>
<div class="bg-white font-cairo rtl">
    <div>
      <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class=" border-b border-gray-200 pb-6 pt-24">
          <h1 class="text-4xl mb-7 font-bold tracking-tight text-green-900">الملاعب</h1>
          <div class="flex items-center">
            <section aria-labelledby="products-heading" class="pb-24 pt-6">
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-1">
                    <!-- Filters -->
                        <!-- price filter -->
                        <div class=" ">
                            <div class="basis-1/3">
                                <label for="filters-price-from"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">
                                    من
                                </label>
    
                                <input type="number" id="filters-price-from" placeholder="Min price"
                                    v-model="filterPrices.prices[0]"
                                    class="text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block  p-2.5 dark:bg-white-700  dark:placeholder-gray-400 dark:text-dark dark:focus:ring-green-500 dark:focus:border-green-500">
                            </div>
                            <div class="basis-1/3">
                                <label for="filters-price-to"
                                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-dark">
                                    الى
                                </label>
    
                                <input type="number" id="filters-price-to" v-model="filterPrices.prices[1]"
                                    placeholder="Max price"
                                    class="text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block  p-2.5 dark:bg-white-700  dark:placeholder-gray-400 dark:text-dark dark:focus:ring-green-500 dark:focus:border-green-500">
                            </div>
                            <div>
                                <SecondaryButton class="mt-4" @click="priceFilter()">
                                    Ok
                                </SecondaryButton>
                            </div>
                        </div>
                        
                        <!-- end -->
                    <!-- Product grid -->
                    <div class="lg:col-span-3">
                        <!-- Your content -->
                        <CourtsView :courts="courts.data"></CourtsView>
                    </div>
                </div>
            </section>
          </div>
        </div>
      </main>
    </div>
  </div>
<Footer></Footer>
</template>