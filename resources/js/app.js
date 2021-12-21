
require('./bootstrap');
import store from './store'
import router from './router'
window.Vue = require('vue').default;



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('app', require('./components/app.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card', require('./components/Card.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router
});
