<template>
  <div class="w-[22vw] flex flex-col justify-between">
    <div class="flex flex-col mx-20 gap-8">
      <div class="flex mt-8">
        <div class="flex flex-col gap-1">
          <h1 class="text-3xl font-bold">Order Detail</h1>
          <p class="text-md text-[#697586] font-normal">
            Mon, October 16 2022 10:00 PM
          </p>
          <p class="text-md text-[#697586] font-normal">#Order001</p>
        </div>
        <div>titik tiga</div>
      </div>
      <div class="flex flex-col gap-2">
        <button
          class="w-[296px] h-[52px] rounded-md text-lg border font-medium"
        >
          + Add Customer Nama
        </button>
        <button
          class="w-[296px] h-[52px] rounded-md text-lg border font-medium"
        >
          Dine In
        </button>
      </div>
      <div class="flex flex-col gap-1">
        <div class="flex gap-6">
          <p class="text-xl font-medium text-[#364152] leading-10">
            Super Supreme x2
          </p>
          <p class="text-xl font-medium text-[#364152] leading-10">
            Rp. 179.998
          </p>
        </div>
        <div class="flex gap-2">
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">Beef</p>
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            8 Slice
          </p>
        </div>
        <div class="flex gap-1">
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            + Keju Mozarella
          </p>
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            - Peppers
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-1">
        <div class="flex gap-6">
          <p class="text-xl font-medium text-[#364152] leading-10">
            Meat Monsta x1
          </p>
          <p class="text-xl font-medium text-[#364152] leading-10">
            Rp. 89.999
          </p>
        </div>
        <div class="flex gap-2">
          <!-- <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">Beef</p> -->
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            8 Slice
          </p>
        </div>
        <div class="flex gap-1">
          <!-- <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            + Keju Mozarella
          </p> -->
          <p class="bg-[#FEE4E2] rounded-md px-4 py-2 text-[#B42318]">
            - Mushroom
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <button
          class="w-[296px] h-[52px] text-xl border-t-2 border-b-2 border-gray-300 text-[#B42318]"
        >
          Clear Sale
        </button>
        <!-- <button
          class="w-[296px] h-[52px] rounded-md text-lg border font-medium"
        >
          Dine In
        </button> -->
      </div>
    </div>
    <div class="flex flex-col mb-20 gap-5">
      <div class="flex justify-evenly">
        <p class="text-2xl text-[#697586]">subtotal</p>
        <p class="text-2xl text-[#364152]">Rp. 269.997</p>
      </div>
      <div class="flex justify-evenly">
        <p class="text-2xl text-[#697586]">Tax 10%</p>
        <p class="text-2xl text-[#364152]">Rp. 26.999</p>
      </div>
      <div class="flex justify-center">
        <hr
          class="border-dashed border-t-[3px] border-[#171717] border-x-5 w-80"
        />
      </div>
      <div class="flex flex-col items-center gap-1">
        <div class="flex gap-1">
          <button
            class="w-40 border-[3px] border-[#27272a] border-solid h-14 rounded-lg"
          >
            Save Bill
          </button>
          <button
            class="w-40 border-[3px] border-[#27272a] border-solid h-14 rounded-lg"
          >
            Print Bill
          </button>
        </div>
        <div>
          <button class="w-80 bg-[#B42318] h-14 rounded-lg text-white">
            Charge
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
