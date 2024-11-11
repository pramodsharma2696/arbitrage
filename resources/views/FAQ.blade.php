@extends('master')
@section('contents')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-1-2@m uk-text-center" style="margin-bottom: 30px;">
                <p class="uk-text-lead uk-text-muted uk-margin-remove-bottom uk-text-center">FAQ</p>
                <h2 class="uk-margin-small-top uk-text-center">Do you have any questions?</h2>
            </div>
            <div class="uk-width-1-1@m sdo_set">
                <div class="uk-grid uk-child-width-1-1@m uk-margin-medium-top" style="margin-top: 5px !important;" data-uk-grid>
                    <div>
                        <ul class="in-faq-2" data-uk-accordion>
                            <!-- Forex FAQ Start -->
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What is Forex?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Forex, short for foreign exchange, refers to the global marketplace for buying and selling currencies. It's the largest and most liquid financial market in the world.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> How does Forex trading work?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Forex trading involves exchanging one currency for another at an agreed-upon exchange rate. Traders speculate on the price movements of currency pairs, trying to profit from the fluctuations in exchange rates.</p>
                                </div>
                            </li>
                            <!-- Add more Forex questions as necessary -->
                            <!-- Forex FAQ End -->

                            <!-- Commodities FAQ Start -->
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are Commodities?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Commodities are raw materials or primary agricultural products that can be bought and sold. Common commodities include gold, oil, natural gas, agricultural products like wheat and coffee, and metals like silver.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> How do Commodities trading work?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Commodities trading involves buying and selling contracts for future delivery of goods like oil, gold, and agricultural products. Traders can speculate on the price movements in commodity markets.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are the types of commodities to trade?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>The main categories of commodities include hard commodities like metals and energy resources (e.g., oil, gold, natural gas) and soft commodities like agricultural products (e.g., wheat, coffee, sugar).</p>
                                </div>
                            </li>
                            <!-- Commodities FAQ End -->

                            <!-- Crypto FAQ Start -->
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What is Cryptocurrency?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Cryptocurrency is a form of digital or virtual currency that uses cryptography for security. Bitcoin, Ethereum, and Litecoin are examples of well-known cryptocurrencies.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> How do Crypto trading work?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Crypto trading involves buying and selling digital currencies through exchanges like Binance or Coinbase. Traders speculate on the price movements of cryptocurrencies to generate profit.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What is a Cryptocurrency wallet?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>A cryptocurrency wallet is a software program that stores your private and public keys and interacts with various blockchain networks to enable you to send and receive digital currencies.</p>
                                </div>
                            </li>
                            <!-- Crypto FAQ End -->

                            <!-- Stocks FAQ Start -->
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are Stocks?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Stocks represent ownership in a company. When you buy a company's stock, you're buying a small piece of that company. Stockholders can earn dividends or make money by selling stocks at a higher price than they bought them for.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> How do Stock trading work?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Stock trading involves buying and selling shares of publicly traded companies through stock exchanges. Traders can buy low and sell high to generate profits or hold shares long-term for capital gains.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What is the difference between stocks and ETFs?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Stocks represent ownership in a single company, whereas ETFs (Exchange-Traded Funds) hold a collection of assets such as stocks, bonds, or commodities. ETFs are traded like stocks but provide diversification across multiple assets.</p>
                                </div>
                            </li>
                            <!-- Stocks FAQ End -->

                            <!-- Indices FAQ Start -->
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are Indices?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Indices are a measurement of a group of stocks that represent a particular sector or the overall market. Examples include the S&P 500, Dow Jones, and NASDAQ indices.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> How do Indices trading work?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Indices trading involves buying or selling contracts based on the price movements of indices. Traders speculate on the movement of the index as a whole rather than individual stocks within the index.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">
                                    <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are the major global indices?
                                    </div>
                                </a>
                                <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <p>Major global indices include the S&P 500 (USA), the FTSE 100 (UK), the DAX (Germany), and the Nikkei 225 (Japan). These indices track the performance of the largest companies in their respective countries or regions.</p>
                                </div>
                            </li>
                            <!-- Indices FAQ End -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
