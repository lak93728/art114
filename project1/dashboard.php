<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<!-- NOTIFICATION BAR -->
<div class="notification-bar" id="notificationBar">
  <div class="notification-left">
    ⤴  <!-- Zig-zag up arrow -->
  </div>
  <div class="notification-text">
    Opportunity Alert: AAPL surges — BUY interest increasing
  </div>
  <div class="notification-close" onclick="closeNotification()">
    ×
  </div>
</div>

<main class="main-content">

  <h1 class="dashboard-title">Dashboard</h1>

  <div class="account-overview">
    <h2>ACCOUNT OVERVIEW</h2>

    <div class="account-row">
      <div class="account-col">
        <div class="account-type">Individual</div>
        <div class="account-amount">$85,432.50</div>
      </div>

      <div class="account-col">
        <div class="account-type">IRA</div>
        <div class="account-amount">$32,000.00</div>
      </div>

      <div class="account-col">
        <div class="account-type">Retirement 401k</div>
        <div class="account-amount">$8,000.00</div>
      </div>
    </div>
  </div>

  <div class="portfolio-and-stocks">

  <!-- Portfolio Summary Box WITH CHART INSIDE -->
  <div class="portfolio-summary">
    <h2>PORTFOLIO SUMMARY</h2>

    <div class="portfolio-row">
      <div class="portfolio-col">
        <div class="portfolio-type">Total Value</div>
        <div class="portfolio-amount">$85,432.50</div>
</div>

      <div class="portfolio-col">
        <div class="portfolio-type">Today's Change</div>
        <div class="portfolio-amount">$32,000.00</div>
      </div>

      <div class="portfolio-col">
        <div class="portfolio-type">Cash Balance</div>
        <div class="portfolio-amount">$8,000.00</div>
      </div>
    </div>

    
      <div class="portfolio-divider"></div>

    <!-- CHART CONTROLS AND CONTAINER NOW INSIDE PORTFOLIO SUMMARY -->
    <div class="chart-controls">
      <div class="timeframe inactive">1D</div>
      <div class="timeframe inactive">1M</div>
      <div class="timeframe selected">1Y</div>
    </div>

    <div class="chart-container">
      <div id="portfolioChart"></div>
    </div>
  </div>

   <!-- RIGHT SIDE WRAPPER FOR STOCK LIST + MARKET OVERVIEW -->
  <div class="right-side-wrapper">
    
    <!-- Stock List Container -->
    <div class="stock-list-container">
      <div class="stock-header">
        <span>WATCH LIST</span>
        <span class="plus">+</span>
      </div>

      <div class="stock-subheader">
        <span class="company-title">Company</span>
        <span class="price-title">Price</span>
      </div>

      <div class="stock-list">
        <div class="column column-symbol">
          <span>AAPL</span>
          <span>MSFT</span>
          <span>NVDA</span>
          <span>AMZN</span>
          <span>TSLA</span>
          <span>META</span>
        </div>

        <div class="column column-name">
          <span>Apple Inc.</span>
          <span>Microsoft</span>
          <span>Nvidia</span>
          <span>Amazon</span>
          <span>Tesla Inc.</span>
          <span>Meta Platforms</span>
        </div>

        <div class="column column-price">
          <span>$175.23</span>
          <span>$315.56</span>
          <span>$132.91</span>
          <span>$153.50</span>
          <span>$198.00</span>
          <span>$372.22</span>
        </div>

        <div class="column column-change">
          <span class="green">+2.40%</span>
          <span class="green">+0.76%</span>
          <span class="green">+1.41%</span>
          <span class="red">-0.59%</span>
          <span class="green">+2.53%</span>
          <span class="red">-0.58%</span>
        </div>
      </div>
    </div>

    <!-- MARKET OVERVIEW - directly below stock list -->
    <div class="market-overview-container">
      <div class="market-overview-header">
        <span>MARKET OVERVIEW</span>
      </div>

      <div class="market-overview-subheader">
        <span class="index-title">Index</span>
        <span class="value-title">Value</span>
      </div>

      <div class="market-overview-list">
        <div class="column column-symbol">
          <span>S&P 500</span>
          <span>DOW</span>
          <span>NASDAQ</span>
          <span>RUSSELL</span>
          <span>VIX</span>
          <span>CRUDE</span>
        </div>

        <div class="column column-name">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="column column-price">
          <span>4,789.23</span>
          <span>38,671.69</span>
          <span>15,990.66</span>
          <span>2,098.72</span>
          <span>13.45</span>
          <span>$76.89</span>
        </div>

        <div class="column column-change">
          <span class="green">+0.80%</span>
          <span class="green">+0.35%</span>
          <span class="green">+1.12%</span>
          <span class="red">-0.24%</span>
          <span class="red">-2.15%</span>
          <span class="green">+1.45%</span>
        </div>
      </div>
    </div>

    <!-- NEWS CONTAINER -->
    <div class="news-container">
      <h2>NEWS</h2>
      
      <div class="news-item">
        <div class="news-title">Apple announces new AI features coming to iPhone lineup</div>
        <div class="news-time">1 hour ago</div>
      </div>

      <div class="news-item">
        <div class="news-title">Federal Reserve holds interest rates steady amid economic uncertainty</div>
        <div class="news-time">2 hours ago</div>
      </div>

      <div class="news-item">
        <div class="news-title">Tesla stock surges on quarterly earnings beat</div>
        <div class="news-time">3 hours ago</div>
      </div>

      <div class="news-item">
        <div class="news-title">Microsoft partners with major cloud provider for expanded services</div>
        <div class="news-time">4 hours ago</div>
      </div>

      <div class="news-item">
        <div class="news-title">NVIDIA launches next-generation GPU architecture</div>
        <div class="news-time">5 hours ago</div>
      </div>

      <div class="news-item">
        <div class="news-title">Amazon expands same-day delivery to 50 new cities</div>
        <div class="news-time">6 hours ago</div>
      </div>
    </div>

  </div> <!-- End right-side-wrapper -->


  </div> <!-- End portfolio-and-stocks -->

  <!-- RECENT TRANSACTIONS TABLE -->
  <div class="transactions-container">
    <div class="transactions-header">
      <span>RECENT TRANSACTIONS</span>
    </div>

    <div class="transactions-subheader">
      <span>Date</span>
      <span>Company</span>
      <span>Ticker</span>
      <span>Shares</span>
      <span>Price</span>
    </div>

    <div class="transactions-list">
      <div class="transaction-row">
        <span>02/15/2026</span>
        <span>Apple Inc.</span>
        <span>AAPL</span>
        <span>10</span>
        <span>$175.23</span>
      </div>

      <div class="transaction-row">
        <span>02/14/2026</span>
        <span>Microsoft Corporation</span>
        <span>MSFT</span>
        <span>5</span>
        <span>$315.56</span>
      </div>

      <div class="transaction-row">
        <span>02/13/2026</span>
        <span>NVIDIA Corporation</span>
        <span>NVDA</span>
        <span>15</span>
        <span>$132.91</span>
      </div>

      <div class="transaction-row">
        <span>02/12/2026</span>
        <span>Amazon.com Inc.</span>
        <span>AMZN</span>
        <span>8</span>
        <span>$153.50</span>
      </div>

      <div class="transaction-row">
        <span>02/11/2026</span>
        <span>Tesla Inc.</span>
        <span>TSLA</span>
        <span>12</span>
        <span>$198.00</span>
      </div>

      <div class="transaction-row">
        <span>02/10/2026</span>
        <span>Meta Platforms Inc.</span>
        <span>META</span>
        <span>6</span>
        <span>$372.22</span>
      </div>
    </div>
  </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chartDom = document.getElementById('portfolioChart');
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
          data: [
            '25-02-02', '', '', '', '', '', '', '', '26-02-02'
          ],
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
          max: 100000,
          interval: 20000,
          splitNumber: 4,
          axisLabel: {
            fontFamily: 'DM Sans',
            fontSize: 12,
            color: textColor,
            formatter: v => '$' + v.toLocaleString()
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

function closeNotification() {
  const notificationBar = document.getElementById('notificationBar');
  
  if (notificationBar) {
    notificationBar.style.display = 'none';
  }
}
</script>



</body>