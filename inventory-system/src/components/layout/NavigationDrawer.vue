<template>
  <v-navigation-drawer
    v-model="layout.navDraw"
    :location="$vuetify.display.mobile ? 'bottom' : undefined"
    temporary
  >
    <v-list nav v-for="item in items">
      <v-list-item
        :prepend-icon="item.icon"
        :title="item.title"
        :to="item.route"
      ></v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script setup lang="ts">
import { ref } from "vue";
import { useLayoutStore } from "@/stores/layout.ts";

const layout = useLayoutStore();

const items = ref([
  {
    title: "Dashboard",
    route: "/dashboard",
    icon: "mdi-monitor-dashboard"
  },
  {
    title: "Form",
    route: "/form",
    icon: "mdi-form-select"
  },
]);
</script>
