require('./bootstrap');
import Vue from "vue"
import Router from './router/index'
import Vant from 'vant'
import App from "./App.vue"
import 'vant/lib/index.css';
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