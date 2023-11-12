<template>
  <h1>Halo ini adalah component dashboard</h1>
  {{ dashboard.doubleCount }}
</template>

<script>
import { useDashboardStore } from "../store/dashboardStore";

export default {
  setup() {
    const dashboard = useDashboardStore();

    return { dashboard };
  },
};
</script>
