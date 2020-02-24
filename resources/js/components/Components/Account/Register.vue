<template>
    <div id="root">
        <div id="banner">
            <p id="banner-title">Register for a new account.</p>
            <p id="banner-blurb">This will allow you to save your orders to look at later, as well as saving order information for faster checkout!</p>
            <svg id="sprout-svg" viewBox="0 0 512 512.00034" xmlns="http://www.w3.org/2000/svg">
                <path d="m437.09375 201.09375c48.304688-48.304688 74.90625-112.53125 74.90625-180.84375v-.25c0-11.046875-8.953125-20-20-20h-.25c-68.3125 0-132.539062 26.601562-180.84375 74.90625-23.742188 23.746094-42.230469 51.34375-54.90625 81.378906-12.675781-30.035156-31.160156-57.632812-54.90625-81.378906-48.304688-48.304688-112.53125-74.90625-180.84375-74.90625h-.25c-11.046875 0-20 8.953125-20 20v.25c0 68.3125 26.601562 132.539062 74.90625 180.84375 43.621094 43.621094 100.222656 69.535156 161.09375 74.152344v121.242187c-79.785156 3.734375-159.15625 29.9375-227.679688 79.28125-8.964843 6.453125-10.996093 18.953125-4.542968 27.914063 3.910156 5.429687 10.035156 8.316406 16.246094 8.316406 4.085937 0 229.703124-169.8125 460.28125-3.769531 8.964843 6.453125 21.460937 4.417969 27.914062-4.542969 6.457031-8.964844 4.421875-21.464844-4.539062-27.917969-64.957032-46.773437-143.511719-75.339843-227.679688-79.28125v-121.242187c60.871094-4.617188 117.472656-30.53125 161.09375-74.152344zm-97.902344-97.902344c35.824219-35.824218 82.027344-57.5 131.832032-62.214844-4.714844 49.804688-26.390626 96.007813-62.214844 131.832032-35.824219 35.824218-82.03125 57.5-131.832032 62.214844 4.714844-49.800782 26.390626-96.007813 62.214844-131.832032zm-236 69.617188c-35.824218-35.824219-57.5-82.03125-62.214844-131.832032 49.800782 4.714844 96.007813 26.390626 131.832032 62.214844 35.824218 35.824219 57.5 82.03125 62.214844 131.832032-49.800782-4.714844-96.007813-26.390626-131.832032-62.214844zm0 0"/>
            </svg>
        </div>
        <div id="registration">
            <form id="reg-form">
                <span id="name-input">
                    Name: <input type="text" name="name" placeholder="Jane Doe" />
                </span>

                <span id="email-input">
                    Email: <input type="email" name="email" placeholder="example@mail.com" />
                    Confirm Email: <input type="email" name="confirm-name" />
                </span>

                <span id="password-input">
                    Password: <input type="password" name="password" />
                    Confirm Password: <input type="password" name="confirm-password" />
                </span>

                <span id="newsletter-input">
                    <input id="checkbox" type="checkbox" name="newsletter" /> Would you like to join our newsletter?
                </span>

                <input id="submit-button" type="submit" value="Register" />
            </form>
        </div>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway&display=swap');

    span {
        display: flex;
        flex-direction: column;
        padding-bottom: 4%;
    }

    input {
        margin-bottom: 2%;
        margin-top: 1%;
        padding: 2%;
        width: 40vh;
        border-radius: 5px;
        font-family: 'Raleway', sans-serif;
        border: 1px solid rgb(206, 206, 206);
    }

    #root {
        font-family: 'Quicksand', sans-serif;
        height: 100%;
        display: flex;
        flex-direction: row;
    }

    #banner-title {
        padding: 30px;
        margin: 2% 0 0 0;
        font-size: 50px;
        font-weight: bolder;
        color: #ffffff;
    }

    #banner-blurb {
        padding: 0 30px 30px 30px;
        margin: 0;
        font-size: 20px;
        color: #ffffff;
        font-family: 'Raleway', sans-serif;
    }

    #banner {
        background-color: #00A896;
        height: 100%;
        width: 30%;
        min-width: 300px;
        z-index: -100;
        overflow: hidden;
        position: relative;
    }

    #sprout-svg {
        fill: white;
        width: 60%;
        display: block;
        margin: auto;
        position: absolute;
        bottom: 0;
        left: 0;
        top: 0;
        right: 0;
        margin-bottom: -20px;
    }

    #registration {
        display: flex;
        float: right;
        margin-top: 5%;
        justify-content: center;
        width: 70%;
    }

    #reg-form {
        display: flex;
        flex-direction: column;
        color: #00A896;
        font-size: 20px;
    }

    #submit-button {
        padding: 10px;
        align-self: center;
        width: 12vw;
        font-size: 20px;
        background-color: #00A896;
        border: none;
        font-family: 'Quicksand', sans-serif;
        font-weight: bolder;
        color: #ffffff;
    }

    #newsletter-input {
        flex-direction: row;
        font-size: 20px;
    }

    #checkbox {
        width: 0;
        margin-right: 5px;
        vertical-align: middle; /* Not working? */
    }
</style>

<script>
export default {
    name: "Register"
}
</script>