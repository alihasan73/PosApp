<template>
  <div class="h-screen w-[10vw] py-10 flex flex-col gap-8 border-r-[3px]">
    <div class="flex justify-center">
      <img src="../../assets/PIZZAZZ.png" alt="logo" class="w-24 h-10" />
    </div>
    <div class="px-10 text-lg text-[#697586] font-medium">
      <p>Manage</p>
    </div>
    <div class="flex flex-col ml-6 gap-8 pl-3">
      <div
        class="flex gap-3 items-center"
        :class="item.active ? 'bg-[#B42318] w-40 h-12 rounded-xl py-1' : ''"
        v-for="item in option"
      >
        <img :src="item.image" alt="dashboard" class="w-10 h-10" />
        <p
          class="text-lg text-[#697586]"
          :class="item.active ? 'text-white' : ''"
        >
          {{ item.opsi }}
        </p>
      </div>
    </div>
    <div class="px-10 text-lg text-[#697586] font-medium">
      <p>Preference</p>
    </div>
    <div class="flex flex-col ml-6 gap-8 pl-3">
      <div class="flex gap-3 items-center" v-for="item in preference">
        <img :src="item.image" alt="dashboard" class="w-10 h-10" />
        <p class="text-lg text-[#697586]">{{ item.opsi }}</p>
      </div>
    </div>
    <div class="flex flex-col ml-6 gap-8 pl-3 mt-96">
      <div class="flex gap-3 items-center">
        <img src="../../assets/log-out.png" alt="dashboard" class="w-10 h-10" />
        <p class="text-lg text-[#697586]">Log Out</p>
      </div>
    </div>
  </div>
</template>

<script>
import dashImage from "../../assets/dashAdmin.png";
import productAdmin from "../../assets/productAdmin.png";
import categoriesAdmin from "../../assets/categoriesAdmin.png";
import inventoryAdmin from "../../assets/inventoryAdmin.png";
import reportAdmin from "../../assets/reportAdmin.png";
import serverAdmin from "../../assets/serverAdmin.png";
import settingAdmin from "../../assets/settingAdmin.png";
export default {
  data() {
    return {
      option: [
        { image: dashImage, opsi: "Dashboard" },
        { image: productAdmin, opsi: "Product", active: true },
        { image: categoriesAdmin, opsi: "Category" },
        { image: inventoryAdmin, opsi: "Inventory" },
        { image: reportAdmin, opsi: "Report" },
      ],
      preference: [
        { image: serverAdmin, opsi: "Admin Setting" },
        { image: settingAdmin, opsi: "General" },
      ],
    };
  },
};
</script>
