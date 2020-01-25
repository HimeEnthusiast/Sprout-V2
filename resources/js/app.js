import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//Vue
import App from './components/Views/App'
import Home from './components/Components/Home'
import Register from './components/Components/Account/Register'
import Login from './components/Components/Account/Login'

//Router
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        }
    ]
})

const app = new Vue ({
    el: '#app',
    components: { App },
    router,
    methods: {
        drop() {
            document.getElementById(dropdown).style.display = "block";
        }
    }
});