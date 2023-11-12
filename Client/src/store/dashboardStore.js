import { defineStore } from "pinia";

export const useDashboardStore = defineStore("dash", {
  state: () => ({ count: 10, name: "Hasan", token: "", auth: false }),
  getters: {
    doubleCount: (state) => state.count * 2,
  },
  computed: {
    token() {
      console.log(this.token);
    },
  },
  actions: {
    increment() {
      this.count++;
    },
    setToken(data) {
      this.token = data.token;
      this.requireAuth = data.success;
    },
    setAuth() {
      this.auth = true;
    },
  },
});
