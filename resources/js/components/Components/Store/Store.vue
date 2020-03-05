<template>
    <div id="root">
        <div id="top-bar">
            Store / Tools
        </div>

        <div id="bottom">
            <div id="sidebar">
                <div id="product-type">
                    b
                </div>
                <div id="price-range">
                    b
                </div>
            </div>

            <div id="product-grid">
                <span v-for="product in products" :key="product.id">
                    <ProductSmall :image="product.image_url" :name="product.name" :description="product.description" :price="product.price"></ProductSmall>
                </span>
            </div>
        </div>
    </div>
</template>

<style scoped>

    #bottom {
        margin-top: 3%;
    }

    #top-bar {
        background-color: #F2F2F2;
        padding: 30px;
        width: 100%;
        position: relative;
        z-index: -100;
        color: #00A896;
    }

    #sidebar {
        float: left;
        width: 20%;
        padding: 15px;
        margin-left: 2%;
    }

    #product-type {
        width: 100%;
        max-width: 250px;
        height: 300px;
        background-color: pink;
    }

    #product-range {
        margin-top: 20px;
        width: 200px;
        height: 100px;
        background-color: pink;
    }

    #product-grid {
        width: 70%;
        float: right;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 250px));
        height: 300px;
        grid-row-gap: 25px;
    }
</style>

<script>
    import ProductSmall from './StoreComponents/ProductSmall'
    import axios from 'axios';

    export default {
        name: "Store",
        components: {
            ProductSmall
        },
        data() {
            return {
                products: []
            }
        },
        mounted() {
            axios.get('api/product/seeds').then(response => (this.products = response.data));
        }
    }
</script>