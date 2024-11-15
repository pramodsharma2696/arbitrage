@extends('master')
@section('contents')
<style>
    /* common content css start  */
.breathing:hover {
    animation: breathe 1.5s ease-in-out infinite;
}

.uk-button-primary:hover {
    background-color: #fcab14;
    color: #fff;
}

@keyframes breathe {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
}

.breathing {
    display: inline-block;
    background: linear-gradient(335deg, #e5be4e, #efdd95, #a98726);
    padding: 0px 45px 0px 45px;
    color: #000000;
    border-radius: 25px;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.setImg {
    width: 181px;
    margin-top: -74px;
    margin-bottom: -45px;
    margin-left: -50px;
}

/* card css */
.sec_add_w {
    padding: 60px 0;
}

@media (max-width: 640px) {
    .card-image {
        margin-left: -56px !important;
    }
}

.card-image {
    max-width: 230px !important;
    height: auto;
    margin-top: -64px;
    /* margin: 0 auto; */
    object-fit: contain;
}

.d-flex {
    display: flex;
}

.align-items-center {
    align-items: center;
}

/* common content css end  */
</style>
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
                <p>Join Arbitrage Prime for a stable, empowering trading journey. </p>
                
                <a href="#" class="uk-button uk-button-primary breathing mt-2">Sign Up <i
                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
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



<section class="sec_add_w">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h1 class="mb-5">Why Choose Us?</h1>
                <!-- <p class="mb-5">Discover the benefits of choosing us for your trading needs.</p> -->
            </div>
        </div>
        <div class="row">
            <!-- First Row - First Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/1.png" alt="Multilingual Support" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Flexible Account Options</h5>
                        <p>Tailored to meet your trading style and goals, giving you the freedom to trade your
                            way.</p>
                    </div>
                </div>
            </div>
            <!-- First Row - Second Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/2.png" alt="Optimum Client Service" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Comprehensive Market Access</h5>
                        <p>Trade multiple asset classes, from Forex and Equities to Indices and Commodities, all
                            in one platform.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Second Row - First Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/3.png" alt="Experts in the Industry" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Expertly Curated Experience</h5>
                        <p>Access premium tools, insights, and resources designed by industry professionals to
                            enhance your trading journey.</p>
                    </div>
                </div>
            </div>
            <!-- Second Row - Second Item -->
            <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-4 text-center">
                        <img src="{{ asset('') }}images/icons/4.png" alt="Regulated Broker" class="card-image">
                    </div>
                    <div class="col-8">
                        <h5 class="uk-text-warning">Transparent and Secure</h5>
                        <p>Built on trust, our platform ensures transparent pricing and secure transactions, so
                            you can trade with confidence.</p>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>

<section class="sec_add_w" id="3step">

    <div class="uk-section uk-preserve-color in-equity-1">
        <div class="uk-container">
            <h3>Step into the Market Effortlessly with <span style="color:#DCBA62">Arbitrage Prime!</span></h3>
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                <!-- card 1 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/5.png" alt="Login & Open Your Account" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Sign Up & Open Your Account:</h5>
                        <p>Sign up, complete your profile, and
                            verify your identity to get started.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 2 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/6.png" alt="Deposit your Funds" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Fund Your Account:</h5>
                        <p>Deposit funds at your convenience and prepare to start trading.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>
                <!-- card 3 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/icons/7.png" alt="Enjoy Trading" class="setImg">
                        </div>
                        <h5 class="uk-margin-remove">Start Trading:</h5>
                        <p>Get access to the platform and trade confidently to pursue your financial goals.</p>
                        <!-- <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">More <i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a> -->
                    </div>
                </div>

            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
                <a href="#" class="uk-button uk-button-primary breathing mt-2 float-end">Sign Up <i
                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        </div>
       
    </div>
</section>
@endsection