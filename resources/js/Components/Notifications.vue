<script setup>
import { defineProps, reactive } from 'vue';

const props = defineProps({
    notifications: Array,
    active: Boolean,
});

const data = reactive({
    notifications: props.notifications
});
</script>

<template>
    <div class=" text-right size-9">
        <div class="flex justify-center">
            <button class="size-10 rounded text-white flex items-center justify-center h-3/4" title="Notifications">
                <i class="material-icons text-2xl" :class="{'text-orange-500': data?.notifications?.length > 0, 'text-sky-300': props.active}">
                    {{ data?.notifications?.length > 0 ? 'notifications_active' :  'notifications' }}
                </i>
            </button>
        </div>
        <div class="justify-end flex">
            <p class="flex bg-red-600 rounded-full size-4 text-white text-sm items-center justify-center" v-if="data?.notifications?.length > 0">
                {{ data?.notifications?.length }}
            </p>
        </div>
    </div>
</template>
