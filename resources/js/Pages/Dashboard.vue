<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';
import { defineProps } from 'vue';

const props = defineProps({
    quotation: Array
});

const options = {
        chart: {
            height: 350,
            type: 'area',
            toolbar: {show: false},
            background: 'transparent'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: [
                "2018-09-19T00:00:00.000Z",
                "2018-09-19T01:30:00.000Z",
                "2018-09-19T02:30:00.000Z",
                "2018-09-19T03:30:00.000Z",
                "2018-09-19T04:30:00.000Z",
                "2018-09-19T05:30:00.000Z",
                "2018-09-19T06:30:00.000Z"
            ]
        },
        tooltip: {
            enabled: false
        },
        grid: {
            show: false
        },
        yaxis: {
            show: false
        },
        xaxis: {
            show: false
        }
    };

</script>

<template>
    <AppLayout title="Dashboard">
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
                <div class="flex items-center justify-center shadow-lg text-white bg-gradient-to-r from-sky-950 to-indigo-950 overflow-hidden sm:rounded-lg px-20  max-sm:px-0">
                    <div class="max-sm:w-full max-sm:pl-0 py-10 max-sm:divide-y max-sm:divide-slate-700">
                        <div class="grid grid-cols-5 max-sm:grid-cols-3 max-sm:pl-6">
                            <div class="flex items-center">
                                <svg class="size-8 max-sm:size-8"  viewBox="0.004 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M63.04 39.741c-4.274 17.143-21.638 27.575-38.783 23.301C7.12 58.768-3.313 41.404.962 24.262 5.234 7.117 22.597-3.317 39.737.957c17.144 4.274 27.576 21.64 23.302 38.784z" fill="#f7931a"></path><path d="M46.11 27.441c.636-4.258-2.606-6.547-7.039-8.074l1.438-5.768-3.512-.875-1.4 5.616c-.922-.23-1.87-.447-2.812-.662l1.41-5.653-3.509-.875-1.439 5.766c-.764-.174-1.514-.346-2.242-.527l.004-.018-4.842-1.209-.934 3.75s2.605.597 2.55.634c1.422.355 1.68 1.296 1.636 2.042l-1.638 6.571c.098.025.225.061.365.117l-.37-.092-2.297 9.205c-.174.432-.615 1.08-1.609.834.035.051-2.552-.637-2.552-.637l-1.743 4.02 4.57 1.139c.85.213 1.683.436 2.502.646l-1.453 5.835 3.507.875 1.44-5.772c.957.26 1.887.5 2.797.726L27.504 50.8l3.511.875 1.453-5.823c5.987 1.133 10.49.676 12.383-4.738 1.527-4.36-.075-6.875-3.225-8.516 2.294-.531 4.022-2.04 4.483-5.157zM38.087 38.69c-1.086 4.36-8.426 2.004-10.807 1.412l1.928-7.729c2.38.594 10.011 1.77 8.88 6.317zm1.085-11.312c-.99 3.966-7.1 1.951-9.083 1.457l1.748-7.01c1.983.494 8.367 1.416 7.335 5.553z" fill="#ffffff"></path></g></svg>
                            </div>
                            <div  class="flex items-center">
                                Bitcoin
                            </div>
                            <div  class="flex items-center">
                                <div class="text-white/80 text-sm max-sm:text-lg" >BTC/USD 46,168.95</div>
                            </div>
                            <div  class="flex items-center">
                                <div class="text-green-600 text-sm max-sm:text-lg">
                                    +0.23%
                                </div>
                            </div>
                            <div class="flex items-center">
                                <apexchart type="area" height="150" width="200"
                                :options="options"
                                :series="[{
                                        name: 'series1',
                                        data: [31, 40, 28, 51, 42, 109, 100]
                                    }]"></apexchart>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 max-sm:grid-cols-3 max-sm:pl-6 max-sm:pt-6">
                            <div class="flex items-center">
                                <img class="size-8 max-sm:size-8 " src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Lightning_Network.svg/2048px-Lightning_Network.svg.png">
                            </div>
                            <div class="flex items-center">
                                Lignting
                            </div>
                            <div class="flex items-center">
                                <div class="text-white/80 text-sm max-sm:text-lg" >LHT/USD 46,168.95</div>
                            </div>
                            <div class="flex items-center">
                                <div class="text-green-600 text-sm max-sm:text-lg">
                                    +0.23%
                                </div>
                            </div>
                            <div class="flex items-center">
                                <apexchart type="area" height="150" width="200"
                                :options="options"

                                :series="[{
                                        name: 'series1',
                                        data: [31, 40, 28, 51, 42, 109, 100]
                                    }]"></apexchart>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 max-sm:grid-cols-3 max-sm:pl-6 max-sm:pt-6">
                            <div class="flex items-center">
                                <img class="size-8 max-sm:size-8 " src="https://cryptologos.cc/logos/ethereum-eth-logo.svg?v=032">
                            </div>
                            <div class="flex items-center">
                                Ethereum
                            </div>
                            <div class="flex items-center">
                                <div class="text-white/80 text-sm max-sm:text-lg" >ETH/USD 46,168.95</div>
                            </div>
                            <div class="flex items-center">
                                <div class="text-red-600 text-sm max-sm:text-lg">
                                    -2.7%
                                </div>
                            </div>
                            <div class="flex items-center">
                                <apexchart type="area" height="150" width="200"
                                :options="options"

                                :series="[{
                                        name: 'series1',
                                        data: [31, 40, 28, 51, 42, 109, 100]
                                    }]"></apexchart>
                            </div>
                        </div>

                        <div class="grid grid-cols-5 max-sm:grid-cols-3 max-sm:pl-6 max-sm:pt-6">
                            <div class="flex items-center">
                                <img class="size-8 max-sm:size-8"  src="https://cryptologos.cc/logos/solana-sol-logo.svg?v=032">
                            </div>
                            <div class="flex items-center">
                                Solana
                            </div>
                            <div class="flex items-center">
                                <div class="text-white/80 text-sm max-sm:text-lg" >SOL/USD 46,168.95</div>
                            </div>
                            <div class="flex items-center">
                                <div class="text-red-600 text-sm max-sm:text-lg">
                                    -2.7%
                                </div>
                            </div>
                            <div class="flex items-center">
                                <apexchart type="area" height="150" width="200"
                                :options="options"

                                :series="[{
                                        name: 'series1',
                                        data: [31, 40, 28, 51, 42, 109, 100]
                                    }]"></apexchart>
                            </div>
                        </div>

                        <div class="grid grid-cols-5 max-sm:grid-cols-3 max-sm:pl-6 max-sm:pt-6">
                            <div class="flex items-center">
                                <img class="size-8 max-sm:size-8" src="https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=032">
                            </div>
                            <div class="flex items-center">
                                Avalanche
                            </div>
                            <div class="flex items-center">
                                <div class="text-white/80 text-sm max-sm:text-lg" >AVAX/USD 46,168.95</div>
                            </div>
                            <div class="flex items-center">
                                <div class="text-green-600 text-sm max-sm:text-lg">
                                    +0.23%
                                </div>
                            </div>
                            <div class="flex items-center">
                                <apexchart type="area" height="150" width="200"
                                :options="options"

                                :series="[{
                                        name: 'series1',
                                        data: [31, 40, 28, 51, 42, 109, 100]
                                    }]"></apexchart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </Container>



    </AppLayout>
</template>
