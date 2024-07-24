<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
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
    <GuestLayout>
        <Head title="Forgot Password" />

        <div class="mb-4 text-sm text-gray-600 rtl font-cairo">
            نسيت كلمة السر؟ لا مشكلة. فقط أخبرنا بعنوان بريدك الإلكتروني وسنرسل إليك بريدًا إلكترونيًا لإعادة تعيين كلمة المرور
            الرابط الذي سيسمح لك باختيار رابط جديد.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel class="rtl font-cairo" for="email" value="البريد الالكتروني" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full rtl "
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-end mt-4 font-cairo">
                
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    رابط إعادة تعيين كلمة المرور للبريد الإلكتروني
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
