<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Carousell from '@/Components/Carousell.vue';
import Footer from '@/Components/Footer.vue';
import iconTrage from '@/assets/tading.png';
import computer from '@/assets/computer.png';
import Rankings from '@/Components/Rankings.vue';

const props = defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    quotation: {
        type: Array,
        required: true
    }
});

</script>

<template>
    <div class="w-full bg-gray-950">
        <Head title="GBY" />
        <header class="max-sm:p-3 shadow-lg flex items-center lg:grid-cols-3  bg-gradient-to-r from-sky-950 to-indigo-950 justify-between px-10 fixed top-0 left-0 right-0 z-40">
            <div class="flex lg:justify-center lg:col-start-2 items-center space-x-3">
                <svg class="size-8 text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/>
                </svg>
                <div class="text-white/50">
                    Gby Exchange
                </div>
            </div>
            <nav v-if="canLogin" class="-mx-3 flex">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </Link>

                <template v-else>
                    <Link
                        :href="route('login')"
                        class="rounded-md px-3 py-2 text-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="rounded-md px-3 py-2 text-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <main class="pt-12 max-sm:pt-0 divide-y divide-gray-800">
            <div>
                <Carousell></Carousell>
                <div class="flex justify-center divide-x divide-gray-800 px-30 max-sm:hidden">
                    <div class="text-gray-500  px-12 my-8 text-center">
                        <div class="max-sm:hidden">Bitcoin</div>
                        <svg class="m-auto size-10 max-sm:size-8  my-4"  viewBox="0.004 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M63.04 39.741c-4.274 17.143-21.638 27.575-38.783 23.301C7.12 58.768-3.313 41.404.962 24.262 5.234 7.117 22.597-3.317 39.737.957c17.144 4.274 27.576 21.64 23.302 38.784z" fill="#f7931a"></path><path d="M46.11 27.441c.636-4.258-2.606-6.547-7.039-8.074l1.438-5.768-3.512-.875-1.4 5.616c-.922-.23-1.87-.447-2.812-.662l1.41-5.653-3.509-.875-1.439 5.766c-.764-.174-1.514-.346-2.242-.527l.004-.018-4.842-1.209-.934 3.75s2.605.597 2.55.634c1.422.355 1.68 1.296 1.636 2.042l-1.638 6.571c.098.025.225.061.365.117l-.37-.092-2.297 9.205c-.174.432-.615 1.08-1.609.834.035.051-2.552-.637-2.552-.637l-1.743 4.02 4.57 1.139c.85.213 1.683.436 2.502.646l-1.453 5.835 3.507.875 1.44-5.772c.957.26 1.887.5 2.797.726L27.504 50.8l3.511.875 1.453-5.823c5.987 1.133 10.49.676 12.383-4.738 1.527-4.36-.075-6.875-3.225-8.516 2.294-.531 4.022-2.04 4.483-5.157zM38.087 38.69c-1.086 4.36-8.426 2.004-10.807 1.412l1.928-7.729c2.38.594 10.011 1.77 8.88 6.317zm1.085-11.312c-.99 3.966-7.1 1.951-9.083 1.457l1.748-7.01c1.983.494 8.367 1.416 7.335 5.553z" fill="#ffffff"></path></g></svg>
                        <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                        <div class="text-green-600 text-sm max-sm:text-lg">
                            +0.23%
                        </div>
                    </div>
                    <div class="text-gray-500  px-12 my-8 text-center">
                        <div class="max-sm:hidden">Lignting</div>
                        <img class="size-10 m-auto max-sm:size-8  my-4" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Lightning_Network.svg/2048px-Lightning_Network.svg.png">                        <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                        <div class="text-green-600 text-sm max-sm:text-lg">
                            +0.23%
                        </div>
                    </div>
                    <div class="text-gray-500  px-12 my-8 text-center">
                        <div class="max-sm:hidden">Solana</div>
                        <img src="https://cryptologos.cc/logos/solana-sol-logo.svg?v=032" class="size-10 m-auto  my-4">
                        <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                        <div class="text-green-600 text-sm max-sm:text-lg">
                            +0.23%
                        </div>
                    </div>
                    <div class="text-gray-500  px-12 my-8 text-center">
                        <div class="max-sm:hidden">Etherium</div>
                        <img class="size-10 m-auto my-4 max-sm:size-8 " src="https://cryptologos.cc/logos/ethereum-eth-logo.svg?v=032">                        <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                        <div class="text-green-600 text-sm max-sm:text-lg">
                            +0.23%
                        </div>
                    </div>
                    <div class="text-gray-500  px-12 my-8 text-center">
                        <div class="max-sm:hidden ">Avalanche</div>
                        <img class="m-auto size-10 max-sm:size-8  my-4" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                        <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                        <div class="text-green-600 text-sm max-sm:text-lg">
                            +0.23%
                        </div>
                    </div>
                </div>
            </div>
            <div
                class=" mt-10 divide-x divide-indigo-800  bg-gradient-to-r from-sky-950 to-indigo-950"
            >
            <Rankings />
            </div>
            <div class="text-white max-sm:hidden flex w-full my-60 bg-slate-900 py-20 justify-center items-center">
                <div>
                    <div class="text-center text-3xl">
                        Work With Us
                    </div>
                    <div class="text-md text-white/60 flex justify-center">
                        Stacks is a production-ready library of stackable content blocks built in React Native.
                    </div>
                    <div class="mt-20  grid grid-cols-4 space-x-4">
                        <div class="flex justify-center">
                            <img :src="iconTrage" alt="trade" class="size-20">
                        </div>

                        <div class="flex justify-center">
                            <img :src="iconTrage" alt="trade" class="size-20">
                        </div>
                        <div class="flex justify-center">
                            <img :src="iconTrage" alt="trade" class="size-20">
                        </div>
                        <div class="flex justify-center">
                            <img :src="iconTrage" alt="trade" class="size-20">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 space-x-4">
                        <div>
                            <div class="text-lg text-center">
                                Trade Topics
                            </div>
                            <div class="text-white/60 text-md">
                                Stacks is a production-rea stackable <br>
                                asdsStacks is a production-re
                            </div>
                        </div>
                        <div>
                            <div class="text-lg text-center">
                                Trade Topics
                            </div>
                            <div class="text-white/60 text-md">
                                Stacks is a production-rea stackable <br>
                                asdsStacks is a production-re
                            </div>
                        </div>

                        <div>
                            <div class="text-lg text-center">
                                Trade Topics
                            </div>
                            <div class="text-white/60 text-md">
                                Stacks is a production-rea stackable <br>
                                asdsStacks is a production-re
                            </div>
                        </div>

                        <div>
                            <div class="text-lg text-center">
                                Trade Topics
                            </div>
                            <div class="text-white/60 text-md">
                                Stacks is a production-rea stackable <br>
                                asdsStacks is a production-re
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divide-x max-sm:divide-x-0 max-sm:block divide-slate-900 my-60 py-10 px-20 max-sm:px-0 text-white grid grid-cols-2 space-x-4">
                <div>
                    <img :src="computer" alt="" class="rounded w-full">
                </div>
                <div>
                    <div class="rounded space-y-10 max-sm:mt-20">
                        <div class="text-2xl text-center">
                            Invista em Criptomoedas e Ativos Digitais na GBY Exchange
                        </div>
                        <div class="text-md max-sm:text-lg max-sm:px-10 text-white/80 flex justify-center mx-10">
                            Descubra o futuro das finanças com a GBY Exchange, a plataforma cripto que conecta você aos melhores ativos digitais do mercado. Com segurança, transparência e uma variedade de criptomoedas à sua disposição, a GBY Exchange é o seu portal para o mundo cripto. Negocie com confiança, 24/7, e junte-se aos milhares de investidores que já estão construindo o futuro financeiro na GBY.
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>
