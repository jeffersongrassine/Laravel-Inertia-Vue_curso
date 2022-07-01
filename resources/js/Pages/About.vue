<template>
  <Head>
    <title>Sobre</title>
    <meta name="pagina home ....." conten="papodjakfkasj fjfo f" />
  </Head>
    <div>
        <h1>Estou na página About</h1>
        <h2>Olá, {{ name }}!</h2>
        <h3>estou no curso de {{ curso }}</h3>

        <!-- Links -->
    <menu-layout />
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import MenuLayout from '../Layouts/LayoutMenu.vue'

    export default {
        name: 'PageAbout',

        components: {
            Link,
            Head,
            MenuLayout
        },

        props: {
            name: String,
            curso: String
        },
    }
</script>

<style lang="scss" scoped>

</style>