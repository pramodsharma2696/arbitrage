@extends('master')
@section('contents')
<style>
    @media (max-width: 640px) {
        .m-top {
            margin-top: -220px !important;
        }
        .breathing-img {
        height:auto !important;
        }
        .m-top-size {
            margin-top:-220px !important;
        }
        .col-lg-6,.col-lg-5 {
            padding-left: 15px;
            padding-right: 15px;
            text-align: center;
        }
    }

    .m-top {
        margin-top: -130px;
    }

    .uk-card-radius {
        border-radius: 50%;
    }

    .breathing {
        display: inline-block;
        background: linear-gradient(335deg, #e5be4e, #efdd95, #a98726);
        color: #000000;
        padding: 0px 45px 0px 45px;
        border-radius: 25px;
        font-size: 18px;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .breathing-img {
        cursor: pointer;
        transition: transform 0.3s ease;
        width: 100%;
        /* Makes image take the full width of its container */
        height: 240px;
        /* Makes image take the full height of its container */
        object-fit: cover;
        /* Ensures image covers container while maintaining aspect ratio */
        display: block;
        border-radius: 8px;
    }

    /* Hover state to trigger breathing animation */
    .breathing:hover {
        animation: breathe 1.5s ease-in-out infinite;
    }

    .breathing-img:hover {
        animation: breathe-img 1.5s ease-in-out infinite;
    }
    .breathe-img-animation {
    animation: breathe-img 1.5s ease-in-out infinite;
}

    /* Keyframes for button breathing animation */
    @keyframes breathe {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Keyframes for image breathing animation */
    @keyframes breathe-img {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Optional: Ensure grid items have a fixed height */
    .grid-item {
        height: 200px;
        /* Adjust height as needed */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        /* Ensures overflow content is hidden */
    }
    
    /* common content css start  */
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
                    <li><a href="#">Commodities</a></li>
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
                <h1>Commodities CFD’s</h1>
                <p style="line-height: 1.6;">Trade a broad range of commodities on our platform, from
                    precious metals to energy resources and agricultural products.
                    Access opportunities in popular markets and diversify your
                    portfolio with essential commodities CFDs.
                </p>
                <h6>Trade with Popular Commodities CFD’s : </h6>
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-gold">Gold</button>
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-silver">Silver</button><br />
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-wheat">Wheat</button> 
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-crude-oil">Crude Oil </button><br />
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-palladium">Palladium</button>

            </div>
            <div class="col-lg-6">

                <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
                    <div>
                        <img src="{{ asset('') }}images/symbol/13.png" alt="Image 1" class="breathing-img" id="image-gold">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/16.png" alt="Image 4" class="breathing-img m-top-size" id="image-silver">
                    </div>
                   
                    <div>
                        <img src="{{ asset('') }}images/symbol/17.png" alt="Image 5" class="breathing-img m-top-size" id="image-wheat">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/14.png" alt="Image 2" class="breathing-img m-top" id="image-crude-oil">
                    </div>
                    
                    <div>
                        <img src="{{ asset('') }}images/symbol/15.png" alt="Image 3" class="breathing-img m-top" id="image-palladium">
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

<section class="sec_add_w">

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
                <a href="https://client.arbitrageprime.com/register" target="_blank" class="uk-button uk-button-primary breathing mt-2 float-end">Sign Up <i
                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
        </div>
    </div>
    
</section>
@endsection