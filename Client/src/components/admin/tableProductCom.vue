<template>
  <div class="fixed inset-0 flex items-center justify-center">
    <button
      type="button"
      @click="setIsOpen(true)"
      class="rounded-md bg-black/20 px-4 py-2 text-sm font-medium text-white hover:bg-black/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
    >
      Open dialog
    </button>
  </div>
  <TransitionRoot
    :show="isOpen"
    as="template"
    enter="duration-900 ease-out"
    enter-from="opacity-0"
    enter-to="opacity-100"
    leave="duration-900 ease-in"
    leave-from="opacity-100"
    leave-to="opacity-0"
  >
    <Dialog :open="isOpen" @close="setIsOpen(false)">
      <div class="w-screen">
        <div class="fixed inset-0 bg-black/10" aria-hidden="true" />

        <DialogPanel class="w-10">
          <DialogTitle> This Is Title </DialogTitle>
          <DialogDescription>
            Are you sure you want to deactivate your account? All of your data
            will be permanently removed. This action cannot be undone.
          </DialogDescription>
        </DialogPanel>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
  DialogDescription,
} from "@headlessui/vue";

export default {
  data() {
    return {
      isOpen: true,
    };
  },
  methods: {
    setIsOpen(e) {
      this.isOpen = e;
    },
    closeModal() {
      isOpen.value = false;
    },
  },
  components: {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle,
    DialogDescription,
  },
};
</script>
