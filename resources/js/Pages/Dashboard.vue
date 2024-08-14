<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import CandleStickChart from '@/Components/CandleStickChart.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>

        </template>

        <div class="py-4 px-4">
            <div class=" sm:px-6 lg:px-1">
                <div style="height: 500px;" class=" flex items-center justify-center shadow-lg text-white bg-gradient-to-r from-sky-950 to-indigo-950 overflow-hidden sm:rounded-lg">
                        WHITE SPACE
                </div>
            </div>
        </div>
    </AppLayout>
</template>
