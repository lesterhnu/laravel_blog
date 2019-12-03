import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "../components/Home"
import Index from "../components/Index"
import Fenci from "../components/Fenci"
import Fencidetail from "../views/Fencidetail"
import About from "../views/About"
Vue.use(VueRouter);

export default new VueRouter({
    saveScrollPosition: true,
    routes: [
        {
            name: 'Home',
            path: '/',
            component: Home,
            children:[
                {
                    path:'/',
                    name:'index',
                    component:Index
                },
                {
                    path:'fenci',
                    name:'fenci',
                    component:Fenci
                },
                {
                    path:'fenci_detail',
                    name:'fenci_detail',
                    component:Fencidetail
                },
                {
                    path:'about',
                    name:'about',
                    component:About
                }
            ],
        },
    ]
});
