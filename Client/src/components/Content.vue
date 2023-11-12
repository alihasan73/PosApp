<template>
  <div class="flex flex-col border-r-4 border-gray-400">
    <div class="flex w-[75vw] h-32 justify-between px-8 py-4 items-center">
      <div>
        <div class="flex gap-3 items-center">
          <h1 class="text-4xl font-bold">Welcome Back</h1>
          <img src="../assets/emoji.png" class="w-12 h-12" alt="" />
        </div>
        <p class="text-lg text-gray-500">
          You can manage customer orders easily
        </p>
      </div>
      <div class="flex h-16 w-6/12 justify-evenly items-top">
        <div class="relative flex h-10">
          <div class="absolute left-2 top-3 my-auto">
            <img src="../assets/search.png" alt="search-icon" class="w-8 h-8" />
          </div>
          <input
            type="text"
            placeholder="Search Item"
            class="pl-12 pr-4 h-14 py-2 w-76 bg-slate-200 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500"
          />
        </div>
        <div class="flex justify-evenly items-center gap-4">
          <img
            src="https://bit.ly/dan-abramov"
            class="rounded-full w-14 h-14"
            alt="abramov"
          />
          <div>
            <p class="font-bold text-lg">Olivia Jane</p>
            <p class="text-gray-500">Casher</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col w-[75vw] h-48 px-8 py-4 gap-3">
      <div>
        <p class="text-3xl font-bold">Order List</p>
      </div>
      <div
        class="flex gap-10 w-full overflow-hidden overflow-x-auto scrollbar-hide"
      >
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
        <div
          class="flex gap-3 min-w-[16rem] h-28 bg-[#F8FAFC] rounded-lg justify-center items-center border-[#E3E8EF]"
        >
          <div
            class="h-[56px] w-[60px] rounded-lg bg-[#FEE4E2] flex justify-center items-center"
          >
            <p class="text-[24px] font-extrabold text-[#B42318]">01</p>
          </div>
          <div class="flex flex-col gap-[1px]">
            <p class="text-[20px] font-bold">Mr bean</p>
            <p class="text-lg font-light">2 item</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col w-[75vw] h-48 px-8 py-4 gap-3">
      <div><p class="text-3xl font-bold">Categories</p></div>
      <div class="flex gap-10">
        <div
          class="h-24 w-64 flex justify-center items-center rounded-2xl p-5 bg-[#FEE4E2]"
        >
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#912018]">Best Seller Menu</p>
        </div>
        <div
          class="h-24 w-64 flex justify-center items-center rounded-2xl p-5 bg-[#B42318]"
        >
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#FEE4E2]">Pizza</p>
        </div>
        <div class="h-24 w-64 flex items-center rounded-2xl p-5 bg-[#FEE4E2]">
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#912018]">Rice & Pasta</p>
        </div>
        <div
          class="h-24 w-64 flex justify-center items-center rounded-2xl p-5 bg-[#FEE4E2]"
        >
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#912018]">Appetizer</p>
        </div>
        <div class="h-24 w-64 flex items-center rounded-2xl p-5 bg-[#FEE4E2]">
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#912018]">Drinks</p>
        </div>
        <div
          class="h-24 w-64 flex justify-center items-center rounded-2xl p-5 bg-[#FEE4E2]"
        >
          <img src="../assets/Best Seller.png" alt="" class="w-14 h-14" />
          <p class="text-xl font-medium text-[#912018]">Bread</p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap w-[75vw] h-[57vh] gap-10 px-8 py-4">
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <!-- <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div>
      <div
        class="w-[200px] h-[278px] bg-slate-400 flex flex-col items-center border rounded-lg"
      >
        <div>
          <img src="../assets/pizza.png" alt="" />
        </div>
        <div class="bg-white w-[100%] p-3 flex flex-col gap-3">
          <p class="font-semibold text-lg">Pizza</p>
          <p class="font-medium text-md text-[#697586]">
            2 Pilihan topping dalam 1 pizza
          </p>
          <p class="text-lg text-[#912018] font-semibold">Rp 82.000</p>
        </div>
      </div> -->
    </div>
  </div>
</template>

<script>
// <style scoped></style>
// import "../assets/style.css";
// import img from "";

export default {};
</script>

<style>
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}

/* For IE, Edge and Firefox */
.scrollbar-hide {
  -ms-overflow-style: none; /* IE and Edge */
  scrollbar-width: none; /* Firefox */
}
</style>
