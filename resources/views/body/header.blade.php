<!-- header begin -->
<header>
		<div class="uk-section uk-padding-remove-vertical">
			<nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;" style="background: rgb(24, 24, 24);">
				<div class="uk-container" data-uk-navbar>
					<div class="uk-navbar-left">
						<a class="uk-navbar-item uk-logo" href="{{ url('') }}">
							<img src="{{ asset('') }}img/user/header-logo.svg" alt="logo" width="146" height="40">
						</a>
						<ul class="uk-navbar-nav uk-visible@m">
							<li><a href="{{ url('') }}">Home</a></li>
							<!-- 1 -->
						<li><a href="#">Trading<span data-uk-navbar-parent-icon></span></a>
						<div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="{{ url('forex') }}">Instruments</a>
                                <ul class="uk-nav-sub uk-navbar-dropdown-nav">
                                    <li><a href="{{ url('forex') }}">Forex</a></li>
                                    <li><a href="{{ url('equities') }}">Equities</a></li>
                                    <li><a href="{{ url('indices') }}">Indices</a></li>
                                    <li><a href="{{ url('commodities') }}">Commodities</a></li>
                                </ul>
                            </li>
                          
                            <li><a href="{{ url('account') }}">Account Types</a>
                                <ul class="uk-nav-sub uk-navbar-dropdown-nav">
                                    <li><a href="{{ url('account') }}">Standard</a></li>
                                    <li><a href="{{ url('account') }}">Joint Accounts</a></li>
                                    <li><a href="{{ url('account') }}">Corporate Accounts</a></li>
                                    <li><a href="{{ url('account') }}">Islamic</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('tools') }}">Tools</a>
                                <ul class="uk-nav-sub uk-navbar-dropdown-nav">
                                    <li><a href="{{ url('tools#Autochartist') }}">Autochartist </a></li>
                                    <li><a href="{{ url('tools#vps') }}">VPS</a></li>
                                    <li><a href="{{ url('tools#mql5') }}">MQL 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Conditions</a>
                                <ul class="uk-nav-sub uk-navbar-dropdown-nav">
                                    <li><a href="{{ url('conditions#leverage') }}">Leverage </a></li>
                                    <li><a href="{{ url('conditions#swaps') }}">Swaps</a></li>
                                    <li><a href="{{ url('conditions#rollovers') }}">Rollovers</a></li>
                                    <li><a href="{{ url('conditions#dividends') }}">Dividends</a></li>
                                    <li><a href="{{ url('conditions#market') }}">Market Notifications</a></li>
                                    <li><a href="{{ url('conditions#product') }}">Product Information</a></li>
                                </ul>
                            </li>
                        </ul>
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
						</ul>
					</div>
					<div class="uk-navbar-right">
						<div class="uk-navbar-item uk-visible@m in-optional-nav">
							<a href="{{ url('login') }}" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
							<a href="#" class="uk-button uk-button-primary">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- header end -->