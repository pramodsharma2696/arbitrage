@extends('master')
@section('contents')
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Equities</a></li>
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
                <h1>Equities</h1>
                <p style="line-height: 1.6;">Gain access to global stock markets and execute trades based on real-time data reflecting the fluctuations in share prices. Engage in trading with some of the largest and most prominent companies in the world.</p>
                <p style="line-height: 1.6;">This represents a fundamental pillar of a market economy, offering investors the invaluable chance to acquire a stake in a company's ownership. This ownership share carries the potential for future gains, dependent on the company's performance.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/new/4.jpeg">
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
                    <span>Known Brands</span>
                    <p>Trade with the shares of world-famous companies.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Easy Access</span>
                    <p>Availability of small margins makes it efficient</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Long/Short both</span>
                    <p>Trade in bull/bear, both the markets</p>
                 </div>
                </div>
            </div>
        </div>
    </section>


        <section class="bg_add">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-lg-5">
                    <h1 align="left">Why MARVEL</h1><br>
                    <img class="res" src="{{ asset('') }}images/Equities-2nd-image.png">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                 <br><br><br><br>
                 <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> Regulated Broker</div>
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