@extends('master')
@section('contents')
<style>
    @media (max-width: 640px) {
        .m-top {
            margin-top: 0px !important;
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
        background-color: #d4af37;
        color: #000000;
        border-radius: 10px;
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
                <button type="button" class="uk-button uk-button-primary breathing" id="button-gold">Gold</button>
                <button type="button" class="uk-button uk-button-primary breathing" id="button-silver">Silver</button>
                <button type="button" class="uk-button uk-button-primary breathing" id="button-wheat">Wheat</button> <br />
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-crude-oil">Crude Oil </button>
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-palladium">Palladium</button>

            </div>
            <div class="col-lg-6">

                <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
                    <div>
                        <img src="{{ asset('') }}images/symbol/13.png" alt="Image 1" class="breathing-img" id="image-gold">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/14.png" alt="Image 2" class="breathing-img" id="image-crude-oil">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/15.png" alt="Image 3" class="breathing-img" id="image-palladium">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/16.png" alt="Image 4" class="breathing-img m-top" id="image-silver">
                    </div>
                    <div>
                        <img src="{{ asset('') }}images/symbol/17.png" alt="Image 5" class="breathing-img m-top" id="image-wheat">
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section class="sec_add_w" style="display:none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="designs">
                    <img src="{{ asset('') }}images/ico1.png">
                    <span>Most Liquid Market</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="designs">
                    <img src="{{ asset('') }}images/ico2.png">
                    <span>Long or short, Both Trades</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="designs">
                    <img src="{{ asset('') }}images/ico3.png">
                    <span>Tight spreads</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec_add_w" style="display:none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h1 align="left">Why Arbitrage?</h1><br>
                <img class="res" src="{{ asset('') }}images/Forex-GIF-2-min.gif">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <br><br><br><br>
                <!-- <div class="list_add"><img src="{{ asset('') }}images/ico4.png"> Regulated Broker</div> -->
                <div class="list_add"><img src="{{ asset('') }}images/ico5.png"> Multilingual Support</div>
                <div class="list_add"><img src="{{ asset('') }}images/ico6.png"> Optimum Client Service</div>
                <div class="list_add"><img src="{{ asset('') }}images/ico7.png"> Experts in the Industry</div>
            </div>

        </div>
    </div>
</section>

<section class="sec_add_w">

    <div class="uk-section uk-preserve-color in-equity-1">
        <div class="uk-container">
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-bottom"
                data-aos="fade-up" data-aos-duration="3000" data-uk-grid>
                <!-- card 1 -->
                <div>
                    <div class="uk-card uk-card-body uk-card-muted uk-border-rounded">
                        <div class="uk-flex">
                            <img src="{{ asset('') }}images/ico8.png" alt="Login & Open Your Account" width="50"
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
                            <img src="{{ asset('') }}images/ico9.png" alt="Deposit your Funds" width="50" height="50"
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
                            <img src="{{ asset('') }}images/ico10.png" alt="Enjoy Trading" width="50" height="50"
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