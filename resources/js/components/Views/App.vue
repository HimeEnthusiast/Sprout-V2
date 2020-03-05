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
        width: 100%;
        overflow-x: hidden;
        position: absolute;
     }

     #nav {
        top: 0;
        height: 100.8px;
        position: relative;
        z-index: 1;
     }

     #container {
        position: relative;
        /* height: 90%; */
     }
</style>

<script>
    import Navbar from './GlobalComponents/Navbar'

    export default {
        name: 'App',
        components: {
            Navbar
        }
    }
</script>