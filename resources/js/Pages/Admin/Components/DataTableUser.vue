<script setup>
import { router, usePage } from '@inertiajs/vue3'
import Swal from 'sweetalert2';
import { ref } from 'vue';

const users = usePage().props.users;
const isAdduser = ref(false);
const dialogVisible = ref(false);
const editMode = ref(false);

//user data
const id = ref('')
const first_name = ref('')
const last_name = ref('')
const phone_number = ref('')
const email = ref('')
//end



//add user method
const addUser = async () => {
    const formData = new FormData();
    formData.append('first_name', first_name.value);
    formData.append('last_name', last_name.value);
    formData.append('email', email.value);
    formData.append('phone_number', phone_number.value);
   
    try {
        router.post('users/store', formData, {
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
    first_name.value = '';
    last_name.value = '';
    email.value = '';
    phone_number.value = '';
}

//open add modal
const openAddModal = () => {
    resetFormData();
    isAdduser.value = true
    dialogVisible.value = true
    editMode.value = false
}
const openEditModal = (user) => {
    //update form data
    id.value = user.id
    first_name.value = user.first_name
    last_name.value = user.last_name
    email.value = user.email
    phone_number.value = user.phone_number

    editMode.value = true
    isAdduser.value = false
    dialogVisible.value = true
}


</script>
<template>
    <section class="bg-dark-50 dark:bg-dark-900 p-3 sm:p-5 font-cairo">
        <!-- Dialog for adding user or edit -->
        <el-dialog v-model="dialogVisible" :title="editMode ? 'Edit user' : 'Add user'" width="1000"
            :before-close="handleClose">
            <!-- Form Starts -->
            <section class="bg-dark white:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <form @submit.prevent="addUser()">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">First Name</label>
                                <input v-model="first_name" type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type First name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Last Name</label>
                                <input v-model="last_name" id="last_name" rows="8"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white white:focus:ring-primary-500 white:focus:border-primary-500"
                                    placeholder="Type Last name"></input>
                            </div>
                            <div class="w-full">
                                <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">
                                    Phone Number</label>
                                <input v-model="phone_number" type="number" name="tel" id="tel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="09********" required="">
                            </div>

                            <div  class="sm:col-span-2">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 white:text-dark">Email</label>
                                <input v-model="email" type="text" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 white:bg-gray-700 white:border-gray-600 white:placeholder-gray-400 white:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="user@example.example" required="">
                            </div>
                        </div>

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
                        <!-- <button type="button" @click="openAddModal"
                            class="flex items-center justify-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-small rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            Add user
                        </button> -->
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-dark-500 dark:text-dark-400">
                        <thead class="text-xs text-dark-700 uppercase bg-dark-50 dark:bg-dark-700 dark:text-dark-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">First Name</th>
                                <th scope="col" class="px-4 py-3">Last Name</th>
                                <th scope="col" class="px-4 py-3">email</th>
                                <th scope="col" class="px-4 py-3">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b dark:border-dark-700" v-for="user in users" :key="user.id">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-dark-900  darkspace-nowrap dark:text-dark">{{
                                        user.first_name }}</th>
                                <td class="px-4 py-3">{{ user.last_name }}</td>
                                <td class="px-4 py-3">{{ user.email }}</td>
                                <td class="px-4 py-3">{{ user.phone_number }}</td>
                                <td class="px-4 py-3">
                                   

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</template>
