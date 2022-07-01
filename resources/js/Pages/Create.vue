<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
</script>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
export default {
    name:'PageCreate',

    components: {
        Link, Head
    }
   
};
</script>

<template>
 <Head>
    <title>Novo Post</title>
  </Head>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Novo Post
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        
                    
                </div>
            </div>
        </div>
    </AppLayout>
</template>
