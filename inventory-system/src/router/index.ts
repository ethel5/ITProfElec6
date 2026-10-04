/**
 * router/index.ts
 *
 * Manual routes for ./src/pages/*.vue
 */

// Composables
import { createRouter, createWebHistory } from "vue-router";
import DefaultLayout from "@/layout/DefautLayout.vue";
import Index from "@/pages/index.vue";
import Dashboard from "@/pages/dashboard.vue";
import Form from "@/pages/form.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      component: DefaultLayout,
      children: [
        {
          path: "/dashboard",
          name: "Dashboard",
          component: Dashboard,
        },
        {
          path: "/form",
          name: "Form",
          component: Form,
        ],
        },
    },
  ],
});

export default router;
