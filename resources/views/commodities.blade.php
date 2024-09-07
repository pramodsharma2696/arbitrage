@extends('master')
@section('contents')
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Commodities</a></li>
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
                <h1>Commodities</h1>
                <p style="line-height: 1.6;">Global events have a significant impact on the pricing of commodities, prompting speculation on shifts in supply and demand for these resources. Traders engage in market activity centered on the prices of valuable metals, energy sources, and other similar commodities.</p>
                <p style="line-height: 1.6;">A commodity is a fundamental product utilized in trade, interchangeable with other goods of its kind. From an investor's perspective, commodities represent a valuable means to expand and diversify their portfolios beyond conventional securities.</p>
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
                    <span>Highly Relevant</span>
                    <p>Commodities being familiar with routine lives make it easy to understand.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Global Effect</span>
                    <p>The demand & supply of commodities is highly influenced by global events</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Risk but Profit Market</span>
                    <p>People who invest/speculate generally flock to commodities in uncertain times</p>
                 </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg_add">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-5">
                    <h1 align="left">Why Arbitrage</h1><br>
                    <img class="res" src="{{ asset('') }}images/Commodities-2nd-image.png">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                 <br><br><br><br>
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