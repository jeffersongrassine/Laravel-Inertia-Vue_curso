<template>
    <div>
        <h1>Estou na página About</h1>
        <h2>Olá, {{ name }}!</h2>
        <h3>estou no curso de {{ curso }}</h3>
    </div>
</template>

<script>
    export default {
        name: 'PageAbout',

        props: {
            name: String,
            curso: String
        },
    }
</script>

<style lang="scss" scoped>

</style>