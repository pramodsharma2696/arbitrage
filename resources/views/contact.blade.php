@extends('master')
@section('contents')
<style>
	.gm-style .place-card .place-name {
		display: none !important;
	}
	.place-name {
    display: none !important;
}
</style>
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center in-contact-6">
					<div class="uk-width-1-1">
					

						<iframe class="uk-width-1-1 uk-height-large uk-border-rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.1125680225396!2d-60.9582245242325!3d14.07052948983309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c406820f255a007%3A0x35b3ab7fdfe0620d!2s%20!5e0!3m2!1sen!2sin!4v1726477165341!5m2!1sen!2sin"></iframe>
					</div>
					<div class="uk-width-3-5@m">
						<div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
							<div>
								<h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
								<p class="uk-margin-small-top">Address: Ground Floor, The Sotheby Building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia</p>
								<p class="uk-margin-small-top">Physical Address: Parklane tower, 3209, Businessbay, Dubai.</p>
							</div>
							<div>
								<h5 class="uk-margin-remove-bottom"><i class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
								<p class="uk-margin-small-top uk-margin-remove-bottom"><a href="mailto:support@arbitrageprime.com" style="color:#707070">support@arbitrageprime.com</a></p>
								<p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">for public inquiries</p>
							</div>
							<div>
								<h5 class="uk-margin-remove-bottom"><i class="fas fa-phone-alt fa-sm uk-margin-small-right"></i>Call</h5>
								<p class="uk-margin-small-top uk-margin-remove-bottom">Landline :  +971 - 045549891</p>
								<p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Mon - Fri, 9am - 5pm</p>
							</div>
						</div>
						<hr class="uk-margin-medium">
						<p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a questions?</p>
						<h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in touch</span></h1>
						<form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
							<div class="uk-width-1-2@s uk-inline">
								<span class="uk-form-icon fas fa-user fa-sm"></span>
								<input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
							</div>
							<div class="uk-width-1-2@s uk-inline">
								<span class="uk-form-icon fas fa-envelope fa-sm"></span>
								<input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
							</div>
							<div class="uk-width-1-1 uk-inline">
								<span class="uk-form-icon fas fa-pen fa-sm"></span>
								<input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
							</div>
							<div class="uk-width-1-1">
								<textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
							</div>
							<div class="uk-width-1-1">
								<button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
@endsection