import Vue from 'vue'
import Router from 'vue-router'

import Catalog from './components/catalog.vue'
import Cart from './components/cart.vue'
import Order from './components/order.vue'

Vue.use(Router)

let router = new Router({
    routes: [
        {
            path: '/',
            name: 'catalog',
            component: Catalog
        },
        {
            path: '/cart',
            name: 'cart',
            component: Cart,
            props: true
        },
        {
            path: '/order',
            name: 'order',
            component: Order,
            props: true
        }
    ]
})


export default router;