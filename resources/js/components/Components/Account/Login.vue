<template>
    <div id="root">
        <div id="banner">
            <p id="banner-title">Log in to your account.</p>
            <p id="banner-blurb">Welcome back!</p>

            <svg id="sprout-svg" viewBox="0 0 512 512.00034" xmlns="http://www.w3.org/2000/svg">
                <path d="m437.09375 201.09375c48.304688-48.304688 74.90625-112.53125 74.90625-180.84375v-.25c0-11.046875-8.953125-20-20-20h-.25c-68.3125 0-132.539062 26.601562-180.84375 74.90625-23.742188 23.746094-42.230469 51.34375-54.90625 81.378906-12.675781-30.035156-31.160156-57.632812-54.90625-81.378906-48.304688-48.304688-112.53125-74.90625-180.84375-74.90625h-.25c-11.046875 0-20 8.953125-20 20v.25c0 68.3125 26.601562 132.539062 74.90625 180.84375 43.621094 43.621094 100.222656 69.535156 161.09375 74.152344v121.242187c-79.785156 3.734375-159.15625 29.9375-227.679688 79.28125-8.964843 6.453125-10.996093 18.953125-4.542968 27.914063 3.910156 5.429687 10.035156 8.316406 16.246094 8.316406 4.085937 0 229.703124-169.8125 460.28125-3.769531 8.964843 6.453125 21.460937 4.417969 27.914062-4.542969 6.457031-8.964844 4.421875-21.464844-4.539062-27.917969-64.957032-46.773437-143.511719-75.339843-227.679688-79.28125v-121.242187c60.871094-4.617188 117.472656-30.53125 161.09375-74.152344zm-97.902344-97.902344c35.824219-35.824218 82.027344-57.5 131.832032-62.214844-4.714844 49.804688-26.390626 96.007813-62.214844 131.832032-35.824219 35.824218-82.03125 57.5-131.832032 62.214844 4.714844-49.800782 26.390626-96.007813 62.214844-131.832032zm-236 69.617188c-35.824218-35.824219-57.5-82.03125-62.214844-131.832032 49.800782 4.714844 96.007813 26.390626 131.832032 62.214844 35.824218 35.824219 57.5 82.03125 62.214844 131.832032-49.800782-4.714844-96.007813-26.390626-131.832032-62.214844zm0 0"/>
            </svg>
        </div>

        <div id="login">
            <form id="login-form">
                <span id="login-image">
                    <svg id="login-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                        <g>
                            <path d="M285.966,273.369c36.162-25.386,44.897-75.281,19.51-111.442s-75.281-44.897-111.442-19.51s-44.897,75.281-19.51,111.442
                                c5.324,7.584,11.926,14.186,19.51,19.51c-42.717,7.343-73.96,44.35-74.034,87.694V472c-0.001,4.417,3.579,7.999,7.996,8
                                c0.001,0,0.003,0,0.004,0h224c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004V361.062
                                C359.925,317.719,328.683,280.712,285.966,273.369z M176,208c0-35.346,28.654-64,64-64c35.346,0,64,28.654,64,64
                                c0,35.346-28.654,64-64,64C204.671,271.96,176.04,243.329,176,208z M344,464H136V361.062c0.045-40.332,32.73-73.017,73.063-73.062
                                h61.875c40.332,0.045,73.017,32.73,73.062,73.062V464z"/>
                        </g>
                        <g>
                            <rect x="232" y="48" width="16" height="32"/>
                        </g>
                        <g>
                            <rect x="312.003" y="76.672" transform="matrix(0.7071 -0.7071 0.7071 0.7071 36.1983 256.7335)" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="408" y="464" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="408" y="384" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="408" y="304" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="400.028" y="224.004" transform="matrix(0.9486 -0.3164 0.3164 0.9486 -52.0304 143.5361)" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="375.174" y="141.039" transform="matrix(0.9486 -0.3164 0.3164 0.9486 -27.0591 131.4119)" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="144.004" y="68.683" transform="matrix(0.7072 -0.707 0.707 0.7072 -15.3631 132.2722)" width="16" height="32"/>
                        </g>
                        <g>
                            <rect x="40" y="464" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="40" y="384" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="40" y="304" width="32" height="16"/>
                        </g>
                        <g>
                            <rect x="56.004" y="215.996" transform="matrix(0.3161 -0.9487 0.9487 0.3161 -176.3279 219.372)" width="16" height="32"/>
                        </g>
                        <g>
                            <rect x="80.808" y="133.076" transform="matrix(0.3163 -0.9487 0.9487 0.3163 -80.7029 186.1785)" width="16" height="32"/>
                        </g>
                        <g>
                            <path d="M472,32c-13.249-0.014-23.986-10.751-24-24c0-4.418-3.582-8-8-8s-8,3.582-8,8c-0.014,13.249-10.751,23.986-24,24
                                c-4.418,0-8,3.582-8,8s3.582,8,8,8c13.249,0.014,23.986,10.751,24,24c0,4.418,3.582,8,8,8s8-3.582,8-8
                                c0.014-13.249,10.751-23.986,24-24c4.418,0,8-3.582,8-8S476.418,32,472,32z M440,48.023c-2.283-3.039-4.984-5.74-8.023-8.023
                                c3.039-2.283,5.74-4.984,8.023-8.023c2.283,3.039,4.984,5.74,8.023,8.023C444.984,42.283,442.283,44.984,440,48.023z"/>
                        </g>
                        <g>
                            <path d="M72,32C58.751,31.986,48.014,21.249,48,8c0-4.418-3.582-8-8-8s-8,3.582-8,8C31.986,21.249,21.249,31.986,8,32
                                c-4.418,0-8,3.582-8,8s3.582,8,8,8c13.249,0.014,23.986,10.751,24,24c0,4.418,3.582,8,8,8s8-3.582,8-8
                                c0.014-13.249,10.751-23.986,24-24c4.418,0,8-3.582,8-8S76.418,32,72,32z M40,48.023c-2.283-3.039-4.984-5.74-8.023-8.023
                                c3.039-2.283,5.74-4.984,8.023-8.023c2.283,3.039,4.984,5.74,8.023,8.023C44.984,42.283,42.283,44.984,40,48.023z"/>
                        </g>
                    </svg>
                </span>

                <span id="email-input">
                    Email: <input type="email" name="email" placeholder="example@mail.com" />
                </span>

                <span id="password-input">
                    Password: <input type="password" name="password" />
                </span>

                <input id="submit-button" type="submit" value="Log in" />
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

    #login-svg {
        width: 10%;
        fill: #00A896;
    }

    #login {
        display: flex;
        float: right;
        margin-top: 5%;
        justify-content: center;
        width: 70%;
    }

    #login-form {
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
</style>

<script>
    export default {
        name: "Login"
    }
</script>