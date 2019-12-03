require('./bootstrap');
window.Vue = require('vue');

// Vue.component('example', require('./components/Example.vue')); // 注释掉
// import Hello from './components/Hello.vue'; // 引入Hello 组件

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from "./App.vue"
import router from "./router/index"
// import utils from
Vue.use(ElementUI);
// import fontawesome from "fontawesome"
// Vue.use(fontawesome)
// import $ from "jquery"
// import bs from "bootstrap"
// Vue.use($)
// Vue.use(bootstrap)
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});