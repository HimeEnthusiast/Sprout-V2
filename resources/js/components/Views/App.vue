<template style="height: 100%;">
    <div id="whole">
        <div id="nav">
            <Navbar></Navbar>
        </div>

        <div id="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<style scoped>
     #whole {
         height: 100%;
     }

     #nav {
         height: 11%;
     }

     #container {
         height: 89%;
     }
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