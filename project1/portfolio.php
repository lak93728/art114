<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/header.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/nav.php'; ?>

<main class="main-content">

  <!-- row 1: rortfolio header and summary boxes -->
  <h1 class="dashboard-title">Portfolio</h1>

  <div class="portfolio-summary-row">
    <div class="portfolio-summary-box">
      <div class="portfolio-type">Total Portfolio Value</div>
      <div class="portfolio-amount">$125,432.50</div>
    </div>

    <div class="portfolio-summary-box">
      <div class="portfolio-type">Total Gain/Loss</div>
      <div class="portfolio-amount">+$8,050.75 <span class="green">(+6.38%)</span></div>
    </div>

    <div class="portfolio-summary-box">
      <div class="portfolio-type">Cash Balance</div>
      <div class="portfolio-amount">$2,150.00</div>
    </div>
  </div>

  <!-- row 2: assets table -->
  <div class="portfolio-assets-container">
    <div class="portfolio-assets-header">
      <span>ASSETS</span>
    </div>

    <div class="portfolio-assets-subheader">
      <span>Ticker</span>
      <span>Company</span>
      <span>Shares</span>
      <span>Avg Cost</span>
      <span>Current Price</span>
      <span>Total Value</span>
      <span>Gain/Loss</span>
    </div>

    <div class="portfolio-assets-list">
      <div class="portfolio-asset-row">
        <span>AAPL</span>
        <span>Apple Inc.</span>
        <span>50</span>
        <span>$170.00</span>
        <span>$175.23</span>
        <span>$8,761.50</span>
        <span class="green">+$261.50</span>
      </div>

      <div class="portfolio-asset-row">
        <span>MSFT</span>
        <span>Microsoft Corporation</span>
        <span>30</span>
        <span>$310.00</span>
        <span>$315.56</span>
        <span>$9,466.80</span>
        <span class="green">+$166.80</span>
      </div>

      <div class="portfolio-asset-row">
        <span>NVDA</span>
        <span>NVIDIA Corporation</span>
        <span>75</span>
        <span>$130.00</span>
        <span>$132.91</span>
        <span>$9,968.25</span>
        <span class="green">+$218.25</span>
      </div>

      <div class="portfolio-asset-row">
        <span>AMZN</span>
        <span>Amazon.com Inc.</span>
        <span>40</span>
        <span>$155.00</span>
        <span>$153.50</span>
        <span>$6,140.00</span>
        <span class="red">-$60.00</span>
      </div>

      <div class="portfolio-asset-row">
        <span>TSLA</span>
        <span>Tesla Inc.</span>
        <span>25</span>
        <span>$195.00</span>
        <span>$198.00</span>
        <span>$4,950.00</span>
        <span class="green">+$75.00</span>
      </div>

      <div class="portfolio-asset-row">
        <span>META</span>
        <span>Meta Platforms Inc.</span>
        <span>20</span>
        <span>$370.00</span>
        <span>$372.22</span>
        <span>$7,444.40</span>
        <span class="green">+$44.40</span>
      </div>

      <div class="portfolio-asset-row">
        <span>GOOGL</span>
        <span>Alphabet Inc.</span>
        <span>35</span>
        <span>$140.00</span>
        <span>$142.50</span>
        <span>$4,987.50</span>
        <span class="green">+$87.50</span>
      </div>

      <div class="portfolio-asset-row">
        <span>NFLX</span>
        <span>Netflix Inc.</span>
        <span>15</span>
        <span>$480.00</span>
        <span>$475.30</span>
        <span>$7,129.50</span>
        <span class="red">-$70.50</span>
      </div>

      <div class="portfolio-asset-row">
        <span>AMD</span>
        <span>Advanced Micro Devices</span>
        <span>60</span>
        <span>$145.00</span>
        <span>$148.75</span>
        <span>$8,925.00</span>
        <span class="green">+$225.00</span>
      </div>

      <div class="portfolio-asset-row">
        <span>DIS</span>
        <span>The Walt Disney Company</span>
        <span>45</span>
        <span>$95.00</span>
        <span>$93.20</span>
        <span>$4,194.00</span>
        <span class="red">-$81.00</span>
      </div>
    </div>
  </div>

  <!-- row 3: transaction history table -->
  <div class="portfolio-transactions-container">
    <div class="portfolio-transactions-header">
      <span>TRANSACTION HISTORY</span>
    </div>

    <div class="portfolio-transactions-subheader">
      <span>Date</span>
      <span>Action</span>
      <span>Ticker</span>
      <span>Shares</span>
      <span>Price</span>
      <span>Total</span>
    </div>

    <div class="portfolio-transactions-list">
      <div class="portfolio-transaction-row">
        <span>02/15/2026</span>
        <span>BUY</span>
        <span>AAPL</span>
        <span>10</span>
        <span>$175.23</span>
        <span>$1,752.30</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/14/2026</span>
        <span>SELL</span>
        <span>MSFT</span>
        <span>5</span>
        <span>$315.56</span>
        <span>$1,577.80</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/13/2026</span>
        <span>BUY</span>
        <span>NVDA</span>
        <span>15</span>
        <span>$132.91</span>
        <span>$1,993.65</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/12/2026</span>
        <span>BUY</span>
        <span>AMZN</span>
        <span>8</span>
        <span>$153.50</span>
        <span>$1,228.00</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/11/2026</span>
        <span>SELL</span>
        <span>TSLA</span>
        <span>12</span>
        <span>$198.00</span>
        <span>$2,376.00</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/10/2026</span>
        <span>BUY</span>
        <span>META</span>
        <span>6</span>
        <span>$372.22</span>
        <span>$2,233.32</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/09/2026</span>
        <span>BUY</span>
        <span>GOOGL</span>
        <span>10</span>
        <span>$142.50</span>
        <span>$1,425.00</span>
      </div>

      <div class="portfolio-transaction-row">
        <span>02/08/2026</span>
        <span>SELL</span>
        <span>NFLX</span>
        <span>3</span>
        <span>$475.30</span>
        <span>$1,425.90</span>
      </div>
    </div>
  </div>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/art114/project1/inc/footer.php'; ?>