@extends('master')
@section('contents')
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Indices</a></li>
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
                <h1>Indices</h1>
                <p style="line-height: 1.6;">Participate in the comprehensive valuation of an entire stock market through a single trade, enabling you to navigate the global markets and respond to their movements influenced by worldwide events.</p>
                <p style="line-height: 1.6;">Indices provide a standardized means of gauging the performance of a collection of stocks, offering investors exposure to an entire sector or economy in one go.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/new/2.jpeg">
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
                    <span>Value-Driven</span>
                    <p>World’s biggest companies to trade for the highest value.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Liquid Markets</span>
                    <p>Liquidity known to all opens up opportunities for all.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Watch News, Trade Then</span>
                    <p>World news moves the market & creates the opportunity to trade.</p>
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
                    <img class="res" src="{{ asset('') }}images/2nd-Indices-1024x670.png">
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