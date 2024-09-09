@extends('master')
@section('contents')
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
   
@endsection