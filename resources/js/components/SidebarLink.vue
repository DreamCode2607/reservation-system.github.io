<template>
  <Link
    :href="route(routeName)"
    :class="[
      'w-full flex items-center gap-4 px-5 py-4 rounded-2xl transition-all',

      active
        ? 'bg-gradient-to-r from-yellow-400 to-amber-500 text-white shadow-lg shadow-yellow-300/40'
        : 'hover:bg-yellow-50 text-gray-700',
    ]"
  >
    <span class="text-xl">{{ icon }}</span>

    <span class="font-semibold"> {{ label }} </span>
  </Link>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  routeName: {
    type: String,
    required: true,
  },
  label: {
    type: String,
    default: "Title",
  },
  icon: {
    default: "🏠",
  },
  active: {},
});
</script>
