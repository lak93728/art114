// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
  // Theme toggle
  const toggle = document.getElementById('theme-switch');
  if (toggle) {
    toggle.addEventListener('change', function() {
      document.body.classList.toggle('dark');
    });
  }

  // Initialize ECharts
  const chartDom = document.getElementById('portfolioChart');
  const myChart = echarts.init(chartDom);

  const option = {
    grid: { left: 70, right: 10, top: 15, bottom: 25, containLabel: false },

    xAxis: {
      type: 'category',
      boundaryGap: false,
      data: [
        '2025-01','2025-02','2025-03','2025-04','2025-05','2025-06',
        '2025-07','2025-08','2025-09','2025-10','2025-11','2025-12',
        '2026-01','2026-02','2026-03','2026-04'
      ],
      axisLine: { lineStyle: { color: '#E1E5EB' } },
      axisLabel: { fontFamily: 'DM Sans', fontSize: 12, margin: 12 }
    },

    yAxis: {
      type: 'value',
      scale: true,
      axisLabel: { fontFamily: 'DM Sans', fontSize: 12, formatter: value => value.toLocaleString() },
      axisLine: { show: true, lineStyle: { color: '#E1E5EB', width: 2 } },
      splitLine: { lineStyle: { color: '#E1E5EB' } }
    },

    series: [
      {
        type: 'line',
        symbol: 'none',
        smooth: false,
        data: [
          58000, 82000, 60000, 88000, 55000, 91000,
          57000, 94000, 59000, 90000, 56000, 96000,
          58000, 92000, 60000, 97000
        ],
        lineStyle: { color: '#03A6EA', width: 3 },
        clip: false
      }
    ]
  };

  myChart.setOption(option);

  // Resize chart on window resize
  window.addEventListener('resize', () => { myChart.resize(); });
});
