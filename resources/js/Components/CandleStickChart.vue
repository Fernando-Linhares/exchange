<script setup>
    import { reactive, defineProps, onMounted } from 'vue';
    import dayjs from 'dayjs';

    const props = defineProps({
        quotation: Array
    })

    const data = reactive({
        series : [{
            name: 'candle',
            data: props.quotation
        }]
    })

    onMounted(() => {
        let i = 0.1;
        setInterval(() => {
            i += 0.1
            data.series[0].data.push({
                x: new Date(1538778600000),
                y: [6603.5+i, 6603.99, 6597.5+(i+4), 6603.86]
            })

        }, 4000);
    })

    const chartOptions =   {
            chart: {
              height: 350,
              type: 'candlestick',
            },
            title: {
              text: 'CandleStick Chart - Category X-axis',
              align: 'left'
            },
            // annotations: {
            //   xaxis: [
            //     {
            //       x: 'Oct 06 14:00',
            //       borderColor: '#00E396',
            //       label: {
            //         borderColor: '#00E396',
            //         style: {
            //           fontSize: '12px',
            //           color: '#fff',
            //           background: '#00E396'
            //         },
            //         orientation: 'horizontal',
            //         offsetY: 7,
            //         text: 'Annotation Test'
            //       }
            //     }
            //   ]
            // },
            tooltip: {
                enabled: true,
                enabledOnSeries: undefined,
                shared: true,
                followCursor: true,
                intersect: false,
                inverseOrder: false,
                custom: undefined,
                hideEmptySeries: true,
                fillSeriesColor: true,
                theme: true,
            },
            xaxis: {
              type: 'category',
              labels: {
                formatter: function(val) {
                    return dayjs(val).format('MMM DD HH:mm')
                }
              }
            },
            yaxis: {
              tooltip: {
                enabled: true
              }
            }
        };
</script>
<template>
   <div id="chart">
        <apexchart type="candlestick" height="350" :options="chartOptions" :series="data.series"></apexchart>
    </div>
</template>
