<template>
    <div id="root">
        <div id="banner">
            <p id="banner-title">Register for a new account.</p>
            <p id="banner-blurb">This will allow you to save your orders to look at later, as well as saving order information for faster checkout!</p>
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
        </div>git 
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway&display=swap');

    span {
        display: flex;
        flex-direction: column;
        padding-bottom: 20px;
    }

    input {
        margin-bottom: 10px;
        margin-top: 5px;
        padding: 7px;
        font-size: 15px;
        width: 20vw;
        border-radius: 5px;
        font-family: 'Raleway', sans-serif;
        border: 1px solid rgb(206, 206, 206);
    }

    #root {
        font-family: 'Quicksand', sans-serif;
    }

    #banner-title {
        padding: 30px;
        margin: 0;
        font-size: 50px;
        font-weight: bolder;
        color: #ffffff;
    }

    #banner-blurb {
        padding: 30px;
        font-size: 20px;
        color: #ffffff;
        font-family: 'Raleway', sans-serif;
    }

    #banner {
        background-color: #00A896;
        height: 100vh;
        width: 30%;
        min-width: 300px;
        overflow: hidden;
        position: fixed;
        z-index: -100;
    }

    #registration {
        display: flex;
        float: right;
        align-items: center;
        justify-content: center;
        width: 70%;
    }

    #reg-form {
        display: flex;
        flex-direction: column;
        margin-top: 10%;
        color: #00A896;
        font-size: 25px;
    }

    #submit-button {
        padding: 10px;
        align-self: center;
        width: 12vw;
        font-size: 25px;
        background-color: #00A896;
        border: none;
        font-family: 'Quicksand', sans-serif;
        font-weight: bolder;
        color: #ffffff;
    }

    #newsletter-input {
        flex-direction: row;
        font-size: 22px;
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