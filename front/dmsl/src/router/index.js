import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import MyRegistration from '../views/MyRegistration.vue'
import Profile from '../views/Profile.vue'

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
    path: '/profile/:id',
    name: 'profile',
 
    component: Profile,
    
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
