@extends('master')
@section('contents')
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Forex</a></li>
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
                <h1>Forex</h1>
                <p style="line-height: 1.6;">Forex trading stands out as a highly favored and potentially profitable venture due to its distinction as the most liquid market. It provides an excellent avenue for speculating on geopolitical and economic developments, given the market's responsiveness to these factors.</p>
                <p style="line-height: 1.6;">Forex operates as a decentralized market that runs around the clock, tracking international banking activities as they shift from one global market to another. One of the notable advantages of forex trading is the ability for traders to set automatic stop-loss and profit levels once they open a position. Due to the expansive reach of trade, commerce, and finance on a global scale, the forex market ranks among the largest and most liquid asset markets globally.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/new/5.jpeg">
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


        <section class="sec_add_w">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-5">
                    <h1 align="left">Why Arbitrage?</h1><br>
                    <img class="res" src="{{ asset('') }}images/Forex-GIF-2-min.gif">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                 <br><br><br><br>
                 <!-- <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> Regulated Broker</div> -->
                 <div class="list_add"><img src="{{ asset('') }}images/ico5.png"> Multilingual Support</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Optimum Client Service</div>
                 <div class="list_add"><img src="{{ asset('') }}images/ico7.png"> Experts in the Industry</div>
                </div>
                
                
            </div>
        </div>
    </section>
   

    <section class="sec_add_w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"><h1 align="center">Get Started in 3 Simple Steps</h1><br><br></div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico8.png">
                    <span>Login & Open Your Account</span>
                    <p>Complete the formalities, register & verify your account.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico9.png">
                    <span>Deposit your Funds</span>
                    <p>Add the funds in your capacity, get ready for the final stage</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico10.png">
                    <span>Enjoy Trading</span>
                    <p>Reap the benefits & trade smart to enjoy profits</p>
                 </div>
                </div>
            </div>
        </div>
    </section>

@endsection