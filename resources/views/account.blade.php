@extends('master')
@section('contents')
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Account</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
     



    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6"><br><br>
                <h1>Account Types</h1><br><br>
                <p style="line-height: 1.6;">At Arbitrage Prime Limited, competitive pricing is the norm. You have the flexibility to trade CFDs with either an STP Account type, both of which offer substantial liquidity, state-of-the-art execution, and a comprehensive suite of platforms and tools.</p>
                </div>
                <div class="col-lg-6">
                    <img class="res" src="{{ asset('') }}images/1st-4.png">
                </div>
            </div>
        </div>
    </section>


    <section class="sec_add_w" id="join_account">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"><h1 align="center">Accounts</h1><br><br></div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico1.png">
                    <span>Standard Account</span>
                    <p>Register & open your own personal trading account with Arbitrage Prime Limited; ensure your sole control.</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Joint Account</span>
                    <p>Create one combined trading account & trade with your partner with mutual access.</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Corporate Account</span>
                    <p>For professional or other financial benefits, you can trade using your company entity.</p>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Islamic Account</span>
                    <p>For clients who require a particular account type for religious purposes.</p>
                 </div>
                </div>
            </div>
        </div>
    </section>
 

@endsection