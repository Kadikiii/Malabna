<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    nextTick(() => passwordInput.value.focus());
};

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
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
    <section class="space-y-6 font-cairo rtl">
        <header>
            <h2 class="font-cairo text-lg font-medium text-gray-900">حذف الحساب</h2>

            <p class="mt-1 text-sm text-gray-600">
                بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته نهائيًا. قبل الحذف
                حسابك، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.
            </p>
        </header>

        <DangerButton @click="confirmUserDeletion">حذف الحساب</DangerButton>

        <Modal :show="confirmingUserDeletion" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-cairo rtl font-medium text-gray-900">
                    هل انت متأكد انك تريد حذف حسابك؟</h2>

                <p class="mt-1 font-cairo rtl text-sm text-gray-600">
                    بمجرد حذف حسابك، سيتم حذف جميع موارده وبياناته نهائيًا. لو سمحت
                    أدخل كلمة المرور الخاصة بك لتأكيد رغبتك في حذف حسابك نهائيًا.</p>

                <div class="mt-6 rtl">
                    <InputLabel for="password" value="Password" class="sr-only font-cairo rtl" />

                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-3/4 font-cairo rtl"
                        placeholder="Password"
                        @keyup.enter="deleteUser"
                    />

                    <InputError :message="form.errors.password" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end font-cairo ">
                    <SecondaryButton @click="closeModal"> إلغاء</SecondaryButton>

                    <DangerButton
                        class="ms-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                    حذف الحساب
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
