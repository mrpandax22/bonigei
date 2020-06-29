
import Vue from 'vue'
import { BootstrapVue, BootstrapVueIcons } from "bootstrap-vue";

require('./bootstrap');

window.Vue = require('vue');
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navadmin-component', require('./components/Navadmin.vue').default);
Vue.component('navguest-component', require('./components/Navguest.vue').default);

const app = new Vue({
    el: '#app',
});
