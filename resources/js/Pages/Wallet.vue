<script setup>
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';
import { ref } from 'vue';

const activeDropdown = ref();
activeDropdown.value = true;

</script>

<template>
    <AppLayout title="Wallet">
        <template #header>
            <div class="flex justify-end text-md text-white space-x-5">
                <div>
                    <button class="max-sm:block hidden text-white" title="My Wallet">
                        <i class="material-icons text-3xl">
                            wallet
                        </i>
                    </button>
                </div>
                <div class="flex justify-center">
                    <span class="items-center flex bg-green-800 text-white rounded border p-1 border-green-700">
                        200,00 R$
                    </span>
                </div>
            </div>
        </template>
        <Container>
            <div>
                <div class="sm:px-6 lg:px-1">
                    <div class="shadow-lg text-white bg-gradient-to-r from-sky-950 to-indigo-950 overflow-hidden sm:rounded-lg px-20  max-sm:px-0 p-4">
                        <div class="w-full flex justify-center border-b border-sky-900 mb-5 pb-5">
                            Minha Carteira
                        </div>
                        <div v-if="false" style="height: 600px; width: 700px;" class="flex items-center justify-center">
                            <Link :href="route('dashboard')">
                                <div class="text-2xl text-white cursor-pointer p-2 rounded-full border border-slate-200 hover:bg-slate-900 hover:text-slate-400 hover:border-slate-400">
                                    Comprar agora
                                </div>
                            </Link>
                        </div>
                        <div v-else class="grid grid-cols-3">
                            <div @click="activeDropdown = !activeDropdown" class="p-5 rounded-2xl bg-indigo-600  hover:bg-indigo-700 cursor-pointer m-2">
                                <div>
                                    BTC/USD
                                </div>
                                <div class="pt-2 flex justify-between divide-x divide-indigo-500">
                                    <div class="flex items-center pr-1">
                                        <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                                    </div>
                                   <div class="text-lg pl-1">
                                    <div class="text-lg">
                                        AVAX/USD
                                    </div>
                                    <div class="text-sm">
                                        46,168.95
                                    </div>
                                   </div>

                                   <div class="absolute z-10 bg-slate-900 cursor-pointer rounded p-2 divide-y divide-slate-800"
                                    :class="{'hidden': activeDropdown}"
                                   >
                                        <!-- <Link :href="route('buy', {'coin':'bitcoin'})" class="block px-10 py-1 hover:bg-slate-800 text-center" >Comprar</Link>
                                        <Link :href="route('sell', {'coin':'bitcoin'})"  class="px-10 py-1 hover:bg-slate-800 text-center">Vender</Link> -->
                                   </div>
                                </div>
                            </div>
                            <div @click="activeDropdown = !activeDropdown" class="p-5 rounded-2xl bg-indigo-600  hover:bg-indigo-700 cursor-pointer m-2">
                                <div>
                                    BTC/USD
                                </div>
                                <div class="pt-2 flex justify-between divide-x divide-indigo-500">
                                    <div class="flex items-center pr-1">
                                        <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                                    </div>
                                   <div class="text-lg pl-1">
                                    <div class="text-lg">
                                        AVAX/USD
                                    </div>
                                    <div class="text-sm">
                                        46,168.95
                                    </div>
                                   </div>

                                   <div class="absolute z-10 bg-slate-900 cursor-pointer rounded p-2 divide-y divide-slate-800"
                                    :class="{'hidden': activeDropdown}"
                                   >
                                        <!-- <Link :href="route('buy', {'coin':'bitcoin'})" class="block px-10 py-1 hover:bg-slate-800 text-center" >Comprar</Link>
                                        <Link :href="route('sell', {'coin':'bitcoin'})"  class="px-10 py-1 hover:bg-slate-800 text-center">Vender</Link> -->
                                   </div>
                                </div>
                            </div>
                            <div @click="activeDropdown = !activeDropdown" class="p-5 rounded-2xl bg-indigo-600  hover:bg-indigo-700 cursor-pointer m-2">
                                <div>
                                    BTC/USD
                                </div>
                                <div class="pt-2 flex justify-between divide-x divide-indigo-500">
                                    <div class="flex items-center pr-1">
                                        <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                                    </div>
                                   <div class="text-lg pl-1">
                                    <div class="text-lg">
                                        AVAX/USD
                                    </div>
                                    <div class="text-sm">
                                        46,168.95
                                    </div>
                                   </div>

                                   <div class="absolute z-10 bg-slate-900 cursor-pointer rounded p-2 divide-y divide-slate-800"
                                    :class="{'hidden': activeDropdown}"
                                   >
                                        <Link :href="route('exchange', {'coin':'bitcoin'})" class="block px-10 py-1 hover:bg-slate-800 text-center" >Trocar</Link>
                                        <!-- <Link :href="route('sell', {'coin':'bitcoin'})"  class="px-10 py-1 hover:bg-slate-800 text-center">Vender</Link> -->
                                   </div>
                                </div>
                            </div>
                            <div @click="activeDropdown = !activeDropdown" class="p-5 rounded-2xl bg-indigo-600  hover:bg-indigo-700 cursor-pointer m-2">
                                <div>
                                    BTC/USD
                                </div>
                                <div class="pt-2 flex justify-between divide-x divide-indigo-500">
                                    <div class="flex items-center pr-1">
                                        <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                                    </div>
                                   <div class="text-lg pl-1">
                                    <div class="text-lg">
                                        AVAX/USD
                                    </div>
                                    <div class="text-sm">
                                        46,168.95
                                    </div>
                                   </div>

                                   <div class="absolute z-10 bg-slate-900 cursor-pointer rounded p-2 divide-y divide-slate-800"
                                    :class="{'hidden': activeDropdown}"
                                   >
                                        <!-- <Link :href="route('buy', {'coin':'bitcoin'})" class="block px-10 py-1 hover:bg-slate-800 text-center" >Comprar</Link>
                                        <Link :href="route('sell', {'coin':'bitcoin'})"  class="px-10 py-1 hover:bg-slate-800 text-center">Vender</Link> -->
                                   </div>
                                </div>
                            </div>
                            <div @click="activeDropdown = !activeDropdown" class="p-5 rounded-2xl bg-indigo-600  hover:bg-indigo-700 cursor-pointer m-2">
                                <div>
                                    BTC/USD
                                </div>
                                <div class="pt-2 flex justify-between divide-x divide-indigo-500">
                                    <div class="flex items-center pr-1">
                                        <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                                    </div>
                                   <div class="text-lg pl-1">
                                    <div class="text-lg">
                                        AVAX/USD
                                    </div>
                                    <div class="text-sm">
                                        46,168.95
                                    </div>
                                   </div>

                                   <div class="absolute z-10 bg-slate-900 cursor-pointer rounded p-2 divide-y divide-slate-800"
                                    :class="{'hidden': activeDropdown}"
                                   >
                                        <!-- <Link :href="route('buy', {'coin':'bitcoin'})" class="block px-10 py-1 hover:bg-slate-800 text-center" >Comprar</Link>
                                        <Link :href="route('sell', {'coin':'bitcoin'})"  class="px-10 py-1 hover:bg-slate-800 text-center">Vender</Link> -->
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Container>
    </AppLayout>
</template>
