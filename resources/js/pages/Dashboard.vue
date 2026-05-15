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
          <button
            class="w-full flex items-center gap-4 px-5 py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white shadow-lg shadow-yellow-300/40"
          >
            <span class="text-xl">🏠</span>

            <span class="font-semibold"> Dashboard </span>
          </button>

          <button
            class="w-full flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-yellow-50 text-gray-700 transition-all"
          >
            <span class="text-xl">👥</span>

            <span class="font-medium"> Usuarios </span>
          </button>

          <button
            class="w-full flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-yellow-50 text-gray-700 transition-all"
          >
            <span class="text-xl">📊</span>

            <span class="font-medium"> Estadísticas </span>
          </button>

          <button
            class="w-full flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-yellow-50 text-gray-700 transition-all"
          >
            <span class="text-xl">⚙️</span>

            <span class="font-medium"> Configuración </span>
          </button>
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

      <main class="flex-1 p-6 lg:p-10">
        <div
          class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg mb-8"
        >
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">
            <div>
              <h2 class="text-4xl font-bold text-gray-800">Bienvenido 👋</h2>

              <p class="text-gray-500 mt-2">
                Aquí tienes un resumen general de tu sistema.
              </p>
            </div>

            <div class="flex items-center gap-4">
              <button
                class="px-5 py-3 rounded-2xl bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium transition"
              >
                🔔 Notificaciones
              </button>

              <button
                class="px-5 py-3 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-semibold shadow-lg shadow-yellow-300/40 hover:scale-[1.02] transition"
              >
                + Nuevo
              </button>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
          <div
            class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
          >
            <div class="flex items-center justify-between">
              <div>
                <p class="text-gray-500 text-sm">Usuarios</p>

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
                <p class="text-gray-500 text-sm">Ventas</p>

                <h3 class="text-4xl font-bold text-gray-800 mt-2">$24K</h3>
              </div>

              <div
                class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center text-3xl"
              >
                💰
              </div>
            </div>

            <p class="text-green-500 text-sm mt-4">+8% esta semana</p>
          </div>

          <div
            class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
          >
            <div class="flex items-center justify-between">
              <div>
                <p class="text-gray-500 text-sm">Reportes</p>

                <h3 class="text-4xl font-bold text-gray-800 mt-2">312</h3>
              </div>

              <div
                class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center text-3xl"
              >
                📄
              </div>
            </div>

            <p class="text-green-500 text-sm mt-4">+4% hoy</p>
          </div>

          <div
            class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl p-6 shadow-lg"
          >
            <div class="flex items-center justify-between">
              <div>
                <p class="text-gray-500 text-sm">Actividad</p>

                <h3 class="text-4xl font-bold text-gray-800 mt-2">89%</h3>
              </div>

              <div
                class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center text-3xl"
              >
                ⚡
              </div>
            </div>

            <p class="text-green-500 text-sm mt-4">Excelente rendimiento</p>
          </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
          <div
            class="xl:col-span-2 bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl shadow-lg p-6"
          >
            <div class="flex items-center justify-between mb-6">
              <div>
                <h3 class="text-2xl font-bold text-gray-800">Actividad reciente</h3>

                <p class="text-gray-500 text-sm mt-1">Últimos movimientos registrados</p>
              </div>

              <button
                class="px-4 py-2 rounded-xl bg-yellow-100 hover:bg-yellow-200 text-yellow-700 font-medium transition"
              >
                Ver todo
              </button>
            </div>

            <div class="space-y-4">
              <div
                class="flex items-center justify-between p-4 rounded-2xl bg-yellow-50 hover:bg-yellow-100 transition"
              >
                <div>
                  <h4 class="font-semibold text-gray-800">Nuevo usuario registrado</h4>

                  <p class="text-sm text-gray-500">Hace 5 minutos</p>
                </div>

                <span
                  class="px-3 py-1 rounded-full bg-green-100 text-green-600 text-sm font-medium"
                >
                  Nuevo
                </span>
              </div>

              <div
                class="flex items-center justify-between p-4 rounded-2xl bg-yellow-50 hover:bg-yellow-100 transition"
              >
                <div>
                  <h4 class="font-semibold text-gray-800">Reporte generado</h4>

                  <p class="text-sm text-gray-500">Hace 20 minutos</p>
                </div>

                <span
                  class="px-3 py-1 rounded-full bg-blue-100 text-blue-600 text-sm font-medium"
                >
                  PDF
                </span>
              </div>

              <div
                class="flex items-center justify-between p-4 rounded-2xl bg-yellow-50 hover:bg-yellow-100 transition"
              >
                <div>
                  <h4 class="font-semibold text-gray-800">Actualización completada</h4>

                  <p class="text-sm text-gray-500">Hace 1 hora</p>
                </div>

                <span
                  class="px-3 py-1 rounded-full bg-yellow-200 text-yellow-700 text-sm font-medium"
                >
                  Sistema
                </span>
              </div>
            </div>
          </div>

          <div
            class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl shadow-lg p-6"
          >
            <div class="flex flex-col items-center text-center">
              <div
                class="w-28 h-28 rounded-full bg-gradient-to-r from-yellow-400 to-amber-500 flex items-center justify-center text-white text-4xl font-bold shadow-lg shadow-yellow-300/40"
              >
                Y
              </div>

              <h3 class="text-2xl font-bold text-gray-800 mt-5">Yael</h3>

              <p class="text-gray-500">Administrador del sistema</p>

              <div class="w-full mt-8 space-y-4">
                <div
                  class="flex items-center justify-between bg-yellow-50 rounded-2xl p-4"
                >
                  <span class="text-gray-600"> Proyectos </span>

                  <span class="font-bold text-gray-800"> 12 </span>
                </div>

                <div
                  class="flex items-center justify-between bg-yellow-50 rounded-2xl p-4"
                >
                  <span class="text-gray-600"> Tareas </span>

                  <span class="font-bold text-gray-800"> 34 </span>
                </div>

                <div
                  class="flex items-center justify-between bg-yellow-50 rounded-2xl p-4"
                >
                  <span class="text-gray-600"> Estado </span>

                  <span class="font-bold text-green-500"> Activo </span>
                </div>
              </div>

              <button
                class="w-full mt-8 py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-semibold shadow-lg shadow-yellow-300/40 hover:scale-[1.02] transition"
              >
                Editar Perfil
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { router } from "@inertiajs/vue3";

const logout = () => {
  router.post("/logout");
};
</script>
