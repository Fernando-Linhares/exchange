<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import CandleStickChart from '@/Components/CandleStickChart.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl leading-tight text-white">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="height: 500px;" class=" flex items-center justify-center shadow-lg text-white bg-gradient-to-r from-sky-950 to-indigo-950 overflow-hidden sm:rounded-lg">
                        WHITE SPACE
                </div>
            </div>
        </div>
    </AppLayout>
</template>
