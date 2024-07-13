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

//Images upload
const courtImages = ref([])
const dialogImageUrl = ref('')
const handleFileChange = (file) => {
    console.log(file)
    courtImages.value.push(file)
}

const handlePictureCardPreview = (file) => {
    dialogImageUrl.value = file.url
    dialogVisible.value = true
}

const handleRemove = (file) => {
    console.log(file)
}

//add court method
const addCourt = async () => {
    const formData = new FormData();
    formData.append('name', name.value);
    formData.append('description', description.value);
    formData.append('address', address.value);
    formData.append('price_per_hour', price_per_hour.value);
    formData.append('court_images', court_images.value);

    //append court images to the form Data
    for (const image of courtImages.value) {
        formData.append('court_images[]', image.raw);
    }

    try {
        router.post('courts/store', formData, {
            onSuccess: page => {
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    position: 'center',
                    showConfirmButton: false,
                    title: page.props.flash.success,
                })
                dialogVisible.value = false
                resetFormData();
            },
        })

    } catch (error) {
        console.log('error')
    }
}



//Reset form data
const resetFormData = () => {
    id.value = '';
    name.value = '';
    description.value = '';
    address.value = '';
    price_per_hour.value = '';
    court_images.value = [];
    dialogImageUrl.value = '';
}

//open add modal
const openAddModal = () => {
    resetFormData();
    isAddCourt.value = true
    dialogVisible.value = true
    editMode.value = false
}
const openEditModal = (court) => {
    //update form data
    id.value = court.id
    name.value = court.name
    description.value = court.description
    address.value = court.address
    price_per_hour.value = court.price_per_hour
    courtImages.value = court.court_images

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
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">
                                    Price Per Hour</label>
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

                        <!--Multiple Images Upload-->
                        <div class="grid md:gap-6">
                            <div
                                class="block  text-sm font-medium text-gray-900 white:text-dark relative z-0 w-full mb-6 mt-6 group">
                                <el-upload v-model:file-list="courtImages" list-type="picture-card" multiple
                                    :on-preview="handlePictureCardPreview" :on-change="handleFileChange"
                                    :on-remove="handleRemove">
                                    <el-icon>
                                        <Plus />
                                    </el-icon>
                                </el-upload>
                            </div>
                        </div>
                        <!--Multiple Images Upload Ends-->

                        <!--List of Images for selected court-->
                        <div>
                            <div v-for="cimage in courtImages" :key="cimage.id" class="relative">
                                <img class="w-10 h-10 rounded-full" src="'/${cimage.image}" alt="">
                                <span
                                    class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                            </div>
                        </div>

                        <!--List of Images for selected court Ends-->



                        <button type="submit"
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
