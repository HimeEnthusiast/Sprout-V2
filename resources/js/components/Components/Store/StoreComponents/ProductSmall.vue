<template>
    <div id="root">
        <div id="product">
            <img id="product-photo" v-bind:src="image" />
            <div id="product-name">
                {{name}}
            </div>
            <div id="product-desc">
                {{description}}
            </div>
            <div id="product-price">
                {{price}}
            </div>
        </div>
    </div>
</template>

<style scoped>
    #product {
        width: 13%;
        min-width: 200px;
        color: #00A896;
    }

    #product-photo {
        width: 100%;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0 3px 5px #0000007a;
    }

    #product-name {
        font-weight: bolder;
        font-size: 160%;
        padding: 5px 5px 0 5px;
    }

    #product-desc {
        padding: 0 0 2px 5px;
    }

    #product-price {
        padding-left: 5px;
        font-size: 120%;
    }
</style>

<style scoped>

</style>

<script>
    export default {
        props: [
            'image',
            'name',
            'description',
            'price'
        ]
    }
</script>