<template>
  <div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-100 to-yellow-200">
    <div class="flex">
      <aside
        class="hidden lg:flex flex-col w-72 min-h-screen bg-white/80 backdrop-blur-xl border-r border-yellow-100 shadow-xl"
      >
        <div class="px-8 py-8 border-b border-yellow-100">
          <h1
            class="text-3xl font-extrabold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent"
          >
            DreamPanel
          </h1>

          <p class="text-sm text-gray-500 mt-2">Panel Administrativo</p>
        </div>

        <nav class="flex-1 px-5 py-8 space-y-3">
          <SidebarLink
            v-for="item in menu"
            :href="route(item.route)"
            :active="route().current(item.route)"
            :label="item.title"
            :icon="item.icon"
          />
        </nav>

        <div class="p-5 border-t border-yellow-100">
          <div class="flex items-center gap-4 bg-yellow-50 rounded-2xl p-4">
            <div
              class="w-12 h-12 rounded-full bg-gradient-to-r from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold"
            >
              Y
            </div>

            <div class="flex-1">
              <h3 class="font-semibold text-gray-800">Yael</h3>

              <p class="text-sm text-gray-500">Administrador</p>
            </div>

            <button @click="logout" class="text-red-400 hover:text-red-500 transition">
              ⎋
            </button>
          </div>
        </div>
      </aside>

      <slot />
    </div>
  </div>
</template>
<script setup>
import { router } from "@inertiajs/vue3";
import { menu } from "@/helpers/menu";
import SidebarLink from "./SidebarLink.vue";

const logout = () => {
  router.post("/logout");
};
</script>
