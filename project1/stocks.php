<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<main class="main-content">

  <div class="stock-detail-layout">
    
    <!-- LEFT COLUMN (2/3 width) -->
    <div class="stock-detail-left">
      
      <!-- Stock Header with Price and Buttons -->
      <div class="stock-detail-header">
        <div class="stock-header-info">
          <h1 class="dashboard-title">Apple Inc. (AAPL)</h1>
          <div class="stock-price-row">
            <span class="stock-current-price">$175.23</span>
            <span class="stock-price-change green">(+2.4%)</span>
            <div class="stock-action-buttons">
              <button class="stock-btn">BUY</button>
              <button class="stock-btn">SELL</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Price Chart Container -->
      <div class="stock-chart-container">
        <h2 class="stock-section-title">PRICE CHART</h2>
        <div class="stock-divider"></div>
        
        <div class="chart-controls">
          <div class="timeframe selected">1D</div>
          <div class="timeframe inactive">1M</div>
          <div class="timeframe inactive">1Y</div>
        </div>

        <div class="stock-chart-wrapper">
          <div id="stockPriceChart"></div>
        </div>
      </div>

      <!-- Key Metrics Container -->
      <div class="stock-metrics-container">
        <h2 class="stock-section-title">KEY METRICS</h2>
        <div class="stock-divider"></div>

        <div class="metrics-grid">
          <!-- Row 1 -->
          <div class="metric-item">
            <div class="metric-label">Open</div>
            <div class="metric-value">$171.50</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">High</div>
            <div class="metric-value">$176.20</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">Low</div>
            <div class="metric-value">$171.10</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">Volume</div>
            <div class="metric-value">52.3M</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">Market Cap</div>
            <div class="metric-value">$2.73T</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">P/E Ratio</div>
            <div class="metric-value">28.5</div>
          </div>

          <!-- Row 2 -->
          <div class="metric-item">
            <div class="metric-label">Dividend</div>
            <div class="metric-value">$0.96</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">52W High</div>
            <div class="metric-value">$201.51</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">52W Low</div>
            <div class="metric-value">$136.68</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">Beta</div>
            <div class="metric-value">1.24</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">EPS</div>
            <div class="metric-value">$6.15</div>
          </div>
          <div class="metric-item">
            <div class="metric-label">Yield</div>
            <div class="metric-value">0.55%</div>
          </div>
        </div>
      </div>

    </div>

    <!-- RIGHT COLUMN (1/3 width) - News -->
    <div class="stock-detail-right">
      <div class="news-container stock-news">
        <h2>NEWS</h2>
        
        <div class="news-item">
          <div class="news-title">Apple announces new AI features coming to iPhone lineup</div>
          <div class="news-time">1 hour ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">iPhone sales exceed expectations in Q4 earnings report</div>
          <div class="news-time">2 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple expands manufacturing operations in India</div>
          <div class="news-time">3 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">New MacBook Pro models feature advanced M4 chip technology</div>
          <div class="news-time">4 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple Vision Pro sees strong international demand</div>
          <div class="news-time">5 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">CEO Tim Cook discusses company's sustainability goals</div>
          <div class="news-time">6 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple Music subscriber count reaches new milestone</div>
          <div class="news-time">7 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Analysts upgrade AAPL price target following earnings</div>
          <div class="news-time">8 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple announces partnership with major automotive manufacturer</div>
          <div class="news-time">9 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">New Apple Watch health features gain FDA approval</div>
          <div class="news-time">10 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple retail stores see record holiday season traffic</div>
          <div class="news-time">11 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Company announces increased dividend for shareholders</div>
          <div class="news-time">12 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">Apple services revenue grows 15% year-over-year</div>
          <div class="news-time">13 hours ago</div>
        </div>

        <div class="news-item">
          <div class="news-title">New iPad models expected to launch in spring 2026</div>
          <div class="news-time">14 hours ago</div>
        </div>

      </div>
    </div>

  </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chartDom = document.getElementById('stockPriceChart');
    const myChart = echarts.init(chartDom);

    function updateChart() {
      // Check if dark mode is active
      const isDarkMode = document.body.classList.contains('dark');
      const textColor = isDarkMode ? '#FFFFFF' : '#2C3644';  // White in dark mode, gray in light mode
      const lineColor = isDarkMode ? '#FFFFFF' : '#E1E5EB';  // White in dark mode, light gray in light mode
      const axisLineColor = isDarkMode ? '#FFFFFF' : '#E1E5EB';  // White in dark mode, light gray in light mode

      const option = {
        grid: {
          left: 70,
          right: 40,
          top: 20,
          bottom: 30
        },

        xAxis: {
          type: 'category',
          data: ['10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM', '8:00 PM'],
          axisLine: {
            lineStyle: {
              color: axisLineColor
            }
          },
          axisLabel: {
            fontFamily: 'DM Sans',
            fontSize: 12,
            color: textColor
          }
        },

        yAxis: {
          type: 'value',
          min: 0,
          max: 250,
          interval: 50,
          axisLabel: {
            fontFamily: 'DM Sans',
            fontSize: 12,
            color: textColor,
            formatter: v => '$' + v
          },
          splitLine: {
            lineStyle: {
              color: lineColor
            }
          }
        },

        tooltip: {
          trigger: 'axis',
          formatter: params => {
            const p = params[0];
            return `${p.axisValue}<br/>Price: $${p.data}`;
          }
        },

        series: [
          {
            data: [171.50, 180.20, 165.80, 185.50, 170.23, 190.00],  // More dramatic ups and downs
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
    }

    // Initial chart render
    updateChart();

    // Listen for dark mode toggle changes
    const observer = new MutationObserver(function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.attributeName === 'class') {
          updateChart();
        }
      });
    });

    observer.observe(document.body, {
      attributes: true
    });

    // Handle window resize
    window.addEventListener('resize', () => { myChart.resize(); });
  });
</script>

</body>