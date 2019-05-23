import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import AppHome from './components/AppHome';
import AppRecipe from './components/AppRecipe';
import AppRecipes from './components/AppRecipes';
import AppAddRecipe from './components/AppAddRecipe';

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: AppHome
    },
    {
      path: '/recipe/:id',
      component: AppRecipe
    },
    {
      path: '/recipes',
      component: AppRecipes
    },
    {
      path: '/add-recipe',
      component: AppAddRecipe 
    },
    {
      path: '*',
      component: AppHome
    },
  ],
});


const app = new Vue({
  el: '#app',
  data: {
    arr: null
  },
  router: router
});