

require('./bootstrap');
window.Vue = require('vue');

//vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar }
]


const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router
});
