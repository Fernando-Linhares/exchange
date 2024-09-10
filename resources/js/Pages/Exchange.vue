<script setup>
import Rankings from '@/Components/Rankings.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';
import TransactionForm from '@/Components/TransactionForm.vue';
import { ref } from 'vue';

const activeDropdown = ref();
activeDropdown.value = true;

</script>

<template>
    <AppLayout title="Buy">
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
                        <div class="flex justify-center text-2xl py-5">
                            Trocar Crypto
                        </div>
                        <div class="flex space-x-4 max-sm:space-x-0 max-sm:w-full justify-center">
                            <TransactionForm />
                            <div class="max-sm:hidden">
                                <Rankings />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Container>
    </AppLayout>
</template>
