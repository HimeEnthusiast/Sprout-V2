<template>
    <div id="background">
        <Navbar></Navbar>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<style scoped>
    
</style>

<script>
    import Navbar from './HomeComponents/Navbar'

    export default {
        name: 'App',
        components: {
            Navbar
        }
    }
</script>