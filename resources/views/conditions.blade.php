@extends('master')
@section('contents')
<style>
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
        margin-left: -56px !important;
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

/* common content css end  */
</style>
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Conditions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
     



    <section class="py-5" id="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6"><br><br>
                <h1>Product <br>Specifications</h1>
                <p style="line-height: 1.6;">Here is detailed product information for all the instruments we offer. You can also find them in the trading platform in the ‘specification’ section of the instruments.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/Product-specification.png">
                </div>
            </div>
        </div>
    </section>


     <section class="sec_add_w" id="leverage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/Leverage.png">
                </div>
                <div class="col-lg-6">
                <h1>Leverage</h1>
                <p style="line-height: 1.6;">This concept enables you to place trades using a small amount of the value of the trade as a deposit, known as the margin. Leverage can prove to be an immensely useful tool for clients & take advantage of all the movements in the market over small amounts of capital. However, there are certain risks that can magnify the losses. </p>
                <p style="line-height: 1.6;">Thus, we recommended using effective risk mitigation tools (such as stop-loss orders) and money management while trading with leverage so as to mitigate the risks of trading.</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="bg_add" id="swaps">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-6">
                <h1>SWAPS</h1>
                <p style="line-height: 1.6;">When you hold a position overnight, you owe SWAP charges. It is actually the cost of borrowing between the value of one currency against the other in a Forex Pair or the outright finance charge of leverage on instruments. You may pay or even receive overnight fees.</p>
                <p style="line-height: 1.6;">To view, overnight fees are available in the ‘Product Specifications’ of each instrument in the trading platform. Just like a spread charge, they are quoted in points and applied to your trade overnight just like a spread charge.</p>
                </div>
                
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/swap.png">
                </div>
            </div>
        </div>
    </section>
    <section class="sec_add_w" id="dividends">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/Dividends-Corporate-Actions.png">
                </div>
                <div class="col-lg-6">
                <h1>Dividends & Corporate Actions</h1>
                <p style="line-height: 1.6;">Equity-based instruments are subject to a number of Corporate Actions and Dividend Adjustments.</p>
                <p style="line-height: 1.6;">When a dividend is paid out, an Index price is re-valued to adjust for the dividend payment. This price adjustment means that a client should neither benefit nor be penalized. Thus, the difference i.e. the ‘dividend’ is adjusted to the P&L of the trade.</p>
                </div>
                
            </div>
        </div>
    </section>


    <section class="bg_dark" id="trading">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"><h3 align="center" style="color: #fff">Trading Equities (CFD) includes all & is never limited to</h3><br><br></div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico1.png">
                    <span>Stock Split</span>
                    <p>Shareholders are issued new shares according to the ratio of their holding</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Bonus Issue</span>
                    <p>The unlikely event that a company may issue free shares to shareholders</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Rights Issue</span>
                    <p>The option for existing shareholders to excercise an option to buy new shares on issue</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Buy black</span>
                    <p>When a company decides to buy back its own shares from shareholders</p>
                 </div>
                </div>
            </div>
        </div>
    </section>

     <section class="sec_add_w" id="rollovers">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-6">
                <h1>Rollovers</h1>
                <p style="line-height: 1.6;">A point where the contract expires and no delivery takes place of the asset is an expiry date which is set for all future contracts. At this point, Arbitrage Prime Limited offers CFD Futures, which means our contracts don’t expire but roll forward to the next period. This allows clients to keep trading and holding positions.</p>
                <p style="line-height: 1.6;">When a CFD Future contract is rolled, it is adjusted from the current month’s expiry date to the next month’s expiry date. To ensure that clients are not disadvantaged from these rollovers, the change in the two prices is adjusted to client accounts.</p>
                </div>

                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/Rollovers.png">
                </div>
                
            </div>
        </div>
    </section>

    <section class="sec_add_w" id="market">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/Market-Notifications.png">
                </div>

                <div class="col-lg-6">
                <h1>Market Notifications</h1>
                <p style="line-height: 1.6;">Financial Market Hours are often adjusted around Public Holidays and world events. Arbitrage Prime Limited keeps you updated with market notifications that set out any changes to the ‘normal market’ hours.</p>
                </div>

                
                
            </div>
        </div>
    </section>
    <section class="sec_add_w">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h1 class="mb-5">Why Choose Us?</h1>
                <!-- <p class="mb-5">Discover the benefits of choosing us for your trading needs.</p> -->
            </div>
        </div>
        <div class="row">
            <!-- First Row - First Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/1.png" alt="Multilingual Support" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Flexible Account Options</h5>
                        <p>Tailored to meet your trading style and goals, giving you the freedom to trade your
                            way.</p>
                    </div>
                </div>
            </div>
            <!-- First Row - Second Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/2.png" alt="Optimum Client Service" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Comprehensive Market Access</h5>
                        <p>Trade multiple asset classes, from Forex and Equities to Indices and Commodities, all
                            in one platform.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Second Row - First Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/3.png" alt="Experts in the Industry" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Expertly Curated Experience</h5>
                        <p>Access premium tools, insights, and resources designed by industry professionals to
                            enhance your trading journey.</p>
                    </div>
                </div>
            </div>
            <!-- Second Row - Second Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/4.png" alt="Regulated Broker" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Transparent and Secure</h5>
                        <p>Built on trust, our platform ensures transparent pricing and secure transactions, so
                            you can trade with confidence.</p>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="sec_add_w">

    <div class="uk-section uk-preserve-color in-equity-1">
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
                <a href="#" class="uk-button uk-button-primary breathing mt-2 float-end">Sign Up <i
                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        </div>
       
    </div>
</section>
 

@endsection