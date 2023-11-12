<template>
  <div class="h-screen bg-zinc-400 flex justify-center items-center">
    <div class="min-w-[1/6] bg-white p-8 rounded-xl">
      <div class="flex justify-center">
        <img src="../assets/PIZZAZZ.png" class="w-36 h-28" />
      </div>
      <div class="flex flex-col my-5 gap-3">
        <label for="email" class="text-xl">email {{ storeLogin.token }}</label>
        <input
          type="text"
          class="h-12 rounded-md bg-slate-100 px-3 focus:outline-none focus:ring focus:ring-violet-300 text-gray-400"
          placeholder="email"
          v-model="email"
          id="email"
        />
        <p class="text-red-700" v-show="emailError">
          email yang anda masukan kurang dari 8
        </p>
      </div>
      <div class="flex flex-col my-5 gap-3">
        <label for="password" class="text-xl"
          >Password{{ storeLogin.auth }}</label
        >
        <input
          type="password"
          class="h-12 rounded-md bg-slate-100 px-3 focus:outline-none focus:ring focus:ring-violet-300 text-gray-400"
          placeholder="password"
          v-model="password"
          id="password"
        />
        <p class="text-red-700" v-show="passwordError">
          password yang anda masukan kurang dari 8
        </p>
      </div>
      <div class="flex mt-8 justify-center">
        <button
          class="bg-[#B42318] rounded-md w-96 h-12 text-white hover:bg-[#D92D20] text-lg flex items-center justify-center"
          @click="timeOut()"
          :disabled="isDisableBtn"
          :class="{ 'cursor-wait': isDisableBtn }"
        >
          <div v-show="isDisableBtn">
            <svg
              class="animate-spin h-3 w-3 mr-3 bg-white"
              viewBox="0 0 24 24"
            ></svg>
          </div>
          Login
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import pizza from "../assets/PIZZAZZ.png";
import axios from "axios";
import { useDashboardStore } from "../store/dashboardStore";
import isLoggedIn from "../router/auth";

let islogin = isLoggedIn();

export default {
  data() {
    return {
      email: "",
      password: "",
      emailError: false,
      passwordError: false,
      isDisableBtn: false,
      dataUser: [],
      auth: islogin,
    };
  },
  watch: {
    email() {
      // console.log(this.email);
      if (this.email.length == 0) {
        this.emailError = false;
      } else if (this.email.length < 8) {
        this.emailError = true;
      } else {
        this.emailError = false;
      }
    },
    password() {
      if (this.password.length == 0) {
        this.passwordError = false;
      } else if (this.password.length < 8) {
        this.passwordError = true;
      } else {
        this.passwordError = false;
      }
    },
  },
  // created() {
  //   this.login();
  // },
  methods: {
    timeOut() {
      this.isDisableBtn = true;
      setTimeout(() => {
        this.login();
        this.isDisableBtn = false;
      }, 1000);
    },
    async login() {
      try {
        let res = await axios.post("http://127.0.0.1:8000/api/login", {
          email: this.email,
          password: this.password,
        });
        if (res.status === 201) {
          this.dataUser = res.data;
          let token = this.dataUser.data;
          this.storeLogin.setToken(this.dataUser);
          localStorage.setItem("token", token);
          // this.storeLogin.setAuth();
          // this.auth = true;
          this.$router.push({ name: "Main" });
          window.location.reload();
        } else {
          // Handle unexpected status codes, if necessary
          console.error("Unexpected status code: ", res.status);
        }
      } catch (error) {
        console.log(error.response);
      }
    },
  },
  setup() {
    const storeLogin = useDashboardStore();
    return { storeLogin };
  },
  mounted() {
    this.auth = true;
  },
};
</script>
