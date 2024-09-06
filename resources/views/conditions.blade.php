@extends('master')
@section('contents')
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
   
 

@endsection