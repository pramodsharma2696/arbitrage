<footer>
		<div class="uk-section">
			<div class="uk-container uk-margin-top">
				<div class="uk-grid">
					<div class="uk-width-2-3@m">
						<div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
							<div>
								<h5>Instruments</h5>
								<ul class="uk-list uk-link-text">
									<li><a href="{{ url('forex') }}">Forex</a></li>
									<li><a href="{{ url('equities') }}">Equities</a></li>
									<li><a href="{{ url('indices') }}">Indices</a></li>
									<li><a href="{{ url('commodities') }}">Commodities</a></li>
									
								</ul>
							</div>
							<div>
								<h5>Accounts Type</h5>
								<ul class="uk-list uk-link-text">
									<li><a href="{{ url('account') }}">Standard</a></li>
                                    <li><a href="{{ url('account') }}">Joint Accounts</a></li>
                                    <li><a href="{{ url('account') }}">Corporate Accounts</a></li>
                                    <li><a href="{{ url('account') }}">Islamic</a></li>
								</ul>
							</div>
							<div class="in-margin-top-60@s">
								<h5>Company</h5>
								<ul class="uk-list uk-link-text">
								<li><a href="{{ url('about-us') }}#about_company">About Company</a></li>
								<li><a href="{{ url('about-us') }}#our_brand">Our Brand Values</a></li>
								<li><a href="{{ url('about-us') }}#3step">3 Step Process</a></li>
								<li><a href="{{ url('contact-us') }}#3step">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="uk-width-1-3@m uk-flex uk-flex-right@m">
						<!-- social media begin -->
						<div class="uk-flex uk-flex-column social-media-list">
							<div><a href="#" class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i> Facebook</a></div>
							<div><a href="#" class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></div>
							<div><a href="#" class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></div>
							<div><a href="#some-link" class="color-telegram text-decoration-none"><i class="fab fa-telegram"></i> Telegram</a></div>
							<div><a href="#some-link" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i> Youtube</a></div>
						</div>
						<!-- social media end -->
					</div>
				</div>
			</div>
			<hr class="uk-margin-large">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-middle">
					<div class="uk-width-2-3@m uk-text-small">
						<ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin="">
							<li><a href="#">Risk disclosure</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Return policy</a></li>
							<li><a href="#">Customer Agreement</a></li>
							<li><a href="#">AML policy</a></li>
						</ul>
						<p class="copyright-text">©2024 Arbitrage Prime Limited. All Rights Reserved.</p>
					</div>
					<div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
						<span class="uk-margin-right"><img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-footer-mastercard.svg" alt="footer-payment" width="34" height="21" data-uk-img=""></span>
						<span><img src="{{ asset('') }}img/in-lazy.gif" data-src="{{ asset('') }}img/in-footer-visa.svg" alt="footer-payment" width="50" height="16" data-uk-img=""></span>
					</div>
				</div>
			</div>
		</div>
	</footer>