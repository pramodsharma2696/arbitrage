@extends('master')
@section('contents')
<!-- slideshow content begin -->
<style>


    .uk-section {
        position: initial;
        /* This ensures that the content remains inside the section */
        /* overflow: hidden; */
       
        /* Hides any overflow if the video goes beyond container bounds */
    }

    .video-section {
    position: relative; /* Makes the section the reference point for absolute positioning */
    overflow: hidden;   /* Ensures the video does not overflow outside the section */
}

.video-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Ensures the video stays behind the content */
}

.background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video covers the container without stretching */
}


    /* Overlay content on top of the video */
    .content-overlay {
        position: relative;
        z-index: 1;
        /* Keep content above the video */
        color: #fff;
        /* White text for better contrast on the video */
    }

    .in-slideshow-gradient {
        position: relative;
        z-index: 1;
        /* Keep content above the video */
        color: #fff;
        /* White text for better contrast on the video */
    }


    /* common content css start  */
    .breathing:hover {
        animation: breathe 1.5s ease-in-out infinite;
    }

    .uk-button-primary:hover {
        background-color: #fcab14;
        color: #fff;
    }

    @keyframes breathe {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    .breathing {
        display: inline-block;
        background: linear-gradient(335deg, #e5be4e, #efdd95, #a98726);
        padding: 0px 45px 0px 45px;
        color: #000000;
        border-radius: 25px;
        text-align: center;
        font-size: 18px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .setImg {
        width: 181px;
        margin-top: -74px;
        margin-bottom: -45px;
        margin-left: -50px;
    }

    /* card css */
    .sec_add_w {
        padding: 60px 0;
    }

    @media (max-width: 640px) {
        .card-image {
            margin-top: 26px !important;
            margin-left: -74px !important;
        }

        .setSize13{
            margin-left: 14px !important;
            width: 100% !important;
            margin-top: 20px !important;
            margin-bottom: -80px;
        }
        .setSize12{
            margin-left: 9px !important;
            width: 100% !important;
            margin-bottom: 44px !important;
        }
        .apps-icon {
            width: 142px !important;
            height: 50px !important;
            margin-top: 41px;
            margin-left: 20px;
        }
    }

    .card-image {
        max-width: 230px !important;
        height: auto;
        margin-top: -64px;
        /* margin: 0 auto; */
        object-fit: contain;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }
    .setSize13{
        padding: 100px;
        margin-left: 68px;
        width: 85%;
        margin-top: -50px;
    }
    .setSize12{
        padding: 100px;
        margin-left: 139px;
        width: 85%;
    }
    .in-equity-16 .custom-card-default{
        border: none !important;
    }
    /* common content css end  */
</style>
<div class="uk-section uk-padding-remove-vertical video-section">
        <div class="video-wrapper">
            <video autoplay muted loop playsinline class="background-video">
                <source src="{{ asset('') }}video/bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
       </div>
    <div id="particles-js" class="uk-light in-slideshow uk-background-contain"
        data-src="{{ asset('') }}img/in-equity-decor-1.svg" data-uk-img data-uk-slideshow>

        <ul class="uk-slideshow-items">
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text"
                            style="background:#000000a1;box-shadow:rgb(7 18 25) 0px 7px 29px 0px;border-radius:10px; padding:20px">

                            <h1 class="uk-heading-small" data-aos="zoom-in-down">Navigate the <span
                                    class="in-highlight">Global markets</span> with a platform built <span
                                    style="color:#DCBA62">for performance.</span>
                            </h1>
                            <p class="uk-text-lead uk-visible@m">Get the most accurate market data, alerts, conversions
                                and tools - all within a platform that adapts to your trading needs.</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <!-- <img src="{{ asset('') }}img/in-lazy.gif"
                                data-src="{{ asset('') }}img/in-liquid-slide-1.svg" alt="image-slide" width="652"
                                height="746" data-uk-img> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="uk-flex uk-flex-middle ">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text"
                            style="background:#000000a1;box-shadow:rgb(7 18 25) 0px 7px 29px 0px;border-radius:10px; padding:20px">
                            <!-- <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span class="uk-label uk-label-success in-label-small">New</span>Trade the markets directly with
                                leading trading platforms.</p> -->
                            <h1 class="uk-heading-small" data-aos="zoom-in-down">Make Every Trade Count with <span
                                    style="color:#DCBA62">Arbitrage Prime .</span></h1>
                            <p class="uk-text-lead uk-visible@m">Whether you are into Forex, Commodities, Stocks,
                                Indices or Digital Assets, we’ve got you covered</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                data-uk-grid>
                                <!-- <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-symbol-mcdonalds.svg" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price down">
                                            <h6 class="uk-margin-remove">MCD<span class="uk-text-small">-1.29%</span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-arrow-circle-right fa-xs"></span>$269.47</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-symbol-amazon.svg" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price up">
                                            <h6 class="uk-margin-remove">AMZN<span class="uk-text-small">3.56%</span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-arrow-circle-right fa-xs"></span>$86.08</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-symbol-microsoft.svg" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price down">
                                            <h6 class="uk-margin-remove">MSFT<span class="uk-text-small">-1.18%</span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- TradingView Widget 2 BEGIN -->

                            </div>
                        </div>
                        <div class="in-slide-img">
                            <!-- <img src="{{ asset('') }}img/in-lazy.gif"
                                data-src="{{ asset('') }}img/in-liquid-slide-1.svg" alt="image-slide" width="652"
                                height="746" data-uk-img> -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="uk-container">
            <div class="uk-position-relative" data-uk-grid>
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
            </div>
        </div>

    </div>
</div>
<!-- slideshow content end -->
<!-- section content begin -->

<div class="uk-section uk-section-primary uk-preserve-color in-equity-1" style="background: url(../images/icons/metatrader/gold-bg.png);">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h4 data-aos="zoom-in-down" style="margin-top:35px;">Trade Over 1000+ Global Market Assets with Ease</h4>
            </div>
        </div>
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
            data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
            <!-- EUR/USD Card -->
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle" style="margin-top: -40px;">
                        <!-- Image for EUR/USD -->
                        <img src="{{ asset('') }}images/icons/home/6.png" alt="EUR/USD Icon"
                            style="width: 160px; height: 160px;">
                        <h5 style="font-size: 20px;margin-left: -25px;">EUR/USD</h5>
                    </div>
                    <p style="margin-top: -25px;">One of the most traded currency pairs in the world, EUR/USD Dollar provides liquidity and tight
                        spreads, making it an excellent choice for both new and experienced traders.</p>
                </div>
            </div>
            <!-- Gold Card -->
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle" style="margin-top: -40px;">
                        <!-- Image for Gold -->
                        <img src="{{ asset('') }}images/icons/home/9.png" alt="Gold Icon"
                        style="width: 160px; height: 160px;">
                        <h5 style="font-size: 20px;margin-left: -25px;">Gold</h5>
                    </div>
                    <p style="margin-top: -25px;">A traditional safehaven asset, XAU/USD (Gold) is a go-to for investors looking to hedge against
                        market volatility, inflation, or currency fluctuations.</p>
                </div>
            </div>
            <!-- Bitcoin Card -->
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle" style="margin-top: -40px;">
                        <!-- Image for Bitcoin -->
                        <img src="{{ asset('') }}images/icons/home/7.png" alt="Bitcoin Icon"
                        style="width: 160px; height: 160px;">
                        <h5 style="font-size: 20px;margin-left: -25px;">Bitcoin</h5>
                    </div>
                    <p style="margin-top: -25px;">The pioneer of cryptocurrencies, Bitcoin is known for its volatility and potential for high
                        returns, offering unique opportunities for digital asset traders.</p>
                </div>
            </div>
            <!-- Crude Oil Card -->
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle" style="margin-top: -40px;">
                        <!-- Image for Crude Oil -->
                        <img src="{{ asset('') }}images/icons/home/8.png" alt="Crude Oil Icon"
                        style="width: 160px; height: 160px;">
                        <h5 style="font-size: 20px;margin-left: -25px;">Crude Oil</h5>
                    </div>
                    <p style="margin-top: -25px;">Oil is essential to the global economy, and trading in crude oil provides exposure to trends in
                        energy markets, making it popular among commodity traders.</p>
                    <!-- <a href="{{ url('forex') }}"
                        class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                </div>
            </div>
            <!-- USD/JPY Card -->
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle" style="margin-top: -40px;">
                        <!-- Image for Crude Oil -->
                        <img src="{{ asset('') }}images/icons/home/10.png" alt="Crude Oil Icon" class="uk-margin-right"
                        style="width: 160px; height: 160px;">
                        <h5 style="font-size: 20px;margin-left: -25px;">USD/JPY</h5>
                    </div>
                    <p style="margin-top: -25px;">Another highly liquid
                        pair, USD/JPY reflects
                        the dynamic economic
                        relationship between
                        the U.S. & Japan,
                        offering insights &
                        opportunities in Forex
                        & interest rate markets.</p>
                    <!-- <a href="{{ url('forex') }}"
                        class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- section content end -->
<!-- section content begin -->
<div class="uk-section uk-background-contain uk-background-center" data-src="{{ asset('') }}img/in-equity-2-bg.png"
    data-uk-img>
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <h1 class="uk-margin-top" data-aos="zoom-in-down">Improve your Trading with a Range of Exclusive Trading
                    Tools</h1>
                <p class="uk-text-lead uk-margin-medium-top">Harness the power of technology to make a quicker, smarter,
                    and more precise decision on CFD currency pairs, stocks, commodities, and more.</p>
            </div>
        </div>
        <div style="display:none"
            class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match uk-margin-large-top"
            data-aos="fade-up" data-aos-offset="500" data-aos-easing="ease-in-sine" data-uk-grid>
            <!-- Card 1: Premium Economic Calendar -->
            <div>
                <div class="uk-card uk-card-secondary uk-card-default uk-card-hover uk-card-body uk-text-center">
                    <img src="{{ asset('') }}forexdata/home-row5-icon1.svg" alt="Premium Economic Calendar" width="50"
                        height="50" class="uk-margin-bottom">
                    <h3 class="uk-card-title">Premium Economic Calendar</h3>
                    <p>Start trading news like the pros with our advanced economic calendar.</p>
                    <!-- <a href="/professional-economic-calendar/" class="uk-button uk-button-text">Find out more &gt;</a> -->
                </div>
            </div>

            <!-- Card 2: Technical Views -->
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                    <img src="{{ asset('') }}forexdata/home-row5-icon2.svg" alt="Technical Views" width="50" height="50"
                        class="uk-margin-bottom">
                    <h3 class="uk-card-title">Technical Views</h3>
                    <p>Access live trading setups based on pattern recognition and expert analysis.</p>
                    <!-- <a href="/technical-views/" class="uk-button uk-button-text">Find out more &gt;</a> -->
                </div>
            </div>

            <!-- Card 3: Alpha EA -->
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                    <img src="{{ asset('') }}forexdata/in-liquid-icon-3.svg" alt="Technical Views" width="50"
                        height="50" class="uk-margin-bottom">
                    <h3 class="uk-card-title">Financial strength</h3>
                    <p>Financial strength refers to the robustness and stability of an individual, organization, or
                        institution's financial position.</p>
                    <!-- <a href="/technical-views/" class="uk-button uk-button-text">Find out more &gt;</a> -->
                </div>
            </div>

            <!-- Card 4: AI Market Buzz -->
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                    <img src="{{ asset('') }}forexdata/home-row5-icon4.svg" alt="AI Market Buzz" width="50" height="50"
                        class="uk-margin-bottom">
                    <h3 class="uk-card-title">AI Market Buzz</h3>
                    <p>Gain live market moving insights of over 35,000 tradable assets.</p>
                    <!-- <a href="/ai-market-buzz/" class="uk-button uk-button-text">Find out more &gt;</a> -->
                </div>
            </div>
        </div>

        <div class="uk-section uk-preserve-color in-equity-1">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                    data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                    <!-- card 1 -->
                    <div>
                        <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                            <div class="uk-flex">
                                <img src="{{ asset('') }}forexdata/home-row5-icon1.svg" alt="Premium Economic Calendar"
                                    width="50" height="50" class="uk-margin-bottom">
                            </div>
                            <h5 class="uk-margin-remove">Premium Economic Calendar</h5>
                            <p>Start trading news like the pros with our advanced economic calendar.</p>
                            <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                        </div>
                    </div>
                    <!-- card 2 -->
                    <div>
                        <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                            <div class="uk-flex">
                                <img src="{{ asset('') }}forexdata/home-row5-icon2.svg" alt="Technical Views" width="50"
                                    height="50" class="uk-margin-bottom">
                            </div>
                            <h5 class="uk-margin-remove">Technical Views</h5>
                            <p>Access live trading setups based on pattern recognition and expert analysis.</p>
                            <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                        </div>
                    </div>
                    <!-- card 3 -->
                    <div>
                        <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                            <div class="uk-flex">
                                <img src="{{ asset('') }}forexdata/home-row5-icon3.svg" alt="Financial strength"
                                    width="50" height="50" class="uk-margin-bottom">
                            </div>
                            <h5 class="uk-margin-remove">Financial strength</h5>
                            <p>Financial strength refers to the robustness and stability of an individual, organization,
                                or institution's financial position.</p>
                            <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                        </div>
                    </div>
                    <!-- card 4 -->
                    <div>
                        <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                            <div class="uk-flex">
                                <img src="{{ asset('') }}forexdata/home-row5-icon4.svg" alt="AI Market Buzz" width="50"
                                    height="50" class="uk-margin-bottom">
                            </div>
                            <h5 class="uk-margin-remove">AI Market Buzz</h5>
                            <p>Gain live market moving insights of over 35,000 tradable assets.</p>
                            <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-3 in-offset-top-20">
    <div class="uk-container uk-margin-large-bottom">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m">
                <h1 class="uk-margin-small-bottom" data-aos="zoom-in-down">Live Forex Feeds and <span
                        class="in-highlight">Real-time</span> Market Data</h1>
                <h3 class="uk-margin-top uk-text-warning">Stay ahead with the most up-to-date Forex trading information.
                </h3>
                <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                <ul class="uk-list in-list-check">
                    <li>Access live Forex feeds</li>
                    <li>Real-time updates on market conditions</li>
                    <li>Comprehensive data for informed trading decisions</li>
                </ul>
            </div>
            <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                <!-- <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
							<div id="tradingview-widget">
                           
                         <div class="tradingview-widget-container ml-auto mr-auto" style="width: 100%; height: 400px;">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=in#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D" title="forex cross-rates TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: calc(368px); width: 100%;"></iframe>
                            <div class="tradingview-widget-copyright scroll" id="yourdiv"><a href="https://in.tradingview.com/markets/currencies/forex-cross-rates/?utm_source=orbitglobalfx.com&amp;utm_medium=widget_new&amp;utm_campaign=forex-cross-rates" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
                            
                         </div>
                     
                            </div>
						</div> -->
                <div class="tradingview-widget-container ml-auto mr-auto" style="width: 100%; height: 400px;"
                    data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <iframe scrolling="no" allowtransparency="true" frameborder="0"
                        src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=in#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22orbitglobalfx.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22orbitglobalfx.com%2F%22%7D"
                        title="forex cross-rates TradingView widget" lang="en"
                        style="user-select: none; box-sizing: border-box; display: block; height: calc(368px); width: 100%;"></iframe>
                    <div class="tradingview-widget-copyright scroll" id="yourdiv"><a
                            href="https://in.tradingview.com/markets/currencies/forex-cross-rates/?utm_source=orbitglobalfx.com&amp;utm_medium=widget_new&amp;utm_campaign=forex-cross-rates"
                            rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by
                        TradingView</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-16">
    <div class="uk-container uk-margin-top uk-margin-large-bottom">
        <div class="uk-grid uk-flex uk-flex-center in-offset-bottom-20">
            <div class="uk-width-5-6@m uk-text-center">
                <!-- <h1 class="uk-margin-remove"><span class="in-highlight">Learn</span> to trade at Equity</h1> -->
                <h1 class="uk-margin-remove" data-aos="zoom-in-down">Your gateway to proficient forex trading</h1>
                <p class="uk-text-lead uk-text-muted uk-margin-small-top">Learn how the markets work with our free
                    education tools.</p>
                <div class="uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-large-top uk-margin-medium-bottom"
                    data-uk-grid>
                    <div>
                        <a href="{{ url('/forex-glossary') }}" target="_blank"
                            class="uk-card uk-card-default uk-card-body">
                            <i class="fas fa-video uk-margin-small-right"></i>
                            <h5>Trader’s Glossary</h5>
                            <p class="uk-text-small uk-text-muted">Trader’s Glossary section</p>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="uk-card uk-card-default uk-card-body">
                            <i class="fas fa-file-pdf uk-margin-small-right"></i>
                            <h5>E-Book products</h5>
                            <p class="uk-text-small uk-text-muted">Build your own strategies</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle" data-uk-grid="">
            <div class="uk-width-3-5@m uk-first-column">
                <div class="in-equity-video" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img class="uk-border-rounded uk-width-1-1" src="{{ asset('') }}img/in-equity-16-image.jpg"
                        data-src="{{ asset('') }}img/in-equity-16-image.jpg" alt="sample-images" width="533"
                        height="355" data-uk-img="">
                    <div class="uk-position-center" data-uk-lightbox="video-autoplay: true;">
                        <a href="https://www.youtube.com/watch?v=F3QpgXBtDeo" data-attrs="width: 920; height: 517;"
                            role="button">
                            <div class="in-play-button"></div>
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="uk-flex-top uk-modal" data-uk-modal="">
                        <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe" role="dialog"
                            aria-modal="true">
                            <button class="uk-modal-close-outside uk-icon uk-close" type="button" data-uk-close=""
                                aria-label="Close"><svg width="14" height="14" viewBox="0 0 14 14">
                                    <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13">
                                    </line>
                                    <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13">
                                    </line>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <h3>What you will learn</h3>
                <ul class="uk-list in-list-check">
                    <li>Introduction to Financial Trading</li>
                    <li>Technical Analysis</li>
                    <li>Fundamental Analysis</li>
                    <li>When to Enter &amp; Exit Trades</li>
                    <li>How to Manage Risk</li>
                    <li>Trading Psychology</li>
                </ul>
                <a class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top" href="https://client.arbitrageprime.com/register">Open demo
                    account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="uk-section in-equity-16">
    <div class="uk-container uk-margin-top uk-margin-large-bottom">
        <!-- Title Section -->
        <div class="uk-grid uk-flex uk-flex-center uk-margin-medium-bottom">
            <div class="uk-width-5-6@m uk-text-center">
                <h1 class="uk-margin-remove" data-aos="zoom-in-down">Why Choose Us?</h1>
            </div>
        </div>

        <!-- Grid Section -->
        <div class="uk-grid uk-child-width-1-2@m uk-grid-large uk-text-left" data-uk-grid>
            <!-- First Item -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle custom-card-default">
                    <div class="uk-width-1-3 uk-text-center">
                        <img src="{{ asset('images/icons/1.png') }}" alt="Flexible Account Options" class="card-image">
                    </div>
                    <div class="uk-width-2-3">
                        <h5 class="uk-text-warning">Flexible Account Options</h5>
                        <p>Tailored to meet your trading style and goals, giving you the freedom to trade your way.</p>
                    </div>
                </div>
            </div>
            <!-- Second Item -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle custom-card-default">
                    <div class="uk-width-1-3 uk-text-center">
                        <img src="{{ asset('images/icons/2.png') }}" alt="Comprehensive Market Access" class="card-image">
                    </div>
                    <div class="uk-width-2-3">
                        <h5 class="uk-text-warning">Comprehensive Market Access</h5>
                        <p>Trade multiple asset classes, from Forex and Equities to Indices and Commodities, all in one platform.</p>
                    </div>
                </div>
            </div>
            <!-- Third Item -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle custom-card-default">
                    <div class="uk-width-1-3 uk-text-center">
                        <img src="{{ asset('images/icons/3.png') }}" alt="Expertly Curated Experience" class="card-image">
                    </div>
                    <div class="uk-width-2-3">
                        <h5 class="uk-text-warning">Expertly Curated Experience</h5>
                        <p>Access premium tools, insights, and resources designed by industry professionals to enhance your trading journey.</p>
                    </div>
                </div>
            </div>
            <!-- Fourth Item -->
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle custom-card-default">
                    <div class="uk-width-1-3 uk-text-center">
                        <img src="{{ asset('images/icons/4.png') }}" alt="Transparent and Secure" class="card-image">
                    </div>
                    <div class="uk-width-2-3">
                        <h5 class="uk-text-warning">Transparent and Secure</h5>
                        <p>Built on trust, our platform ensures transparent pricing and secure transactions, so you can trade with confidence.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-preserve-color in-equity-1" style="margin-top:10%;margin-bottom:5%">
        <div class="uk-container">
            <h3>Step into the Market Effortlessly with <span style="color:#DCBA62">Arbitrage Prime!</span></h3>
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                <!-- card 1 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/5.png" alt="Login & Open Your Account" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Sign Up & Open Your Account:</h5>
                        <p>Sign up, complete your profile, and
                            verify your identity to get started.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 2 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/6.png" alt="Deposit your Funds" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Fund Your Account:</h5>
                        <p>Deposit funds at your convenience and prepare to start trading.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 3 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/7.png" alt="Enjoy Trading" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Start Trading:</h5>
                        <p>Get access to the platform and trade confidently to pursue your financial goals.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-4">
                    <a href="https://client.arbitrageprime.com/register" target="_blank" class="uk-button uk-button-primary breathing mt-2" style="float:inline-end">Sign Up <i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>

<!-- section content end -->
<!-- section content begin -->
<!-- <div class="uk-section in-equity-5">
    <div class="uk-container uk-margin-remove-bottom">
        <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
            <div>
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-equity-5-award-1.svg" alt="award-1" width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>Best Mobile Trading App</h6>
                        <p class="provider">European CEO Magazine</p>
                        <p class="year">2019</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-equity-5-award-2.svg" alt="award-2" width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>Best Forex Ecn Broker</h6>
                        <p class="provider">UK Forex awards</p>
                        <p class="year">2020</p>
                    </div>
                </div>
            </div>
            <div class="uk-visible@m">
                <div class="uk-flex uk-flex-left in-award">
                    <div class="uk-margin-small-right">
                        <img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-equity-5-award-3.svg" alt="award-3" width="91" height="82" data-uk-img>
                    </div>
                    <div>
                        <h6>Best Trading Conditions</h6>
                        <p class="provider">Forex report magazine</p>
                        <p class="year">2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- section content end -->
<!-- section content begin -->
<!-- <div class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center" data-src="{{ asset('') }}img/in-equity-decor-2.svg" data-uk-img>
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <h1>Trade on the go</h1>
                <p class="uk-text-lead">• Award-winning app <br>• Secure portfolio management <br>• Sophisticated trading tools <br>• Informative guides and videos <br>• Real-time alerts and signals <br>• App-exclusive promotions</p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                    <div class="uk-width-1-2@m">
                        <video class="uk-width-1-1" loop muted playsinline autoplay>
                            <source src="{{ asset('') }}forexdata/app_splash_page_greybg_nufc_white.mp4?v=1725960844" type="video/mp4">
                            <source src="{{ asset('') }}forexdata/app_splash_page_greybg_nufc_white.ogv?v=1725960844" type="video/ogv">
                            <source src="{{ asset('') }}forexdata/app_splash_page_greybg_nufc_white.webm?v=1725960844" type="video/webm">
                        </video>
                    </div>
                    <div class="uk-width-1-2@m uk-flex uk-flex-column uk-flex-middle">
                        <div class="uk-margin">
                            <a href="https://apps.apple.com/au/app/vt-markets-online-trading/id1372647263" class="uk-button uk-button-secondary uk-border-rounded">
                                <img src="{{ asset('') }}forexdata/app_store_new.svg" alt="App Store" width="120" height="40">
                            </a>
                        </div>
                        <div class="uk-margin">
                            <a href="https://play.google.com/store/apps/details?id=cn.com.vtmarkets&amp;pli=1" class="uk-button uk-button-secondary uk-border-rounded">
                                <img src="{{ asset('') }}forexdata/google_play_new.svg" alt="Google Play" width="135" height="40">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="uk-section uk-preserve-color uk-padding-remove uk-margin-remove uk-height-viewport uk-background-white" style="display:none">
    <div class="uk-container-expand uk-margin-remove">
        <div class="uk-grid-collapse uk-flex-middle" data-uk-grid>
            <!-- Left Side: Video (60% width) -->
            <div class="uk-width-3-5 uk-width-expand@m" data-aos="fade-right" data-aos-offset="500"
                data-aos-easing="ease-in-sine"
                style="margin: 0; padding: 0; height: 85vh; display: flex; justify-content: center; align-items: center;">
                <div style="position: relative; width: 100%; height: 100%;">
                    <img src="{{ asset('') }}img/trade-on-the-go.jpeg" style=" width: 100%; height: 100%;">
                </div>
            </div>

            <!-- Right Side: Content (40% width) -->
            <div class="uk-width-2-5 uk-padding-small"
                style="background-color: white; color: black; display: flex; flex-direction: column; justify-content: center; height: 85vh; box-sizing: border-box; padding: 20px; margin-top: 10px; margin-bottom: 10px;">
                <div>
                    <h2 class="uk-text-bold uk-margin-remove">Trade on the go</h2>
                    <p class="uk-text-lead uk-margin-small">
                        • Award-winning app <br>
                        • Secure portfolio management <br>
                        • Sophisticated trading tools <br>
                        • Informative guides and videos <br>
                        • Real-time alerts and signals <br>
                        • App-exclusive promotions
                    </p>
                    <!-- App Download Buttons -->
                    <div class="uk-margin-top uk-flex uk-flex-middle">
                        <div class="uk-margin-small-right">
                            <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=ArbitragePrime-Server">
                                <img src="{{ asset('') }}img/in-app-store.svg" alt="App Store" width="150" height="30">
                            </a>
                        </div>
                        <div>
                            <a href=" https://download.mql5.com/cdn/mobile/mt5/android?server=ArbitragePrime-Server">
                                <img src="{{ asset('') }}img/in-google-play.svg" alt="Google Play" width="150"
                                    height="30">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add responsive CSS styles -->
<style>
    @media (max-width: 767px) {
        .uk-width-3-5 {
            width: 100% !important;
            height: 50vh;
            /* Adjust height as needed */
        }

        .uk-width-2-5 {
            width: 100% !important;
            height: auto;
            /* Adjust height as needed */
            padding: 10px;
            /* Adjust padding for mobile */
        }

        video {
            height: auto;
            /* Ensure video scales properly on mobile */
        }

        .uk-margin-small-right {
            margin-right: 0;
            /* Adjust margins for small screens */
        }

        .uk-margin-top {
            margin-top: 10px;
            /* Adjust margin for small screens */
        }
    }
</style>

<!-- section content end -->
@endsection