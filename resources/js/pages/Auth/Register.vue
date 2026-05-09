<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-yellow-50 via-amber-100 to-yellow-200 px-4 py-10"
  >
    <div
      class="w-full max-w-6xl grid md:grid-cols-2 bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden border border-yellow-100"
    >
      <div
        class="hidden md:flex flex-col justify-center p-12 bg-gradient-to-br from-yellow-400 via-amber-400 to-yellow-500 text-white relative"
      >
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="relative z-10">
          <h1 class="text-5xl font-extrabold leading-tight mb-6">Únete a nosotros</h1>

          <p class="text-lg text-yellow-50 leading-relaxed">
            Crea tu cuenta y comienza a disfrutar de una experiencia moderna, segura y
            elegante.
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
          <h2 class="text-3xl font-bold text-gray-800 mb-2">Crear Cuenta</h2>

          <p class="text-gray-500">Completa la información para registrarte</p>
        </div>

        <form @submit.prevent="submit" class="space-y-5">
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Nombre completo
            </label>

            <input
              v-model="form.name"
              type="text"
              placeholder="Tu nombre"
              class="w-full px-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
            />

            <p v-if="form.errors.name" class="text-red-500 text-sm mt-2">
              {{ form.errors.name }}
            </p>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Correo electrónico
            </label>

            <input
              v-model="form.email"
              type="email"
              placeholder="correo@ejemplo.com"
              class="w-full px-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
            />

            <p v-if="form.errors.email" class="text-red-500 text-sm mt-2">
              {{ form.errors.email }}
            </p>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Contraseña
            </label>

            <input
              v-model="form.password"
              type="password"
              placeholder="••••••••"
              class="w-full px-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
            />

            <p v-if="form.errors.password" class="text-red-500 text-sm mt-2">
              {{ form.errors.password }}
            </p>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Confirmar contraseña
            </label>

            <input
              v-model="form.password_confirmation"
              type="password"
              placeholder="••••••••"
              class="w-full px-4 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all duration-300"
            />
          </div>

          <div class="flex items-start gap-3">
            <input
              type="checkbox"
              v-model="form.terms"
              class="mt-1 rounded border-yellow-300 text-yellow-500 focus:ring-yellow-400"
            />

            <p class="text-sm text-gray-600">Acepto los términos y condiciones</p>
          </div>

          <button
            type="submit"
            :disabled="form.processing"
            class="w-full py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-white font-semibold shadow-lg shadow-yellow-300/40 transition-all duration-300 hover:scale-[1.01] disabled:opacity-70"
          >
            <span v-if="form.processing"> Creando cuenta... </span>

            <span v-else> Registrarme </span>
          </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-8">
          ¿Ya tienes cuenta?

          <Link
            :href="route('index')"
            class="text-yellow-600 font-semibold hover:text-yellow-700"
          >
            Iniciar sesión
          </Link>
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  terms: false,
});

const submit = () => {
  form.post(route("createUser"));
};
</script>
