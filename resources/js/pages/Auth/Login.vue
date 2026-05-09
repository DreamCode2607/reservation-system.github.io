<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-yellow-50 via-amber-100 to-yellow-200 px-4"
  >
    <div
      class="w-full max-w-5xl grid md:grid-cols-2 bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden border border-yellow-100"
    >
      <div
        class="hidden md:flex flex-col justify-center p-12 bg-gradient-to-br from-yellow-400 via-amber-400 to-yellow-500 text-white relative"
      >
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="relative z-10">
          <h1 class="text-5xl font-extrabold leading-tight mb-6">Bienvenido</h1>

          <p class="text-lg text-yellow-50 leading-relaxed">
            Accede a tu plataforma con una experiencia moderna, elegante y profesional.
          </p>

          <div class="mt-10 flex items-center gap-3">
            <div class="w-12 h-1 bg-white rounded-full"></div>
            <div class="w-6 h-1 bg-yellow-200 rounded-full"></div>
            <div class="w-3 h-1 bg-yellow-100 rounded-full"></div>
          </div>
        </div>
      </div>

      <div class="p-8 md:p-14 flex flex-col justify-center">
        <div class="mb-10">
          <h2 class="text-3xl font-bold text-gray-800 mb-2">Iniciar Sesión</h2>

          <p class="text-gray-500">Ingresa tus credenciales para continuar</p>
        </div>

        <form @submit.prevent="submit">
          <div class="space-y-6">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Correo electrónico
              </label>

              <div class="relative">
                <span
                  class="absolute inset-y-0 left-0 flex items-center pl-4 text-yellow-500"
                >
                  ✉
                </span>

                <input
                  type="email"
                  v-model="form.email"
                  placeholder="correo@ejemplo.com"
                  class="w-full pl-12 pr-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
                />
              </div>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Contraseña
              </label>

              <div class="relative">
                <span
                  class="absolute inset-y-0 left-0 flex items-center pl-4 text-yellow-500"
                >
                  🔒
                </span>

                <input
                  type="password"
                  v-model="form.password"
                  placeholder="••••••••"
                  class="w-full pl-12 pr-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
                />
              </div>
            </div>

            <div class="flex items-center justify-between text-sm">
              <label class="flex items-center gap-2 text-gray-600">
                <input
                  type="checkbox"
                  class="rounded border-yellow-300 text-yellow-500 focus:ring-yellow-400"
                />
                Recordarme
              </label>

              <a
                href="#"
                class="text-yellow-600 hover:text-yellow-700 font-medium transition"
              >
                ¿Olvidaste tu contraseña?
              </a>
            </div>

            <button
              type="submit"
              class="w-full py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-white font-semibold shadow-lg shadow-yellow-300/40 transition-all duration-300 hover:scale-[1.01]"
              :disabled="form.processing"
            >
              <span v-if="form.processing"> Entrando... </span>
              <span v-else> Entrar </span>
            </button>
          </div>
        </form>

        <div class="my-8 flex items-center">
          <div class="flex-1 border-t border-yellow-100"></div>

          <span class="px-4 text-sm text-gray-400"> o continuar con </span>

          <div class="flex-1 border-t border-yellow-100"></div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <button
            class="py-3 rounded-2xl border border-yellow-100 hover:bg-yellow-50 transition font-medium text-gray-700"
          >
            Google
          </button>

          <button
            class="py-3 rounded-2xl border border-yellow-100 hover:bg-yellow-50 transition font-medium text-gray-700"
          >
            GitHub
          </button>
        </div>

        <p class="text-center text-sm text-gray-500 mt-8">
          ¿No tienes cuenta?
          <Link
            :href="route('viewCreateUser')"
            class="text-yellow-600 font-semibold hover:text-yellow-700"
          >
            Crear cuenta
          </Link>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
  email: "",
  password: "",
  remember: false,
});

const submit = () => {
  console.log("accediendo...");

  form.post(route("login"));
};
</script>
