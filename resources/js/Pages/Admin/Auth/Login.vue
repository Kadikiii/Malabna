<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('admin.login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<style>
.font-cairo {
  font-family: "Cairo", sans-serif;
}
.rtl {
    direction: rtl;
    text-align: right;
}
</style>
<template>
    <GuestLayout class="">
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form class="" @submit.prevent="submit">
            <div class="mb-6 text-center text-2xl">
                <h2>Admin Login</h2>
            </div>
            <div class="rtl font-cairo">
                <InputLabel for="email" value="البريد الالكتروني" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div >

            <div class="mt-4 rtl font-cairo">
                <InputLabel for="password" value="كلمة المرور" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4 rtl font-cairo">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">تذكرني</span>
                </label>
            </div>

            <div class="flex items-center  mt-4 rtl font-cairo ">
                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    تسجيل الدخول
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
