<script setup>
import { router, usePage } from '@inertiajs/vue3'
import Swal from 'sweetalert2';
import { ref } from 'vue';

const courts = usePage().props.courts;
const isAddCourt = ref(false);
const dialogVisible = ref(false);
const editMode = ref(false);

//court data
const id = ref('')
const name = ref('')
const description = ref('')
const address = ref('')
const price_per_hour = ref('')
const court_images = ref([])
//end 

const courtImages = ref([])

//add court method
const addCourt = async () => {
    const formData = new FormData();
    formData.append('name', name.value);
    formData.append('description', description.value);
    formData.append('address', address.value);
    formData.append('price_per_hour', price_per_hour.value);

    //append court images to the form Data
    for (const image of courtImages.value) {
        formData.append('court_images[]', image.raw);
    }

    try {
        await router.post('/courts/store', formData)
        onSuccess: page => {
            Swal.fire({
                toast: true,
                icon: 'success',
                position: 'top-end',
                showConfirmButton: false,
                title: page.props.flash.success,
            })
        }
    } catch (error) {
        console.log('error')
    }
}

//open add modal
const openAddModal = () => {
    isAddCourt.value = true
    dialogVisible.value = true
    editMode.value = false
}
const openEditModal = (court) => {
    console.log(court)
    editMode.value = true
    isAddCourt.value = false
    dialogVisible.value = true
}


</script>
<template>
    <section class="bg-dark-50 dark:bg-dark-900 p-3 sm:p-5">
        <!-- Dialog for adding court or edit -->
        <el-dialog v-model="dialogVisible" :title="editMode ? 'Edit Court' : 'Add Court'" width="1000"
            :before-close="handleClose">
            <!-- Form Starts -->
            <section class="bg-dark white:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 white:text-dark">Add a new Court</h2>
                    <form @submit.prevent="addCourt()">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Court
                                    Name</label>
                                <input v-model="name" type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type Court name" required="">
                            </div>

                            <div class="w-full">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Price Per
                                    Hour</label>
                                <input v-model="price_per_hour" type="number" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="50 LYD" required="">
                            </div>

                            <div>
                                <label for="Address"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Address</label>
                                <input v-model="address" type="text" name="Address" id="Address"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Description</label>
                                <textarea v-model="description" id="description" rows="8"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-primary-500 white:focus:border-primary-500"
                                    placeholder="Your description here"></textarea>
                            </div>
                        </div>
                        <button type="submit" @click="addCourt"
                            class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-700 rounded-lg focus:green-4 focus:ring-green-200 white:focus:ring-green-900 hover:bg-green-800">
                            Submit
                        </button>
                        <button type="cancel"
                            class=" ml-6 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-dark bg-white-700 rounded-lg  focus:green-4 focus:ring-green-200 white:focus:ring-green-900 hover:bg-gray-200">
                            Cancel
                        </button>
                    </form>
                </div>
            </section>
            <!-- Form Ends -->
            <template #footer>
                <div class="dialog-footer">

                </div>
            </template>
        </el-dialog>
        <!-- Dialog Ends -->

        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-dark dark:bg-dark-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-dark-500 dark:text-dark-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-dark-50 border border-dark-300 text-dark-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full pl-10 p-2 dark:bg-dark-700 dark:border-dark-600 dark:placeholder-dark-400 dark:text-dark dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" @click="openAddModal"
                            class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-small rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            Add Court
                        </button>

                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-dark-500 dark:text-dark-400">
                        <thead class="text-xs text-dark-700 uppercase bg-dark-50 dark:bg-dark-700 dark:text-dark-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Court name</th>
                                <th scope="col" class="px-4 py-3">description</th>
                                <th scope="col" class="px-4 py-3">Address</th>
                                <th scope="col" class="px-4 py-3">Price Per Hour</th>
                                <th scope="col" class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-dark-700" v-for="court in courts" :key="court.id">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-dark-900  darkspace-nowrap dark:text-dark">{{
                                        court.name }}</th>
                                <td class="px-4 py-3">{{ court.description }}</td>
                                <td class="px-4 py-3">{{ court.address }}</td>
                                <td class="px-4 py-3">{{ court.price_per_hour }}</td>
                                <td class="px-4 py-3">
                                    <button @click="openEditModal(court)"
                                        class="font-small bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                                        Edit</button>

                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete
                                    </button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</template>
