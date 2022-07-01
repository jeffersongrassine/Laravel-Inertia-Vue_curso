<template>
  <div class="mt-4">
        <Link :href="route('home')" :class="{ 'font-bold': $page.url === '/home' }">Posts</Link> - 
        <Link :href="route('about')"  :class="{ 'font-bold': $page.url === '/about' }">Sobre</Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
    export default {
        name:'LayoutMenu',

        components: {
            Link
        }

     
        
    }
</script>

<style lang="scss" scoped>

</style>