<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex space-x-5  max-sm:block max-sm:space-x-0">
        <div>
            <div class="
                bg-sky-950 text-white mt-2 rounded-r-2xl divide-y divide-sky-800 max-sm:fixed
                max-sm:bottom-0 max-sm:flex max-sm:right-0 max-sm:left-0 max-sm:rounded-tr-2xl max-sm:rounded-tl-2xl
                max-sm:pt-2 opacity-1  max-sm:divide-y-0  max-sm:rounded-tr-0  max-sm:justify-between
                max-sm:px-7  max-sm:bg-gray-900 max-sm:z-10
            ">
                <Link
                    :href="route('exchange')"
                    :class="{'bg-sky-900': route().current('exchange')}"
                    class="block rounded-tr-lg max-sm:rounded-tr-none text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900"
                >
                    <i class="material-icons text-3xl rotate-90">
                        compare_arrows
                    </i>
                    <div class="max-sm:hidden">
                        Trocar
                    </div>
                </Link>
                <Link
                    :href="route('wallet')"
                    :class="{'bg-sky-900': route().current('wallet')}"
                    class="block  max-sm:rounded-tr-none text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900"
                >
                    <i class="material-icons text-3xl">
                        wallet
                    </i>
                    <div class="max-sm:hidden">
                        Carteira
                    </div>
                </Link>
                <Link
                    :href="route('profile.show')"
                    :class="{'bg-sky-900': route().current('profile.show')}"
                    class="block max-sm:rounded-tr-none text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900"

                >
                    <i class="material-icons text-3xl ">
                        settings
                    </i>
                    <div class="max-sm:hidden">
                        conta
                    </div>
                </Link>
                <div class="block text-center p-7 max-sm:p-4 rounded-br-2xl hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900  max-sm:rounded-br-0">
                    <i class="material-icons text-3xl ">
                        person
                    </i>
                    <div class="max-sm:hidden">
                        Ajuda
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 max-sm:px-0  w-full pr-20">
         <slot></slot>
        </div>
    </div>
</template>
