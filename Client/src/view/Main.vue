<template>
  <div class="flex"><SideBar /> <Content /><OrderDetail /></div>
</template>

<script>
import SideBar from "../components/SideBar.vue";
import Content from "../components/Content.vue";
import OrderDetail from "../components/OrderDetail.vue";
export default {
  components: {
    SideBar,
    Content,
    OrderDetail,
  },
};
</script>
