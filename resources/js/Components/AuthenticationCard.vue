<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-950">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gradient-to-r from-sky-950 to-indigo-950 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
