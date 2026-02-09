<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main class="page-content">
    <!-- dashboard content goes here -->
</main>

<?php include 'includes/footer.php'; ?>

<main class="page-content">

    <!-- 1. Alert Banner -->
    <section class="alert-banner">
        Market Alert: NVDA drops sharply — consider SELL action.
    </section>

    <!-- 2. Account Overview Strip -->
    <section class="account-overview">
        <div class="account-type">Individual Account</div>
        <div class="account-stats">
            <div>Buying Power: $4,200</div>
            <div>Settled Cash: $1,980</div>
            <div>Margin Available: $12,500</div>
        </div>
    </section>

    <!-- 3. Portfolio Summary -->
    <section class="portfolio-summary">
        <h2>Portfolio Summary</h2>
        <p>Total Value: $24,582.10</p>
        <p>Today’s Change: +582.14 (+2.40%)</p>
        <p>Cash Balance: $1,200.00</p>
        <canvas id="portfolioChart"></canvas>
    </section>

    <!-- 4. Market Overview -->
    <section class="market-overview">
        <h2>Market Overview</h2>
        <div class="market-grid">
            <div class="market-card">SPX 4,582.12 +0.24%</div>
            <div class="market-card">IXIC 14,282.44 +0.76%</div>
            <div class="market-card">DJI 35,282.44 +0.12%</div>
            <div class="market-card">RUT 1,982.44 +0.41%</div>
            <div class="market-card">CL 72.44 -0.59%</div>
            <div class="market-card">XAU 2,042.44 +0.18%</div>
            <div class="market-card">TNX 4.12% +0.03</div>
            <div class="market-card">DXY 103.42 +0.27%</div>
        </div>
    </section>

    <!-- 5. Watchlist -->
    <section class="watchlist">
        <h2>Watchlist</h2>
        <table>
            <tr><th>Ticker</th><th>Price</th><th>Change</th></tr>
            <tr><td>AAPL</td><td>182.44</td><td>+2.40%</td></tr>
            <tr><td>MSFT</td><td>312.44</td><td>+0.76%</td></tr>
            <tr><td>NVDA</td><td>482.44</td><td>+1.41%</td></tr>
            <tr><td>AMZN</td><td>142.44</td><td>-0.59%</td></tr>
        </table>
    </section>

    <!-- 6. News Section -->
    <section class="news-section">
        <h2>News & Research</h2>
        <ul>
            <li>Apple announces new product event</li>
            <li>Oil prices dip as supply increases</li>
            <li>Market volatility expected this week</li>
        </ul>
    </section>

</main>