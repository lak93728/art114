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

  <!-- Portfolio Summary Box -->
  <div class="portfolio-summary">
    <h2>Portfolio Summary</h2>

    <div class="portfolio-row">
      <div class="portfolio-col">
        <div class="portfolio-type">Total Value</div>
        <div class="portfolio-amount">$85,432.50</div>
      </div>

      <div class="portfolio-col">
        <div class="portfolio-type">Today’s Change</div>
        <div class="portfolio-amount">$32,000.00</div>
      </div>

      <div class="portfolio-col">
        <div class="portfolio-type">Cash Balance</div>
        <div class="portfolio-amount">$8,000.00</div>
      </div>
    </div>
  </div>


  
  

  <!-- Stock List Container (RIGHT SIDE) -->
  <div class="stock-list-container">

    <!-- Blue Header -->
    <div class="stock-header">
      <span>WATCH LIST</span>
      <span class="plus">+</span>
    </div>

    <!-- Gray Subheader -->
    <div class="stock-subheader">
      <span class="company-title">Company</span>
      <span class="price-title">Price</span>
    </div>

    <!-- Scrollable List -->
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

</div>






<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>

<div class="chart-wrapper">
<div class="chart-controls">
  <div class="timeframe inactive">1D</div>
  <div class="timeframe inactive">1M</div>
  <div class="timeframe selected">1Y</div>
</div>


<div class="chart-container">
  <div id="portfolioChart"></div>
</div>



<script>
  // Wait until the DOM is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('theme-switch');

    toggle.addEventListener('change', function() {
      document.body.classList.toggle('dark');
    });
  });
</script>

<script>
  const chartDom = document.getElementById('portfolioChart');
  const myChart = echarts.init(chartDom);

  const option = {
    grid: {
      left: 50,
      right: 20,
      top: 20,
      bottom: 30
    },

    xAxis: {
      type: 'category',
      data: ['2025-02-01', '', '', '', '2026-02-01'],
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
        fontSize: 12
      },
      splitLine: {
        lineStyle: {
          color: '#E1E5EB'
        }
      }
    },

    series: [
      {
        data: [65604, 24954, 79482, 10684, 96737],
        type: 'line',
        smooth: true,
        lineStyle: {
          color: '#03A6EA',
          width: 3,
          type: 'solid'
        },
        symbol: 'none',
    
      }
    ]
  };

  myChart.setOption(option);
</script>


</body> 




