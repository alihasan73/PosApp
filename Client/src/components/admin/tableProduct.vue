<template>
  <div class="px-20 py-10">
    <div class="flex justify-between mb-10 w-[80vw]">
      <div class="flex flex-col gap-5">
        <p class="text-2xl font-medium text-[#697586]">Product</p>
        <input
          type="text"
          name="search"
          placeholder="Search Product"
          class="h-10 rounded-md px-3 border-[2px] border-slate-300 w-96"
        />
      </div>
      <div class="flex items-end gap-3">
        <button
          type="button"
          @click="openModal"
          class="rounded-md h-10 border text-slate-700 px-4 py-2 text-sm font-medium hover:bg-black/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
        >
          Download
        </button>
        <button
          type="button"
          @click="openModal"
          class="rounded-md h-10 bg-[#B42318] px-4 py-2 text-sm font-medium text-white hover:bg-black/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
        >
          Add Data
        </button>
      </div>
      <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" @close="closeModal" class="relative z-10">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0"
            enter-to="opacity-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100"
            leave-to="opacity-0"
          >
            <div class="fixed inset-0 bg-black/25" />
          </TransitionChild>

          <div class="fixed inset-0 overflow-y-auto">
            <div
              class="flex min-h-full items-center justify-center p-4 text-center"
            >
              <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0 scale-95"
                enter-to="opacity-100 scale-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100 scale-100"
                leave-to="opacity-0 scale-95"
              >
                <DialogPanel
                  class="w-full max-w-xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
                >
                  <DialogTitle
                    as="h3"
                    class="text-2xl font-medium leading-6 text-gray-900 mb-8"
                  >
                    Add Product
                  </DialogTitle>
                  <div class="mt-2 flex flex-col gap-4">
                    <div class="flex gap-4 items-start">
                      <div>
                        <label for="img-upload">
                          <img
                            :src="previewImg ? previewImg : upload"
                            class="h-44 w-36"
                            alt="img-upload"
                          />
                        </label>
                        <input
                          ref="fileInput"
                          id="img-upload"
                          type="file"
                          @change="handleFile"
                          class="hidden text-black text-clip gap-3 file:p-2 file:mr-6 file:rounded-md file:border-none"
                        />
                      </div>
                      <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-3">
                          <label for="" class="text-xl font-weight">Name</label>
                          <input
                            v-model="init.name"
                            type="text"
                            placeholder="name"
                            @input="checkValue"
                            class="h-10 w-96 pl-3 border focus:outline-none rounded-md focus:ring focus:border-blue-300"
                          />
                        </div>
                        <div class="flex flex-col gap-3">
                          <label for="" class="text-xl font-weight"
                            >Harga</label
                          >
                          <input
                            v-model="init.price"
                            type="text"
                            placeholder="Rp. 100000 "
                            @input="checkValue"
                            class="h-10 w-96 pl-3 border focus:outline-none rounded-md focus:ring focus:border-blue-300"
                          />
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-col gap-3">
                      <label for="" class="text-xl font-weight">Category</label>
                      <input
                        v-model="init.category"
                        type="text"
                        placeholder="category"
                        @input="checkValue"
                        class="h-10 w-full border pl-3 focus:outline-none rounded-md focus:ring focus:border-blue-300"
                      />
                    </div>

                    <div class="flex flex-col gap-3">
                      <label for="" class="text-xl font-weight">Status</label>
                      <select
                        name="status"
                        @input="selectedValue"
                        v-model="init.status"
                        class="h-10 bg-white w-full pl-3 pr-3 border focus:outline-none rounded-md focus:ring focus:border-blue-300"
                      >
                        <option :value="''" selected>Choose Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div>
                      <button
                        @click="submitForm"
                        class="w-32 h-12 rounded-md text-white bg-[#B42318]"
                      >
                        Kirim
                      </button>
                    </div>
                  </div>
                </DialogPanel>
              </TransitionChild>
            </div>
          </div>
        </Dialog>
      </TransitionRoot>
    </div>
    <div class="flex justify-between w-[80vw] mb-5 items-center">
      <div>
        <p class="underline underline-offset-8 decoration-red-500 decoration-2">
          All (40)
        </p>
      </div>
      <div>
        <button class="py-2 px-3 rounded-md border">Status</button>
      </div>
    </div>

    <table class="w-[80vw]">
      <thead class="h-16 rounded-md bg-[#FEE4E2] text-[#364152]">
        <tr class="text-xl text-start">
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="(i, index) in product"
          :key="i.id"
          class="h-24 border-b-[3px] text-center"
        >
          <td>{{ index + 1 }}</td>
          <td>
            <div class="flex justify-start">
              <img
                :src="imgURL(i.img_prod)"
                alt="{{i.name}}"
                class="w-16 h-16"
              />
            </div>
          </td>
          <td>{{ i.category }}</td>
          <td>{{ i.price }}</td>
          <td>
            <Switch
              v-model="enabled"
              :class="enabled ? 'bg-blue-600' : 'bg-gray-200'"
              class="relative inline-flex h-[38px] w-[74px] shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
            >
              <span class="sr-only">Use setting</span>
              <span
                aria-hidden="true"
                :class="enabled ? 'translate-x-9' : 'translate-x-0'"
                class="pointer-events-none inline-block h-[34px] w-[34px] transform rounded-full bg-white shadow-lg ring-0 transition duration-200 ease-in-out"
              />
            </Switch>
          </td>
          <td><ArrowTopRightOnSquareIcon />asd</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";
import { ref } from "vue";
import upload from "../../assets/Upload.png";
import {
  BeakerIcon,
  BoltIcon,
  Battery100Icon,
  ArrowTopRightOnSquareIcon,
} from "@heroicons/vue/24/solid";

import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogDescription,
  DialogTitle,
  Switch,
} from "@headlessui/vue";

export default {
  data() {
    return {
      init: {
        name: "",
        img_prod: "",
        category: "",
        price: null,
        status: "",
      },
      product: [],
      isOpen: false,
      enabled: false,
      previewImg: null,
      selectedFile: null,
      upload: upload,
    };
  },
  components: {
    DialogDescription,
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
    Switch,
    upload,
    BoltIcon,
    Battery100Icon,
    ArrowTopRightOnSquareIcon,
  },
  methods: {
    handleFile(e) {
      this.init.img_prod = e.target.files[0];
      this.selectedFile = e.target.files[0];
      this.previewImg = URL.createObjectURL(this.selectedFile);
    },
    checkValue() {
      console.log(this.init);
      // console.log(this.previewImg);
      // console.log(this.selectedFile);
    },
    selectedValue(e) {
      this.checkValue();
      this.init.status = e.target.value;
    },
    async submitForm() {
      const formData = new FormData();
      formData.append("name", this.init.name);
      formData.append("img_prod", this.init.img_prod);
      formData.append("category", this.init.category);
      formData.append("price", parseInt(this.init.price));
      formData.append("status", this.init.status);
      // console.log(formData);
      await axios
        .post("http://127.0.0.1:8000/api/product", formData)
        .then((res) => {
          console.log(res);
          // alert(res.data.message);
        });
      // this.getProduct();
    },
    async getProduct() {
      let res = await axios.get("http://127.0.0.1:8000/api/product");
      this.product = res.data.data;
    },
    imgURL(e) {
      return `http://127.0.0.1:8000/api/product/${e}`;
    },
    closeModal() {
      this.isOpen = false;
    },
    openModal() {
      this.isOpen = true;
    },
    selectImage() {
      this.$refs.fileInput.click();
    },
    getStatus(e) {
      return e ? e : "choose status";
    },
  },
  mounted() {
    this.getProduct();
  },
};
</script>
