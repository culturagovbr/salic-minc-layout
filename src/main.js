import '@babel/polyfill'
import Vue from 'vue'
import VueRouter from 'vue-router'
import './plugins/vuetify'
import App from './App.vue'

import HelloWorld from './components/HelloWorld'
import Foo from './components/Foo'
import Bar from './components/Bar'

const routes = [
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar },
  { path: '/hello', component: HelloWorld }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

Vue.use(VueRouter)

Vue.config.productionTip = false

new Vue({
  router: router,
  render: h => h(App)
}).$mount('#app')
