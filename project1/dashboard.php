<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

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

    <!-- CHART CONTROLS AND CONTAINER NOW INSIDE PORTFOLIO SUMMARY -->
    <div class="chart-controls">
      <div class="timeframe inactive">1D</div>
      <div class="timeframe inactive">1M</div>
      <div class="timeframe selected">1Y</div>
    </div>

    <div class="chart-container">
      <div id="portfolioChart"></div>

      <!-- RECENT TRANSACTIONS TABLE -->

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
          <span>.</span>
          <span>.</span>
          <span>.</span>
          <span>.</span>
          <span>.</span>
          <span>.</span>
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

  </div> <!-- End right-side-wrapper -->


  



<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const chartDom = document.getElementById('portfolioChart');
    const myChart = echarts.init(chartDom);

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

</body>