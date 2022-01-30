import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import MyRegistration from '../views/MyRegistration.vue'
import Main from '../views/Main.vue'

const routes = [
  {
    path: '/',
    name: 'login',
    component: Login
  },
  {
    path: '/register',
    name: 'register',
    component: MyRegistration
  },
  {
    path: '/main',
    name: 'main',
 
    component: Main
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
