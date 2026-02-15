<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chartDom = document.getElementById('portfolioChart');
    const myChart = echarts.init(chartDom);

    const option = {
      grid: {
        left: 40,    // REDUCED from 80
        right: 40,   // REDUCED from 80
        top: 20,
        bottom: 30
      },

      xAxis: {
        type: 'category',
        data: [
          '25-02-02', '', '', '', '', '', '', '', '26-02-02'
        ],
        axisLine: {
          lineStyle: {
            color: '#E1E5EB'
          }
        },
        axisLabel: {
          fontFamily: 'DM Sans',
          fontSize: 12
        }
      },

      yAxis: {
        type: 'value',
        min: 0,
        max: 100000,
        interval: 20000,
        splitNumber: 4,
        axisLabel: {
          fontFamily: 'DM Sans',
          fontSize: 12,
          formatter: v => '$' + v.toLocaleString()
        },
        splitLine: {
          lineStyle: {
            color: '#E1E5EB'
          }
        }
      },

      tooltip: {
        trigger: 'axis',
        formatter: params => {
          const p = params[0];
          return `${p.axisValue}<br/>Value: $${p.data.toLocaleString()}`;
        }
      },

      series: [
        {
          data: [
            65604, 72000, 78000, 85000, 88000, 92000, 95000, 90000, 85432.50
          ],
          type: 'line',
          smooth: false,
          lineStyle: {
            color: '#03A6EA',
            width: 3,
            type: 'solid'
          },
          symbol: 'none'
        }
      ]
    };

    myChart.setOption(option);
    window.addEventListener('resize', () => { myChart.resize(); });
  });
</script>