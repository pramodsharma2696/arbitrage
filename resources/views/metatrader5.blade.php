@extends('master')
@section('contents')
<style>
    .icon-img {
        margin-top: -344px !important;
        margin-left: 337px !important;
    }

    .apps-icon {
        width: 165px !important;
        height: 50px !important;
        margin-top: 125px;
    }

    .setImg {
        width: 181px;
        margin-top: -74px;
        margin-bottom: -45px;
    }

    .card-body {
        margin-left: 17px;
    }

    .img-fluid {
        margin-left: -40px;
        max-width: 330px !important;
        margin: -60px auto;
    }

    @media (max-width: 640px) {
        .icon-img {
            margin-top: -134px !important;
            margin-left: 39px !important;
            margin-bottom: 82px;
        }

        .m-btm {
            margin-bottom: -220px;
        }
    }

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

        .setSize13{
            margin-left: 14px !important;
            width: 100% !important;
            margin-top: 20px !important;
            margin-bottom: -80px;
        }
        .setSize12{
            margin-left: 9px !important;
            width: 100% !important;
            margin-bottom: 44px !important;
        }
        .apps-icon {
            width: 142px !important;
            height: 50px !important;
            margin-top: 41px;
            margin-left: 20px;
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
    .setSize13{
        padding: 100px;
        margin-left: 68px;
        width: 85%;
        margin-top: -50px;
    }
    .setSize12{
        padding: 100px;
        margin-left: 139px;
        width: 85%;
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
                    <li><a href="#">MetaTrader5</a></li>
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
                <h2>Together with <span style="color:#DCBA62">MetaQuotes,</span> we bring
                    the Best Trading Experience to our Users.</h2>

                <p style="font-weight: 600;">With MetaQuotes as our trusted technology partner, we’re
                    committed to providing a superior trading experience.
                </p>
                <p style="font-weight: 600;">Through our partnership, we bring you cutting-edge tools, reliable
                    performance, and intuitive features, all designed to help you trade
                    with confidence and efficiency.</p>

            </div>
            <div class="col-lg-6">
                <img class="res" src="{{ asset('') }}images/icons/metatrader/11.png" style="width: 570px;height: auto;margin-top: -62px;">
            </div>
        </div>
    </div>
</section>

<section class="bg_add" id="our_brand" style="padding: 0 !important;">
    <div class="uk-grid" uk-grid>
        <!-- card 1 -->
        <div class="uk-width-1-2@m uk-width-1-1 p-0 m-btm">
            <img src="{{ asset('') }}images/icons/metatrader/12.png" alt="Premium Economic Calendar"
                class="uk-width-1-1 setSize12">
        </div>
        <!-- card 2 -->
        <div class="uk-width-1-2@m uk-width-1-1 p-0">
            <!-- Use a container to wrap the image and buttons -->
            <div>
                <img src="{{ asset('') }}images/icons/metatrader/13.png" alt="Technical Views"
                    class="uk-width-1-1 uk-margin-bottom setSize13">
                <div class="uk-margin-top icon-img">
                    <div class="uk-flex uk-flex-left uk-gap-small">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('') }}img/in-app-store.svg" alt="App Store" width="150" height="30"
                                class="apps-icon">
                        </a>
                        <a href="javascript:void(0);">
                            <img src="{{ asset('') }}img/in-google-play.svg" alt="Google Play" width="150" height="30"
                                class="apps-icon" style="margin-left: 15px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="sec_add_w" id="3step">
    <div class="container">
        <div class="text-center mb-5">
            <h3>Trade on the Go with<span style="color:#DCBA62">MetaTrader 5:</span></h3>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center" data-aos="fade-up" data-aos-duration="3000">
            <!-- Card 1 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/14.png" alt="Login & Open Your Account"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Charting and Analysis</h5>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/15.png" alt="Deposit your Funds" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Multiple Order Types</h5>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/16.png" alt="Enjoy Trading" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Fast Trade Execution</h5>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/17.png" alt="Fast Trade Execution"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Fast Trade Execution</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center" data-aos="fade-up" data-aos-duration="3000">
            <!-- Card 5 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/18.png" alt="Robust Security" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Robust Security</h5>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/19.png" alt="Customizable Interface"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Customizable Interface</h5>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/20.png" alt="Cross-Device Compatibility"
                        class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Cross-Device Compatibility</h5>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/21.png" alt="One-Click Trading" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">One-Click Trading</h5>
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
                    <a href="#" class="uk-button uk-button-primary breathing mt-2 float-end">Sign Up <i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection