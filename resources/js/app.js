require('./bootstrap');

window.Vue = require('vue');

import router from "./src/router";

Vue.component('app', require('./src/App').default);

const app = new Vue({
    el: '#app',
    router,
});
