import Vue from  'vue'
import Router from 'vue-router'
Vue.use(Router)

import firstPage from  './components/pages/myFirstVuePage'
import newPage from  './components/pages/newVuePage'
import hooks from  './components/pages/basic/hooks'
import methods from  './components/pages/basic/methods'
import usecom from  './vuex/usecom'
// admin project pages 
import home from  './components/pages/home'
import tags from  './admin/pages/tags'
import category from  './admin/pages/category'
import adminusers from  './admin/pages/adminusers'
import login from  './admin/pages/login'
import role from  './admin/pages/role'
import assignRole from  './admin/pages/assignRole'


const routes=[
    //project
    {
        path:"/",
        component:home,
        name:'home'
    },
    {
        path:"/tags",
        component:tags,
        name:'tags'
    },
    {
        path:"/category",
        component:category,
        name:'category'
    },
    {
        path:"/adminusers",
        component:adminusers,
        name:'adminusers'
    },
    {
        path:"/login",
        component:login,
        name:'login'
    },
    {
        path:"/role",
        component:role,
        name:'role'
    },
    {
        path:"/assignRole",
        component:assignRole,
        name:'assignRole'
    },


    //test vuex

    {
        path:"/testvuex",
        component:usecom  
    },









    //basic test
    {
        path:"/my-new-vue-route",
        component:firstPage
    },
    {
        path:"/new-route",
        component:newPage
    },
    {
        path:"/hooks",
        component:hooks
    },
    {
        path:"/methods",
        component:methods
    }
]

export default new Router({
    mode:'history',
    routes
})