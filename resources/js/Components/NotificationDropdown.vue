<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue';
import Notifications from './Notifications.vue';
import Dropdown from './Dropdown.vue';

const props = defineProps({
    align: {
        type: String,
        default: 'right',
    },
    width: {
        type: String,
        default: '48',
    },
    contentClasses: {
        type: Array,
        default: () => ['py-1', 'bg-indigo-900'],
    },
    notifications: {
        type: Array
    }
});

let open = ref(false);

const closeOnEscape = (e) => {
    if (open.value && e.key === 'Escape') {
        open.value = false;
    }
};

onMounted(() => document.addEventListener('keydown', closeOnEscape));
onUnmounted(() => document.removeEventListener('keydown', closeOnEscape));

const alignmentClasses = computed(() => {
    if (props.align === 'left') {
        return 'ltr:origin-top-left rtl:origin-top-right start-0';
    }

    if (props.align === 'right') {
        return 'ltr:origin-top-right rtl:origin-top-left end-0';
    }

    return 'origin-top';
});
</script>

<template>
    <div class="relative">
        <div @click="open = ! open">
            <Notifications :active="open" :notifications="props.notifications"/>
        </div>

        <!-- Full Screen Dropdown Overlay -->
        <div v-show="open" class="fixed inset-0 z-40" @click="open = false" />

        <transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95"
        >
            <div
                v-show="open"
                class="absolute z-50 mt-2 rounded-md shadow-lg"
                :class="['w-80', alignmentClasses]"
                style="display: none;"
                @click="open = false"
            >
                <div class="rounded-md ring-1 ring-black ring-opacity-5" :class="contentClasses">
                     <!-- Account Management -->
                     <div class="block px-4 py-2 text-xs text-sky-400">
                        Notifications
                    </div>

                    <div class="divide-y divide-sky-400">
                        <div class="px-4 py-1 text-sky-400 flex justify-between text-sm cursor-pointer hover:bg-indigo-800">
                            <i class="material-icons text-md">
                                info
                            </i>
                            <div>
                                title notifications 1
                            </div>
                        </div>
                        <div class="px-4 py-1 text-sky-400 flex justify-between text-sm cursor-pointer hover:bg-indigo-800">
                            <i class="material-icons">
                                info
                            </i>
                            <div>
                                title notifications 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>
