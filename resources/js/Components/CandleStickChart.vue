<template>
    <div class="chart-container bg-gray-900 p-4 rounded-lg">
      <canvas ref="chartCanvas" class="w-full h-full"></canvas>
    </div>
  </template>

  <script>
    import { Chart, LineElement, PointElement, LineController, CategoryScale, LinearScale, Title, Tooltip, Legend } from 'chart.js';
    Chart.register(LineElement, PointElement, LineController, CategoryScale, LinearScale, Title, Tooltip, Legend);
  export default {
    name: 'CandleStickChart',
    mounted() {
      this.createChart();
      window.addEventListener('resize', this.onResize);
    },
    beforeDestroy() {
      window.removeEventListener('resize', this.onResize);
    },
    methods: {
      createChart() {
        const ctx = this.$refs.chartCanvas.getContext('2d');
        this.chart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
              {
                label: 'My First dataset',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                hoverBackgroundColor: 'rgba(75, 192, 192, 0.4)',
                hoverBorderColor: 'rgba(75, 192, 192, 1)',
                data: [65, 59, 80, 81, 56, 55, 40]
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false
          }
        });
      },
      onResize() {
        this.chart.resize();
      }
    },
    data() {
      return {
        chart: null
      };
    }
  };
  </script>

  <style scoped>
  .chart-container {
    width: 100%;
    height: 400px;
  }
  </style>
