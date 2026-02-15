document.addEventListener('DOMContentLoaded', function () {
  console.log('Script loaded');
  
  // Chart code (only runs if portfolioChart exists)
  const chartDom = document.getElementById('portfolioChart');
  if (chartDom) {
    const myChart = echarts.init(chartDom);

    const option = {
      grid: {
        left: 40,
        right: 40,
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
  }

  // Dark mode toggle
  const themeSwitch = document.getElementById('theme-switch');
  console.log('Theme switch found:', themeSwitch);
  
  // Function to swap icons
  function swapIcons(isDark) {
    const icons = document.querySelectorAll('.top-icon');
    if (icons.length === 3) {
      if (isDark) {
        icons[0].src = '/art114/project1/images/notificationdark.png';
        icons[1].src = '/art114/project1/images/userdark.png';
        icons[2].src = '/art114/project1/images/logindark.png';
      } else {
        icons[0].src = '/art114/project1/images/notificationlight.png';
        icons[1].src = '/art114/project1/images/userlight.png';
        icons[2].src = '/art114/project1/images/loginlight.png';
      }
    }
  }
  
  if (themeSwitch) {
    // Check for saved theme preference or default to 'light'
    const currentTheme = localStorage.getItem('theme') || 'light';
    console.log('Current theme:', currentTheme);
    
    // Apply the saved theme on page load
    if (currentTheme === 'dark') {
      document.body.classList.add('dark');
      themeSwitch.checked = true;
      swapIcons(true);
      console.log('Dark mode applied on load');
    }
    
    // Theme toggle event listener
    themeSwitch.addEventListener('change', function() {
      console.log('Switch clicked! Checked:', this.checked);
      if (this.checked) {
        document.body.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        swapIcons(true);
        console.log('Switched to dark mode');
      } else {
        document.body.classList.remove('dark');
        localStorage.setItem('theme', 'light');
        swapIcons(false);
        console.log('Switched to light mode');
      }
    });
  }
});