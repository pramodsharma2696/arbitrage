<!-- header begin -->
<style>
	@media (max-width: 640px) {
		.uk-padding-remove-vertical {
			padding-top: 40px !important;
			/* padding-bottom: 40px !important; */
			margin-bottom: -31px;
		}

		/* .in-equity-breadcrumb .uk-breadcrumb {
			padding-top: 0px;
			padding-bottom: 0px;
		} */

		.uk-navbar-dropdown {
			height: 450px;
			overflow-y: scroll;
			padding: 50px;
		}
		li.take-right {
			margin-left: -3px !important;
		}
		a.uk-button.uk-button-text {
			color: #FFFFFF !important;
		}


	}
	li.take-right {
		margin-left: 38px;
	}
</style>
<header>
	<div class="uk-section uk-padding-remove-vertical">
		<nav class="uk-navbar-container uk-navbar-transparent"
			data-uk-sticky="animation: uk-animation-slide-top; top: 0; cls-active: uk-navbar-sticky"
			style="background: #000000;">
			<div class="uk-container" data-uk-navbar>
				<div class="uk-navbar-left">
					<a class="uk-navbar-item uk-logo" href="{{ url('') }}">
						<img src="{{ asset('') }}img/user/logo-darkmode.png" alt="logo" width="146" height="40">
					</a>
					<ul class="uk-navbar-nav uk-visible@m">
						<li><a href="{{ url('') }}">Home</a></li>
						<!-- 1 -->
						<li>
							<a href="#" role="button" aria-haspopup="true">
								Trading
								<span data-uk-navbar-parent-icon="" class="uk-icon uk-navbar-parent-icon"></span>
							</a>

							<!-- Updated dropdown with mode hover and better responsiveness -->
							<div class="uk-navbar-dropdown uk-navbar-dropdown-width-2 uk-drop"
								data-uk-dropdown="mode: hover; pos: bottom-justify; boundary: .uk-navbar; boundary-align: true"
								style="max-width: 1318px;">

								<!-- Use responsive grid classes and scrollable-dropdown for mobile support -->
								<div class="uk-navbar-dropdown-grid uk-child-width-1-4@s uk-child-width-1-2@l uk-grid uk-grid-stack scrollable-dropdown"
									data-uk-grid="">

									<div>
										<ul class="uk-nav uk-navbar-dropdown-nav">
											<li><a href="{{ url('forex') }}"><b>Instruments</b> </a></li>
											<li><a href="{{ url('forex') }}">Forex</a></li>
											<li><a href="{{ url('equities') }}">Equities</a></li>
											<li><a href="{{ url('indices') }}">Indices</a></li>
											<li><a href="{{ url('commodities') }}">Commodities</a></li>
											<li><a href="{{ url('cryptocurrencies') }}">Cryptocurrencies</a></li>

										</ul>
									</div>
									<div>
										<ul class="uk-nav uk-navbar-dropdown-nav">
											<li><a href="{{ url('account') }}"><b>Account Types</b></a></li>
											<li><a href="{{ url('account#std_account') }}">Standard Account</a></li>
											<li><a href="{{ url('account#prime_account') }}">Prime Account</a></li>
											<!-- <li><a href="{{ url('account') }}">Corporate Accounts</a></li> -->
											<!-- <li><a href="{{ url('account') }}">Islamic</a></li> -->

										</ul>
										<ul class="uk-nav uk-navbar-dropdown-nav">
											<li><a href="#"><b>Platform</b></a></li>
											<li><a href="{{ url('metatrader5') }}"> MetaTrader 5</a></li>
										</ul>
									</div>
									<div>
										<ul class="uk-nav uk-navbar-dropdown-nav">
											<li><a href="{{ url('tools') }}"><b>Tools</b></a></li>
											<li><a href="{{ url('tools#Autochartist') }}">Autochartist </a></li>
											<li><a href="{{ url('tools#vps') }}">VPS</a></li>
											<li><a href="{{ url('tools#mql5') }}">MQL 5</a></li>

										</ul>
									</div>
									<div>
										<ul class="uk-nav uk-navbar-dropdown-nav">
											<li><a href="{{ url('conditions') }}"><b>Conditions</b></a></li>
											<li><a href="{{ url('conditions#leverage') }}">Leverage </a></li>
											<li><a href="{{ url('conditions#swaps') }}">Swaps</a></li>
											<li><a href="{{ url('conditions#rollovers') }}">Rollovers</a></li>
											<li><a href="{{ url('conditions#dividends') }}">Dividends</a></li>
											<li><a href="{{ url('conditions#market') }}">Market Notifications</a></li>
											<li><a href="{{ url('conditions#product') }}">Product Information</a></li>

										</ul>
									</div>

									<!-- Repeat the above column structure for each section as needed -->
								</div>
							</div>
						</li>

						<!-- 0 -->
						</li>
						<li>
							<a href="{{ url('about-us') }}">Company<span data-uk-navbar-parent-icon></span></a>
							<div class="uk-navbar-dropdown">
								<ul class="uk-nav uk-navbar-dropdown-nav">
									<li><a href="{{ url('about-us') }}#about_company">About Company</a></li>
									<li><a href="{{ url('about-us') }}#our_brand">Our Brand Values</a></li>
									<li><a href="{{ url('about-us') }}#3step">3 Step Process</a></li>

								</ul>
							</div>
						</li>

						<!-- <li><a href="education.html">Education</a> -->
						</li>
						<li><a href="{{ url('contact-us') }}">Contact</a></li>
						<li><a href="{{ url('FAQ') }}">FAQ</a></li>
						<li class="take-right"><a href="https://client.arbitrageprime.com/register" target="_blank">Open Demo Account <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a></li>
						<li><a href="https://client.arbitrageprime.com/register" target="_blank">Open Live Account <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a></li>
						<li><a href="https://client.arbitrageprime.com/login" target="_blank">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a></li>
					</ul>
				</div>
				<div class="uk-navbar-right">
					
				</div>
			</div>
		</nav>
	</div>
</header>
<!-- header end -->