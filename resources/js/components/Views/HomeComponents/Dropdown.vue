<template>
    <div class="root">
        <!-- TODO: Pass through category name and router link -->
        <div id="title" @mouseover="drop" @mouseleave="close"> 
            {{title}}
        </div>

        <!-- TODO: Loop and pass through categories and router links -->
        <div id="dropdown" @mouseover="drop" @mouseleave="close">
            <p>Category</p>
            <p>Category</p>
            <p>Category</p>
            <p>Category</p>
        </div>
    </div>
</template>

<!-- CSS -->
<style>
    #title {
        height: 100%;
        padding: 15px;
        padding-top: 23px;
        color: #FFFFFF;
        text-align: center;
        margin-top: -12px;
        font-size: 20px;
    }

    #dropdown {
        display: none;
        background-color: #FFFFFF;
        width: 100%;
        position: absolute;
        left: 0;
        margin-top: -15px;
    }

    p {
        padding: 11px;
        margin: 0;
    }

    p:hover {
        background-color: aqua;
    }
</style>

<script>
    export default {
        methods: {
            drop: function() {
                document.getElementById("dropdown").style.display = "block";
                document.getElementById("title").style.backgroundColor = "#ffffff";
                document.getElementById("title").style.color = "#90d197";
            },
            close: function() {
                document.getElementById("dropdown").style.display = "none";
                document.getElementById("title").style.backgroundColor = "transparent";
                document.getElementById("title").style.color = "#ffffff";
            }
        },
        props: ['title']
    }
</script>