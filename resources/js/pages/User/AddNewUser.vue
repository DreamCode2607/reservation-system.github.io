<template>
  <MenuTemplade>
    <div class="space-y-8 space-x-8">
      <div class="p-10">
        <h1 class="text-4xl font-bold text-gray-800">Formulario General</h1>

        <p class="text-gray-500 mt-2">
          Ejemplo de componentes de formulario usando Vue 3 + Tailwind.
        </p>
      </div>

      <div
        class="flex w-full bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl shadow-lg p-8"
      >
        <form class="space-y-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Nombre completo
              </label>

              <input
                type="text"
                v-model="form.name"
                placeholder="Ingresa tu nombre"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Correo electrónico
              </label>

              <input
                type="email"
                v-model="form.email"
                placeholder="correo@ejemplo.com"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2"> Edad </label>

              <input
                type="number"
                v-model="form.age"
                placeholder="25"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Fecha de nacimiento
              </label>

              <input
                type="date"
                v-model="form.birthdate"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2"> País </label>

              <select
                v-model="form.country"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              >
                <option value="">Selecciona un país</option>

                <option value="mx">México</option>

                <option value="us">Estados Unidos</option>

                <option value="co">Colombia</option>

                <option value="ar">Argentina</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Teléfono
              </label>

              <input
                type="tel"
                v-model="form.phone"
                placeholder="+52 55 1234 5678"
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-gray-700 mb-3">
                Tecnologías favoritas
              </label>

              <div class="flex flex-wrap gap-3">
                <label
                  v-for="tech in technologies"
                  :key="tech"
                  class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-yellow-50 border border-yellow-100 hover:bg-yellow-100 transition cursor-pointer"
                >
                  <input
                    type="checkbox"
                    :value="tech"
                    v-model="form.technologies"
                    class="rounded border-yellow-300 text-yellow-500 focus:ring-yellow-400"
                  />

                  <span class="text-gray-700">
                    {{ tech }}
                  </span>
                </label>
              </div>
            </div>

            <div class="md:col-span-2 relative">
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Buscar ciudad
              </label>

              <input
                type="text"
                v-model="searchCity"
                placeholder="Escribe una ciudad..."
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              />

              <div
                v-if="filteredCities.length && searchCity"
                class="absolute z-20 w-full mt-2 bg-white border border-yellow-100 rounded-2xl shadow-lg overflow-hidden"
              >
                <button
                  v-for="city in filteredCities"
                  :key="city"
                  type="button"
                  @click="selectCity(city)"
                  class="w-full text-left px-5 py-4 hover:bg-yellow-50 transition"
                >
                  {{ city }}
                </button>
              </div>
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-gray-700 mb-2">
                Descripción
              </label>

              <textarea
                v-model="form.description"
                rows="5"
                placeholder="Escribe una descripción..."
                class="w-full px-5 py-4 rounded-2xl border border-yellow-100 bg-yellow-50/50 resize-none focus:outline-none focus:ring-4 focus:ring-yellow-300 transition"
              ></textarea>
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-gray-700 mb-3">
                Género
              </label>

              <div class="flex flex-wrap gap-5">
                <label class="flex items-center gap-3">
                  <input
                    type="radio"
                    value="Masculino"
                    v-model="form.gender"
                    class="text-yellow-500 focus:ring-yellow-400"
                  />

                  <span>Masculino</span>
                </label>

                <label class="flex items-center gap-3">
                  <input
                    type="radio"
                    value="Femenino"
                    v-model="form.gender"
                    class="text-yellow-500 focus:ring-yellow-400"
                  />

                  <span>Femenino</span>
                </label>

                <label class="flex items-center gap-3">
                  <input
                    type="radio"
                    value="Otro"
                    v-model="form.gender"
                    class="text-yellow-500 focus:ring-yellow-400"
                  />

                  <span>Otro</span>
                </label>
              </div>
            </div>

            <div class="md:col-span-2">
              <label
                class="flex items-center justify-between bg-yellow-50 border border-yellow-100 rounded-2xl px-5 py-4"
              >
                <div>
                  <h3 class="font-semibold text-gray-800">Notificaciones</h3>

                  <p class="text-sm text-gray-500">Recibir correos del sistema</p>
                </div>

                <input
                  type="checkbox"
                  v-model="form.notifications"
                  class="w-5 h-5 rounded border-yellow-300 text-yellow-500 focus:ring-yellow-400"
                />
              </label>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-end">
            <button
              type="button"
              class="px-6 py-4 rounded-2xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold transition"
            >
              Cancelar
            </button>

            <button
              type="submit"
              class="px-8 py-4 rounded-2xl bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-semibold shadow-lg shadow-yellow-300/40 hover:scale-[1.02] transition"
            >
              Guardar Información
            </button>
          </div>
        </form>
      </div>

      <div
        class="bg-white/70 backdrop-blur-xl border border-yellow-100 rounded-3xl shadow-lg p-8"
      >
        <h2 class="text-2xl font-bold text-gray-800 mb-5">Datos del formulario</h2>

        <pre class="bg-yellow-50 p-5 rounded-2xl overflow-auto text-sm">
  {{ form }}
          </pre
        >
      </div>
    </div>
  </MenuTemplade>
</template>

<script setup>
import { computed, ref } from "vue";
import MenuTemplade from "@/components/MenuTemplade.vue";

const form = ref({
  name: "",
  email: "",
  age: null,
  birthdate: "",
  country: "",
  phone: "",
  technologies: [],
  city: "",
  description: "",
  gender: "",
  notifications: true,
});

const technologies = ["Vue 3", "Laravel", "Tailwind", "Inertia", "React", "Node.js"];

const cities = [
  "Ciudad de México",
  "Guadalajara",
  "Monterrey",
  "Puebla",
  "Toluca",
  "Querétaro",
  "Cancún",
];

const searchCity = ref("");

const filteredCities = computed(() => {
  return cities.filter((city) =>
    city.toLowerCase().includes(searchCity.value.toLowerCase())
  );
});

const selectCity = (city) => {
  searchCity.value = city;
  form.value.city = city;
};
</script>
