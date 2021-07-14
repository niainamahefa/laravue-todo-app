require('./bootstrap');

window.Vue = require('vue');
import Router from 'vue-router';
Vue.use(Router);

import Home from './components/HomeComponent'
import Task from './components/TaskComponent'


/*
Routes
 */

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/tasks',
        component: Task
    }
];

/*
Router
 */
const router = new Router({routes});

Vue.component('add-task', require('./components/AddTaskComponent'));

//Vue.component('example', require('./components/HomeComponent.vue'));

const app = new Vue({
    el: '#app',
    router: router
});
