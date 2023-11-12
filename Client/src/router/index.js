import { createRouter, createWebHistory } from "vue-router";
import About from "../view/About.vue";
import Dashboard from "../view/Dashboard.vue";
import Login from "../view/Login.vue";
import Main from "../view/Main.vue";
import Product from "../view/Product.vue";
import isLoggedIn from "./auth";

let islogin = isLoggedIn();
const routes = [
  {
    path: "/login",
    name: "Login",
    component: Login,
    beforeEnter: (to, from, next) => {
      if (islogin) {
        next({ name: "Main" });
        return;
      } else {
        next();
      }
    },
  },
  {
    path: "/main",
    name: "Main",
    component: Main,
    meta: { requiresAuth: true },
  },
  { path: "", redirect: "/login" },
  { path: "/product", name: "product", component: Product },
];

const router = createRouter({
  history: createWebHistory(),
  routes: routes,
});

router.beforeEach((to, from, next) => {
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    if (!islogin) {
      next("/login");
      return;
    }
  }
  next();
  return;
});

export default router;
