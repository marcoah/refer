require('./bootstrap');

import Vue from 'vue'
window.Vue = Vue;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
