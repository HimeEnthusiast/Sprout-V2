<template>
    <div id="root">
        <transition-group name="fade" tag="div">
            <div v-for="i in [currentIndex]" :key="i">
                <div id="titles">{{currentTitle}}</div>
                <img :src="currentImg" />
            </div>
        </transition-group>
    </div>
</template>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: all 0.9s ease;
    overflow: hidden;
    visibility: visible;
    position: absolute;
    width:100%;
    opacity: 1;
}

#titles {
    position: absolute;
    z-index: 100;
    bottom: 14%;
    font-size: 500%;
    margin-left: 2%;
    color: #ffffff;
    filter: drop-shadow(5px 4px 2px #000000);
    font-weight: bolder;
}

.fade-enter, .fade-leave-to {
    visibility: hidden;
    width:100%;
    opacity: 0;
}

img {
    height: 100vh;
    width: 100%
}
</style>

<script>
    export default {
        name: "Slideshow",
        data() {
            return {
                images: [
                    "https://images.unsplash.com/photo-1457530378978-8bac673b8062?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80",
                    "https://images.unsplash.com/photo-1500683401647-ff9f9781d5c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80p",
                    "https://images.unsplash.com/photo-1534301935032-8f808f3e5f08?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80"
                ],
                titles: [
                    "New seeds in stock.",
                    "Browse our wide arrange of flowers.",
                    "Plant a tree today."
                ],
                timer: null,
                currentIndex: 0
            };
        },
        mounted: function() {
            this.startSlide();
        },
        methods: {
            startSlide: function() {
                this.timer = setInterval(this.next, 6500);
            },
            next: function() {
                this.currentIndex += 1;
            }
        },
        computed: {
            currentImg: function() {
                return this.images[Math.abs(this.currentIndex) % this.images.length];
            },
            currentTitle: function() {
                return this.titles[Math.abs(this.currentIndex) % this.titles.length];
            }
        }
    };
</script>