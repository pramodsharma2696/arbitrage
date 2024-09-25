@extends('master')
@section('contents')

<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">About</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->

<section class="py-5" id="about_company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                <h2>Smoothening the process of trading</h2>
                <p>Arbitrage Prime Limited is a Dubai based & globally recognized FX & trading platform with an aim to empower people with trading power. Ensuring security, Arbitrage Prime Limited makes trading convenient & brings profitable results, all in time. Loyalty, transparency & consistency stand as the pillars of Arbitrage Prime Limited enabling a premium client service worldwide.</p>
                <p>Carrying years of experience, Arbitrage Prime Limited sets a professional & easy-to-access process for each and all in the trading world. Keeping an open-minded approach, we strive to share our tried & tested tips to trade & educate people about the same. Thus, with Arbitrage Prime Limited, trading in the global financial market becomes stable.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/new/5.jpeg">
                </div>
            </div>
        </div>
    </section>


    <section class="bg_add" id="our_brand">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb_40"><h1 class="header_tx">Our Brand Values</h1></div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i1.png">
                    <span>Consistent Excellence</span>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i2.png">
                    <span>Integrated Loyalty</span>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i3.png">
                    <span>Flexible Functioning</span>
                 </div>
                </div>
            </div>
        </div>
    </section>


        <section class="sec_add" id="3step">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb_40">
                    <h1 class="header_tx">Trade smart with Arbitrage Prime Limited in 3 simple steps</h1>
                    <h5 align="center">Decide act, trade & succeed</h5>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i4.png">
                    <span>Login & Open Your Account</span>
                    <p>Complete the formalities, register & verify your account.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i5.png">
                    <span>Deposit your Funds</span>
                    <p>Add the funds in your capacity, get ready for the final stage.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/i6.png">
                    <span>Enjoy Trading</span>
                    <p>Reap the benefits & trade smart to enjoy profits.</p>
                 </div>
                </div>
            </div>
        </div>
    </section>
  


@endsection