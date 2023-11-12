// import { useDashboardStore } from "../store/dashboardStore";
// console.log(useDashboardStore);
// const store = useDashboardStore();
function isLoggedIn() {
  let result = localStorage.getItem("token") !== null;
  //   console.log(result);
  return result;
}

// export default {
//   mounted() {
//     console.log(store.token);
//   },
// };
export default isLoggedIn;
