<script setup>
import UserAdminLayout from '../Components/AdminLayout.vue'
</script>

<template>
  <UserAdminLayout>
    <div class="flex md:ml-28">
      <div
      class="mx-auto my-10 flex max-w-xs flex-col items-center rounded-xl border px-4 py-4 text-center md:max-w-lg md:flex-row md:items-start md:text-left">
      <div class="mb-4 md:mr-6 md:mb-0">
        <img class="h-56 rounded-lg object-cover md:w-56"
          src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
          alt="" />
      </div>
      <div class="">
        <p class="text-xl font-medium text-gray-700">James Edward</p>
        <p class="mb-4 text-sm font-medium text-gray-500">Garçom Gerente</p>
        <div class="flex space-x-2">
          <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Mesas</p>
            <p class="text-3xl font-medium text-gray-600">13</p>
          </div>
          <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Atendimentos</p>
            <p class="text-3xl font-medium text-gray-600">7</p>
          </div>
          <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Receita</p>
            <p class="text-3xl font-medium text-gray-600">2.5k</p>
          </div>
          <div class=""></div>
        </div>
        <div class="mb-3"></div>
        <div class="flex space-x-2">
          <button class="w-full rounded-lg border-2 bg-white px-4 py-2 font-medium text-gray-500">Editar</button>
          <button
            class="w-full rounded-lg border-2 border-transparent bg-red-600 px-4 py-2 font-medium text-white">Excluir</button>
        </div>
      </div>
    </div>
    <div
      class="mx-auto my-10 max-w-xs md:max-w-lg border rounded-xl px-4 py-4 text-center md:flex md:flex-row md:items-start md:text-left">
      <div class="md:flex">
        <div class="space-y-2 p-10">
          <h2 class="text-center text-sm uppercase text-gray-600">Favorite Framework</h2>
          <div
            class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
            <input class="peer hidden" type="radio" name="framework" id="framework1" checked />
            <label class="peer-checked:border-orange-600 absolute top-0 h-full w-full cursor-pointer rounded-full border"
              for="framework1"> </label>
            <div
              class="peer-checked:border-transparent peer-checked:bg-orange-600 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-orange-600 ring-offset-2">
            </div>
            <span>Cliente Premium</span>
          </div>
          <div
            class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
            <input class="peer hidden" type="radio" name="framework" id="framework2" />
            <label class="peer-checked:border-sky-500 absolute top-0 h-full w-full cursor-pointer rounded-full border"
              for="framework2"> </label>
            <div
              class="peer-checked:border-transparent peer-checked:bg-sky-500 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-sky-500 ring-offset-2">
            </div>
            <span>Administrador</span>
          </div>
          <div
            class="relative flex w-56 items-center justify-center rounded-full bg-gray-50 px-4 py-3 font-medium text-gray-700">
            <input class="peer hidden" type="radio" name="framework" id="framework3" />
            <label class="peer-checked:border-emerald-400 absolute top-0 h-full w-full cursor-pointer rounded-full border"
              for="framework3"> </label>
            <div
              class="peer-checked:border-transparent peer-checked:bg-emerald-400 peer-checked:ring-2 absolute left-4 h-5 w-5 rounded-full border-2 border-gray-300 bg-gray-200 ring-emerald-400 ring-offset-2">
            </div>
            <span>Garçom</span>
          </div>
        </div>


      </div>
    </div>

  </div>
    


</UserAdminLayout></template>