@extends('master')
@section('contents')
<style>
	.place-name {
		display: none !important;
	}
	.uk-grid {
    display: flex;
    flex-wrap: wrap !important;
    margin: 0;
    padding: 0;
    list-style: none;
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
            <div class="uk-width-4-5@m"> <!-- Adjusted width for better centering -->
                <div class="uk-grid uk-child-width-1-4@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                    <div>
                        <h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
                        <p class="uk-margin-small-top">Address: Ground Floor, The Sotheby Building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia</p>
                       
                    </div>
                    <div>
                        <h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Physical Address</h5>
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
                <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a question?</p>
                <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in touch</span></h1>
                
                <!-- Adjusted Form Widths -->
                <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
                    <div class="uk-width-1-2@s uk-width-1-2@m uk-inline"> <!-- Half-width on medium screens -->
                        <span class="uk-form-icon fas fa-user fa-sm"></span>
                        <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-2@m uk-inline"> <!-- Half-width on medium screens -->
                        <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                    </div>
                    <div class="uk-width-1-1 uk-inline"> <!-- Full-width for subject field -->
                        <span class="uk-form-icon fas fa-pen fa-sm"></span>
                        <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="uk-width-1-1"> <!-- Full-width for message field -->
                        <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                    </div>
                    <div class="uk-width-1-1"> <!-- Full-width button -->
                        <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
 
@endsection