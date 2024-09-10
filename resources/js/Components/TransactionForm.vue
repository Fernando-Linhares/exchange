<script setup>
import { ref } from 'vue';

const toggleForm = ref();
toggleForm.value = true;

</script>

<template>
    <div class="border rounded-2xl border-sky-800 bg-gray-900 p-10">
        <div class="flex justify-center items-center pb-5">
            <div class="bg-gray-800 rounded-lg grid grid-cols-2">
                <button class="p-5 rounded-l-lg transition delay-150" :class="{'bg-gray-700':toggleForm}" @click="toggleForm = !toggleForm">Comprar</button>
                <button class="p-5 rounded-r-lg transition delay-150" :class="{'bg-gray-700':!toggleForm}" @click="toggleForm = !toggleForm">Vender</button>
            </div>
        </div>

        <div class="p-2 pt-20">
            <div class="bg-white flex p-2 rounded-lg ">
                <div class="w-full">
                    <div class="text-sm text-zinc-500">
                        Gastar
                    </div>
                    <input type="number" class="text-zinc-800 focus:ring-0 border-none outline-none">
                </div>
                <select class=" text-zinc-900 rounded-lg">
                    <option class="rounded-lg" value="">BRL</option>
                    <option class="rounded-lg" value="">USD</option>
                    <option class="rounded-lg" value="">EUR</option>
                </select>
            </div>
        </div>
        <div class="p-2 pt-20">
            <div class="bg-white flex p-2 rounded-lg ">
                <div class="w-full">
                    <div class="text-sm text-zinc-500">
                        Receber
                    </div>
                    <input type="number" class="text-zinc-800 focus:ring-0 border-none outline-none">
                </div>
                <select class=" text-zinc-900 rounded-lg">
                    <option class="rounded-lg" value="">BTC</option>
                    <option class="rounded-lg" value="">ETH</option>
                    <option class="rounded-lg" value="">SOL</option>
                </select>
            </div>
        </div>

        <div class="p-2 pt-40 flex justify-center">
            <button class="bg-sky-700 p-4 rounded-2xl flex items-center justify-center hover:bg-sky-600 text-lg">
                Confirmar
            </button>
        </div>
    </div>
</template>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

</style>
