<script setup>
import { ref } from 'vue';
import credit from '@/assets/creditcard.png';
import boleto from '@/assets/boleto.png';
import pix from '@/assets/pix.png';

const toggleForm = ref();
toggleForm.value = true;

</script>

<template>
    <div class=" ">
        <div class="flex justify-center items-center pb-5">
            <div class="bg-gray-800 rounded-lg grid grid-cols-2">
                <button class="p-5 rounded-l-lg transition delay-150" :class="{'bg-gray-700':toggleForm}" @click="toggleForm = !toggleForm">Fiat</button>
                <button class="p-5 rounded-r-lg transition delay-150" :class="{'bg-gray-700':!toggleForm}" @click="toggleForm = !toggleForm">Crypto</button>
            </div>
        </div>

        <div class="p-2 pt-20">
            <div class="bg-white flex p-2 rounded-lg ">
                <div class="w-full">
                    <div class="text-sm text-zinc-500">
                        Valor de depósito
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
            <div class="text-lg">
                Formas de pagamento
            </div>
            <div class="flex justify-center items-center mt-20">
                <img :src="credit" alt="" class="size-40 hover:bg-indigo-700 rounded-lg p-2 cursor-pointer">
                <img :src="boleto" alt="" class="size-40 hover:bg-indigo-700 rounded-lg p-2 cursor-pointer">
                <img :src="pix" alt="" class="size-40 hover:bg-indigo-700 rounded-lg p-2 cursor-pointer">
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
