require('./bootstrap');
import Vue from "vue"
import Router from './router/index'
import Vant from 'vant'
import App from "./App.vue"
import Element from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css';
import 'vant/lib/index.css';
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'
Vue.use(VueMaterial)
Vue.use(Element)
Vue.use(Vant)
// const RouterConfig = {
//     routes: [
//         // ExampleComponent laravel默认的示例组件
//         { path: '/', component: require('./views/Home') },
//     ]
// };
// const router = new Router(RouterConfig);
var app = new Vue({
    el:"#app",
    router:Router,
    render:h=>h(App)
})
