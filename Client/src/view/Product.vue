<template>
  <!-- <h1>Halaman Product</h1> -->
  <div class="flex">
    <sideBar />
    <div class="flex flex-col w-[90vw]">
      <topBar />
      <!-- <tableProductCom /> -->
      <tableProduct />
    </div>
  </div>
</template>

<script>
import sideBar from "../components/admin/sideBar.vue";
import topBar from "../components/admin/topBar.vue";
import tableProduct from "../components/admin/tableProduct.vue";
// import tableProductCom from "../components/admin/tableProductCom.vue";

export default {
  components: {
    sideBar,
    topBar,
    // tableProductCom,
    tableProduct,
  },
};
</script>
