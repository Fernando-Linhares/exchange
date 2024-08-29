<template>
    <div class="flex space-x-5 justify-between max-sm:block max-sm:space-x-0">
        <div>
            <div class="
                bg-sky-950 text-white mt-2 rounded-r-2xl divide-y divide-sky-800 max-sm:fixed
                max-sm:bottom-0 max-sm:flex max-sm:right-0 max-sm:left-0 max-sm:rounded-tr-2xl max-sm:rounded-tl-2xl
                max-sm:pt-2 opacity-1  max-sm:divide-y-0  max-sm:rounded-tr-0  max-sm:justify-between
                max-sm:px-7  max-sm:bg-gray-900 max-sm:z-10
            ">
                <div class="text-center p-7 max-sm:p-4 rounded-tr-2xl  max-sm:rounded-tr-0 hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900">
                    <i class="material-icons text-3xl ">
                        payment
                    </i>
                    <div class="max-sm:hidden">
                        Comprar
                    </div>
                </div>
                <div class="text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900">
                    <i class="material-icons text-3xl ">
                        trending_up
                    </i>
                    <div class="max-sm:hidden">
                        Vender
                    </div>
                </div>
                <div class="text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900">
                    <i class="material-icons text-3xl rotate-90">
                        compare_arrows
                    </i>
                    <div class="max-sm:hidden">
                        Trocar
                    </div>
                </div>
                <div class="text-center p-7 max-sm:p-4  hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900">
                    <i class="material-icons text-3xl ">
                        settings
                    </i>
                    <div class="max-sm:hidden">
                        conta
                    </div>
                </div>
                <div class="text-center p-7 max-sm:p-4 rounded-br-2xl hover:bg-sky-900 cursor-pointer max-sm:hover:bg-gray-900  max-sm:rounded-br-0">
                    <i class="material-icons text-3xl ">
                        person
                    </i>
                    <div class="max-sm:hidden">
                        Ajuda
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 max-sm:px-0 ">
         <slot></slot>
        </div>
        <div class="mt-10">
            <div class="bg-slate-900 max-sm:hidden text-white p-4 text-center rounded-l-2xl divide-y divide-slate-700">
                <i class="material-icons text-4xl m-auto">
                    wallet
                </i>
                <div class="pt-2">
                    Minha carteira
                </div>
            </div>
        </div>
    </div>
</template>
