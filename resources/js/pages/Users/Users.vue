<template>
  <MenuTemplade>
    <div class="space-y-8 space-x-8">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">
        <div class="p-10">
          <h1 class="text-4xl font-bold text-gray-800">Usuarios</h1>

          <p class="text-gray-500 mt-2">
            Gestión y administración de usuarios del sistema.
          </p>
        </div>

        <Link
          :href="route('addUser')"
          class="px-6 py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-semibold shadow-lg shadow-yellow-300/40 hover:scale-[1.02] transition"
        >
          <span class="font-semibold"> + Nuevo Usuario </span>
        </Link>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
          class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
        >
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500 text-sm">Total Usuarios</p>

              <h3 class="text-4xl font-bold text-gray-800 mt-2">1,248</h3>
            </div>

            <div
              class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center text-3xl"
            >
              👥
            </div>
          </div>

          <p class="text-green-500 text-sm mt-4">+12% este mes</p>
        </div>

        <div
          class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
        >
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500 text-sm">Usuarios Activos</p>

              <h3 class="text-4xl font-bold text-gray-800 mt-2">987</h3>
            </div>

            <div
              class="w-16 h-16 rounded-2xl bg-green-100 flex items-center justify-center text-3xl"
            >
              ✅
            </div>
          </div>

          <p class="text-green-500 text-sm mt-4">Sistema estable</p>
        </div>

        <div
          class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
        >
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500 text-sm">Nuevos Registros</p>

              <h3 class="text-4xl font-bold text-gray-800 mt-2">36</h3>
            </div>

            <div
              class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center text-3xl"
            >
              ✨
            </div>
          </div>

          <p class="text-green-500 text-sm mt-4">Últimas 24 horas</p>
        </div>
      </div>

      <div
        class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl shadow-lg overflow-hidden"
      >
        <div
          class="p-6 border-b border-yellow-100 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4"
        >
          <div>
            <h2 class="text-2xl font-bold text-gray-800">Lista de Usuarios</h2>

            <p class="text-gray-500 text-sm mt-1">
              Consulta y administra los usuarios registrados.
            </p>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <input
              type="text"
              placeholder="Buscar usuario..."
              class="px-5 py-3 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300"
            />

            <select
              class="px-5 py-3 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300"
            >
              <option>Todos</option>
              <option>Activos</option>
              <option>Inactivos</option>
            </select>
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-yellow-50">
              <tr>
                <th class="text-left px-6 py-5 text-sm font-semibold text-gray-700">
                  Usuario
                </th>

                <th class="text-left px-6 py-5 text-sm font-semibold text-gray-700">
                  Correo
                </th>

                <th class="text-left px-6 py-5 text-sm font-semibold text-gray-700">
                  Rol
                </th>

                <th class="text-left px-6 py-5 text-sm font-semibold text-gray-700">
                  Estado
                </th>

                <th class="text-left px-6 py-5 text-sm font-semibold text-gray-700">
                  Registro
                </th>

                <th class="text-center px-6 py-5 text-sm font-semibold text-gray-700">
                  Acciones
                </th>
              </tr>
            </thead>

            <tbody>
              <tr class="border-t border-yellow-100 hover:bg-yellow-50/60 transition">
                <td class="px-6 py-5">
                  <div class="flex items-center gap-4">
                    <div
                      class="w-12 h-12 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold"
                    >
                      Y
                    </div>

                    <div>
                      <h3 class="font-semibold text-gray-800">Yael García</h3>

                      <p class="text-sm text-gray-500">ID: #1001</p>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-5 text-gray-600">yael@example.com</td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm font-medium"
                  >
                    Admin
                  </span>
                </td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium"
                  >
                    Activo
                  </span>
                </td>

                <td class="px-6 py-5 text-gray-500">10 Mayo 2026</td>

                <td class="px-6 py-5">
                  <div class="flex items-center justify-center gap-3">
                    <button
                      class="px-4 py-2 rounded-xl bg-blue-100 text-blue-600 hover:bg-blue-200 transition"
                    >
                      Editar
                    </button>

                    <button
                      class="px-4 py-2 rounded-xl bg-red-100 text-red-500 hover:bg-red-200 transition"
                    >
                      Eliminar
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="border-t border-yellow-100 hover:bg-yellow-50/60 transition">
                <td class="px-6 py-5">
                  <div class="flex items-center gap-4">
                    <div
                      class="w-12 h-12 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold"
                    >
                      A
                    </div>

                    <div>
                      <h3 class="font-semibold text-gray-800">Andrea López</h3>

                      <p class="text-sm text-gray-500">ID: #1002</p>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-5 text-gray-600">andrea@example.com</td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium"
                  >
                    Usuario
                  </span>
                </td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium"
                  >
                    Activo
                  </span>
                </td>

                <td class="px-6 py-5 text-gray-500">08 Mayo 2026</td>

                <td class="px-6 py-5">
                  <div class="flex items-center justify-center gap-3">
                    <button
                      class="px-4 py-2 rounded-xl bg-blue-100 text-blue-600 hover:bg-blue-200 transition"
                    >
                      Editar
                    </button>

                    <button
                      class="px-4 py-2 rounded-xl bg-red-100 text-red-500 hover:bg-red-200 transition"
                    >
                      Eliminar
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="border-t border-yellow-100 hover:bg-yellow-50/60 transition">
                <td class="px-6 py-5">
                  <div class="flex items-center gap-4">
                    <div
                      class="w-12 h-12 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 flex items-center justify-center text-white font-bold"
                    >
                      C
                    </div>

                    <div>
                      <h3 class="font-semibold text-gray-800">Carlos Méndez</h3>

                      <p class="text-sm text-gray-500">ID: #1003</p>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-5 text-gray-600">carlos@example.com</td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-purple-100 text-purple-700 text-sm font-medium"
                  >
                    Supervisor
                  </span>
                </td>

                <td class="px-6 py-5">
                  <span
                    class="px-4 py-2 rounded-full bg-red-100 text-red-500 text-sm font-medium"
                  >
                    Inactivo
                  </span>
                </td>

                <td class="px-6 py-5 text-gray-500">01 Mayo 2026</td>

                <td class="px-6 py-5">
                  <div class="flex items-center justify-center gap-3">
                    <button
                      class="px-4 py-2 rounded-xl bg-blue-100 text-blue-600 hover:bg-blue-200 transition"
                    >
                      Editar
                    </button>

                    <button
                      class="px-4 py-2 rounded-xl bg-red-100 text-red-500 hover:bg-red-200 transition"
                    >
                      Eliminar
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div
          class="p-6 border-t border-yellow-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4"
        >
          <p class="text-sm text-gray-500">Mostrando 1 a 3 de 1,248 usuarios</p>

          <div class="flex items-center gap-3">
            <button
              class="px-4 py-2 rounded-xl bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition"
            >
              Anterior
            </button>

            <button
              class="px-4 py-2 rounded-xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white"
            >
              1
            </button>

            <button
              class="px-4 py-2 rounded-xl bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition"
            >
              2
            </button>

            <button
              class="px-4 py-2 rounded-xl bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition"
            >
              3
            </button>

            <button
              class="px-4 py-2 rounded-xl bg-yellow-100 text-yellow-700 hover:bg-yellow-200 transition"
            >
              Siguiente
            </button>
          </div>
        </div>
      </div>
    </div>
  </MenuTemplade>
</template>

<script setup>
import MenuTemplade from "@/components/MenuTemplade.vue";
import { Link } from "@inertiajs/vue3";
</script>
