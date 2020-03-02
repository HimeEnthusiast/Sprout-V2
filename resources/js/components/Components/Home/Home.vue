<template>
    <div id="container">
        <Slideshow></Slideshow>
    </div>
</template>

<style scoped>
    #container {
        position: fixed;
        height: 100%;
        width: 100%;
        z-index: -1;
    }
</style>

<script>
    import Slideshow from './HomeComponents/Slideshow'

    export default {
        name: "Home",
        components: {
            Slideshow
        }
    }
</script>