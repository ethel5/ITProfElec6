<template>
  <v-app-bar
      color="primary"
      density="default"
  >
    <template v-slot:prepend>
      <v-app-bar-nav-icon @click="layoutStore.navDraw = !layoutStore.navDraw"></v-app-bar-nav-icon>
    </template>

    <v-app-bar-title>Inventory</v-app-bar-title>

    <template v-slot:append>
      <v-btn icon="mdi-dots-vertical"></v-btn>
    </template>
  </v-app-bar>
</template>

<script setup lang="ts">
import { useLayoutStore } from '@/stores/layout';

const layoutStore = useLayoutStore()

</script>