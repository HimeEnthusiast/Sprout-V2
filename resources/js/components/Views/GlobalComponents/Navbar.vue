<template>
  <div id="root">
    <div id="top-container">
        <span id="login">
            <router-link class="router-link" :to="{name: 'login'}">Login</router-link>
        </span>
        <span id="register">
            <router-link class="router-link" :to="{name: 'register'}">Register</router-link>
        </span>
    </div>

    <div id="bottom-container">
      <!-- TODO: Seeds, Pots, Tools, Soil // Account -->
      <router-link :to="{name: 'home'}" tag="img" src="/storage/images/logoaltcolour.svg"></router-link>

      <span id="categories">
        <Dropdown title="Seeds"></Dropdown>
        <Dropdown title="Planters"></Dropdown>
        <Dropdown title="Tools"></Dropdown>
        <Dropdown title="Soil"></Dropdown>
      </span>

      <span id="icons">
        <svg
            id="search-svg"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="search"
            class="svg-inline--fa fa-search fa-w-16"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            >
            <path
                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
            />
        </svg>
        <svg
            id="cart-svg"
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="shopping-cart"
            class="svg-inline--fa fa-shopping-cart fa-w-18"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512"
            >
            <path
                d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"
            />
        </svg>
      </span>
    </div>
  </div>
</template>

<!-- CSS -->
<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway&display=swap');

    #root {
        font-family: 'Quicksand', sans-serif;
    }

    .router-link {
        text-decoration: none;
        color: #ffffff;
    }

    #top-container {
        background-color: #00A896;
        padding: 6px;
        vertical-align: middle;
        text-align: end;
        position: relative;
        z-index: 100;
        box-shadow: 0 1px 5px #0000004a;
    }

    #bottom-container {
        background-color: #B2EDE0;
        display: flex;
        align-items: center;
        /* padding: 10px; */
        box-shadow: 0 3px 5px #0000007a;
    }

    img {
        /* width: 150px; */
        width: 20%;
        max-width: 160px;
        min-width: 120px;
        margin-right: 5%;
        margin-left: 10px;
        cursor: pointer;
    }

    #categories {
        display: flex;
        /* justify-content: center; */
        /* margin-left: 5%; */
        /* margin: auto; */
        width: 75%;
    }

    #icons {
        margin-left: auto;
        width: 20%;
        text-align: right;
    }

    svg {
        width: 30px;
        padding: 10px;
    }

    #search-svg, #cart-svg {
        fill: #00A896;
    }

    #search-svg:hover, #cart-svg:hover {
        fill: #ffffff;
    }

    #register, #login {
        margin-right: 20px;
    }

    @media only screen and (max-width: 767px) {
        /* #bottom-container {
            background-color: blue;
        } */
    }
</style>

<script>
import Dropdown from "./Dropdown";

export default {
  name: "Navbar",
  components: {
    Dropdown
  }
};
</script>