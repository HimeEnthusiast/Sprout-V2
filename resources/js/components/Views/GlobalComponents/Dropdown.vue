<template>
    <div id="root">
        <!-- TODO: Pass through category name and router link -->
        <div id="title" ref="title" @mouseover="drop" @mouseleave="close"> 
            <router-link class="router-link" :to="{name: 'store'}">{{title}}</router-link>
        </div>

        <!-- TODO: Loop and pass through categories and router links -->
        <div id="dropdown" ref="dropdown" @mouseover="drop" @mouseleave="close">
            <p>Category</p>
            <p>Category</p>
            <p>Category</p>
            <p>Category</p>
        </div>
    </div>
</template>

<!-- CSS -->
<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway&display=swap');

    #root {
        font-family: 'Quicksand', sans-serif;
        height: 100%;
        /* width: 25%; */
    }

    #title {
        height: 100%;
        /* padding: 23px 30px 15px 30px; */
        padding: 1.1em 1em 1.1em 1em;
        display: flex;
        align-items: center;
        /* position: relative; */
        /* display: table-cell; */
        /* vertical-align: middle; */
        position: sticky;
        color: #00A896;
        font-weight: bold;
        text-align: center;
        /* margin-top: -12px; */
        font-size: 20px;
    }

    #dropdown {
        display: none;
        background-color: #FFFFFF;
        color: #00A896;
        width: 100%;
        position: absolute;
        left: 0;
        /* margin-top: -15px; */
        box-shadow: 0 3px 5px -3px #0000007a;
    }

    p {
        padding: 11px;
        margin: 0;
    }

    p:hover {
        background-color: #F2F2F2;
    }

    .router-link {
        text-decoration: none;
        color: #00A896;
    }
/* 
    @media only screen and (max-width: 990px) {

        #title {
            padding: 0 20% 0 20%;
            margin: auto;
            width: 100%;
        }
    } */

</style>

<script>
    export default {
        methods: {
            drop: function() {
                let title = this.$refs["title"];
                let dropdown = this.$refs["dropdown"];

                dropdown.style.display = "block";
                title.style.backgroundColor = "#ffffff";
                title.style.color = "#00A896";
            },
            close: function() {
                let title = this.$refs["title"];
                let dropdown = this.$refs["dropdown"];

                dropdown.style.display = "none";
                title.style.backgroundColor = "transparent";
                title.style.color = "#00A896";
            }
        },
        props: ['title']
    }
</script>