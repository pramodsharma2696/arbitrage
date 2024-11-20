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
						<li><a href="#">Tools</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
     



    <section class="py-5" id="about_company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6"><br><br>
                <h1>Tools</h1>
                <p style="line-height: 1.6;">Understanding the clients’ need of knowing the right trading tools & then identifying opportunities, Arbitrage offers all the solutions accordingly. Such a pattern helps manage the risk factor as they trade based on the market research.</p>
                <p style="line-height: 1.6;">Just the right tool can create a huge difference to a trading strategy.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/1st-copy-2-1.png">
                </div>
            </div>
        </div>
    </section>


    <section class="sec_add_w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico1.png">
                    <span>Most Liquid Market</span>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Long or short, Both Trades</span>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Tight spreads</span>
                 </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec_add_w" id="Autochartist">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-5">
                    <h1 align="left">Autochartist</h1><br>
                    <p style="line-height: 1.6;">Autochartist being the world’s leading chart pattern recognition software makes technical tools easy & effective to implement. Its functionality helps to scan through the markets & identify emerging patterns. With this ready data in hand, you can have clear indications on the prices of where they are moving, enabling you to set up right for your next trade.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                 <br>
                 <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> MT5, Web-Based, App-Based</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico5.png"> Analyze a wide range of chart patterns</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Accurate direction with friendly interface</div>
                </div>
                
                
            </div>
        </div>
    </section>

    <section class="bg_add" id="vps">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-5">
                    <h1 align="left">VPS</h1>   
                    <p style="line-height: 1.6;">What other than connectivity can be an important factor. Arbitrage works in line with 4XSolutions that provides clients easy access to a VPS infrastructure. This process ensures a direct connection to our trading servers.</p>
                    <br>
                 <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> Low Latency & Poly Connected</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico5.png"> Highly Protected & Secured</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Complete 24 hour Support</div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/2nd-image-copy-3.png">
                </div>
            </div>
        </div>
    </section>
   
 
 <section class="sec_add_w" id="mql5">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-6"><br>
                    <h1 align="left">MQL5</h1><br>
                    <p style="line-height: 1.6;">Besides being powerful, MT5 platforms come with a large range of tools and functions for you to access. These can either be directly used from inside your platform or from the Metaquotes websites.</p>
                    <br>
                 
                </div>
                <div class="col-lg-6">
                 <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> Trading Signals</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico5.png"> Indicators</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Communities</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Custom Modifications</div>
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
                <a href="https://client.arbitrageprime.com/register" target="_blank" class="uk-button uk-button-primary breathing mt-2 float-end">Sign Up <i
                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        </div>
       
    </div>
</section>
@endsection