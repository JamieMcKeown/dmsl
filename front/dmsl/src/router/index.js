import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import MyRegistration from '../views/MyRegistration.vue'
import Profile from '../views/Profile.vue'
import Standings from '../views/Standings.vue'
import Schedule from '../views/Schedule.vue'
import Teams from '../views/Teams.vue'
import Scores from '../views/Scores.vue'
import CoachTool from '../views/CoachTool.vue'
import Index from '../views/Index.vue'

const routes = [
  {
    path: '/',
    name: 'login',
    component: Login
  },
  {
    path: '/standings',
    name: 'standings',
    component: Standings
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
  },
  {
    path: '/schedule',
    name: 'schedule',
    component: Schedule,
  },
  {
    path: '/teams',
    name: 'teams',
    component: Teams,
  },
  {
    path: '/scores',
    name: 'scores',
    component: Scores,
  },
  {
    path: '/coach',
    name: 'coach',
    component: CoachTool,
  },
  {
    path: '/index',
    name: 'index',
    component: Index,
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
