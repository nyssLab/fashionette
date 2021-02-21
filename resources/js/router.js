import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import Item from './pages/Item.vue';
import Search from './pages/Search.vue';
import AboutUs from "./pages/AboutUs";
import NotFound from "./pages/NotFound";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/search',
            name: 'search',
            component: Search
        },
        {
            path: '/about-us',
            name: 'about',
            component: AboutUs
        },
        {
            path: '/shows/:id',
            name: 'item',
            component: Item
        },
        {
            // path: "*",
            path: "/:catchAll(.*)",
            name: "notfound",
            component: NotFound,
        }
    ]
});

export default router;
