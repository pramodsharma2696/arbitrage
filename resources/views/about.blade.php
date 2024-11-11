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
                <!-- <h2>Smoothening the process of trading</h2> -->
                <h2>About Arbitrage Prime</h2>
                <p>Arbitrage Prime Limited, based in Dubai and globally recognized, empowers traders with
                    secure, user-friendly trading solutions. We prioritize timely, profitable results, built on the
                    pillars
                    of loyalty, transparency, and consistency to ensure premium client service worldwide.
                </p>
                <p>Curated by experts, Arbitrage Prime offers a professional and accessible trading experience for
                    all levels. Our open approach enables us to share proven strategies and educate traders,
                    helping them navigate the global financial markets confidently.</p>
                <p>Join Arbitrage Prime for a stable, empowering trading journey. (There should be a CTA button
                    to sign up page)</p>
            </div>
            <div class="col-lg-6">
                <img class="res" src="{{ asset('') }}images/new/5.jpeg">
            </div>
        </div>
    </div>
</section>

<section class="bg_add" id="our_brand">

    <div class="uk-section uk-preserve-color in-equity-1">
        <div class="uk-container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                <!-- card 1 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-secondary uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i1.png" alt="Premium Economic Calendar" width="50"
                                height="50" class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Empowerment Through Knowledge</h5>
                        <p>We believe that informed traders are successful traders. By providing educational resources,
                            insights, and expert guidance, we empower clients to navigate markets confidently and make
                            strategic decisions.
                        </p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 2 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-secondary uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i2.png" alt="Technical Views" width="50" height="50"
                                class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Integrity and Transparency</h5>
                        <p>Trust is built on openness. We maintain absolute transparency in our processes, pricing, and
                            client interactions, ensuring that our clients feel secure and valued in every trade.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 3 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-secondary uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i3.png" alt="Financial strength" width="50" height="50"
                                class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Excellence in Client Service</h5>
                        <p>Every client matters. We are committed to delivering responsive, premium service tailored to
                            individual needs, fostering lasting relationships grounded in respect and support.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="sec_add" id="3step">

    <div class="uk-section uk-preserve-color in-equity-1">
        <div class="uk-container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                <!-- card 1 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i4.png" alt="Login & Open Your Account" width="50"
                                height="50" class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Login & Open Your Account</h5>
                        <p>Complete the formalities, register & verify your account.
                        </p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 2 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i5.png" alt="Deposit your Funds" width="50" height="50"
                                class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Deposit your Funds</h5>
                        <p>Add the funds in your capacity, get ready for the final stage.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 3 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/i6.png" alt="Enjoy Trading" width="50" height="50"
                                class="uk-margin-bottom">
                        </div>
                        <h5 class="uk-margin-remove">Enjoy Trading</h5>
                        <p>Reap the benefits & trade smart to enjoy profits.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection