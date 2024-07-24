<style>
.font-cairo {
  font-family: "Cairo", sans-serif;
}

.rtl {
    direction: rtl;
    text-align: right;
}
</style>
<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import NavBar from './NavBar.vue'
import Footer from './Footer.vue';
</script>
<template>
    <NavBar></NavBar>
    <section class="bg-gray-900 dark:bg-white font-cairo rtl mt">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-400 sm:text-lg dark:text-gray-500">
                <h2 class="mb-4 text-4xl tracking-tight font-cairo text-white dark:text-gray-900">من نحن</h2>
                <p class="mb-4">أنشأنا هذا الموقع الإلكتروني لجعل حجز ملاعب الكرة الخماسية أسهل وأكثر كفاءة من أي وقت مضى

                    هدفنا هو تمكين الناس في بنغازي من ممارسة هوايتهم المفضلة في كرة القدم بطريقة سلسة وسريعة. من خلال منصتنا الرقمية، يمكن للاعبين والفرق البحث عن الملاعب المتاحة في الوقت الفعلي وحجزها في غضون دقائق، مما يوفر عليهم الوقت والجهد الذي كانوا يبذلونه في الاتصال هاتفياً أو زيارة الملاعب.
                    
                    نحن فخورون بأننا نساهم في إحياء ثقافة كرة القدم في مجتمعنا وتوفير منصة رقمية موثوقة تلبي احتياجات اللاعبين. سنواصل العمل بجد لتحسين خدماتنا وتوسيع نطاق تغطيتنا لتشمل المزيد من المناطق في بنغازي.
                    
                    إذا كان لديك أي أسئلة أو اقتراحات، فلا تتردد في التواصل معنا. نحن هنا لخدمتك!</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://www.dugoutchennai.com/wp-content/uploads/2022/12/image_futsal-2.jpg" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://arturf.com/wp-content/uploads/2018/12/Indoor-football-grass-field-2.jpg" alt="office content 2">
            </div>
            <Link :href="route('user.contact')" rel="noopener noreferrer"
            class="font-cairo text-white bg-gradient-to-br text-center from-green-700 to-green-600 hover:bg-gradient-to-bl focus:ring-1 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 px-8 py-3 text-lg  bg-white text-dark rounded-3xl hover:bg-gray-100">
            تواصل معنا</Link>
        </div>

       

    </section>
<Footer></Footer>
</template>