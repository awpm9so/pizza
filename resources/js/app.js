
require('./bootstrap');
import store from './store'
import router from './router'
window.Vue = require('vue').default;




Vue.component('app', require('./components/app.vue').default);


const app = new Vue({
    el: '#app',
    store,
    router
});
