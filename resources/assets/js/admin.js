import Vue from 'vue';
import Admin from './components/Admin.vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [];

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    base: '/admin',
    router,
    render: h => h(Admin)
}).$mount('#app');
