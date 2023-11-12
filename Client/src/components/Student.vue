<template>
  <slot>ini adalah slot default karena parent tidak memberikan data</slot>
  student ini bernama {{ name }} <button @click="showData">Show Name</button>
  <br />
  <button @click="sumData">click me</button>
</template>

<script>
export default {
  props: {
    name: String,
    number: Number,
    number2: Number,
    number3: Number,
  },
  data() {
    return {
      jumlah: 100,
    };
  },
  emits: ["response", "tambah"],
  methods: {
    showData() {
      this.$emit("response", this.name);
    },
    sumData() {
      this.total;
      this.$emit("tambah", this.jumlah);
    },
    total() {
      let total = this.number + this.number2 + this.number3;
      this.jumlah = total;
      // return total;
    },
  },
};
</script>
