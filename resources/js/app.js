require('./bootstrap');

window.Vue = require('vue').default;

import Toaster from 'v-toaster';
import 'v-toaster/dist/v-toaster.css';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.use(Toaster, {timeout: 5000});

const app = new Vue({
    el: '#app',
});
