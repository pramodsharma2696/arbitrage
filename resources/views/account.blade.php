@extends('master')
@section('contents')
<style>
    @media (max-width: 640px) {
        .designs {
            height: auto !important; /* Adjust height for mobile */
            margin-top: 20px;
            padding: 20px; /* Add padding for better spacing */
        }

        /* Adjust the image to fit better on smaller screens */
        .designs img {
            width: 100px; /* Reduce the image size */
            margin-bottom: 15px;
        }

        /* Center the text */
        .designs span {
            display: block;
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Adjust the list */
        .uk-list {
            padding-left: 55px !important; /* Adjust padding for the list on small screens */
        }

        /* Adjust font size for the list items */
        .uk-list li {
            font-size: 14px; /* Reduce font size */
            margin-bottom: 10px; /* Add some space between items */
        }

        /* Adjust the button */
        .uk-button {
            width: 100%; /* Make the button full-width on mobile */
            text-align: center;
        }
    }

    /* General styling for all screen sizes */
    .designs {
        box-shadow: none;
        padding: 20px;
    }

    /* Desktop styles for the account section */
    @media (min-width: 641px) {
        .designs img {
            width: 130px; /* Image size for desktop */
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
                    <li><a href="#">Account</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb content end -->

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6"><br><br>
                <h1>Flexible Accounts, Premium Experience</h1><br><br>
                <p style="line-height: 1.6;">Our account types at Arbitrage Prime Limited offer unparalleled flexibility
                    and a rich trading experience. Whether you’re entering the market for the first time or refining a
                    seasoned strategy, our accounts are built to offer deep liquidity, rapid execution, and the
                    sophisticated tools that make every trading moment worthwhile.</p>
            </div>
            <div class="col-lg-6">
                <img class="res" src="{{ asset('') }}images/acc_desktop.png">
            </div>
        </div>
    </div>
</section>

<section class="sec_add_w">
    <div class="container">
        <div class="row justify-content-center" id="std_account">
            <div class="col-lg-12">
                <h1 style="text-align:center">Discover our Account Types</h1><br>
                <br>
            </div>
            <div class="col-lg-6">
                <div class="designs" style="box-shadow:none">
                    <img style="width:215px;" src="{{ asset('') }}acc/2.png">
                    <p style="text-align:center;">Perfect for traders seeking
                        versatility and flexibility, the
                        Standard Account offers a
                        dynamic trading experience
                        on our powerful platform.
                        Tailored for both novice and
                        experienced traders, this
                        account lets you explore and
                        execute diverse strategies
                        with ease, supported by a
                        rich toolkit and high-level
                        liquidity access.</p>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="designs" style="border-radius: 5%;">
                    <span>Standard Account</span>
                    <ul class="uk-list" style="padding-left: 155px;">
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Metatrader 5
                            platform
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Leverage up to
                            500:1
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> 200+ currency pairs
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Major indices
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> One-click Trading
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> All trading styles
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Expert advisors
                            allowed
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Hedging allowed
                        </li>
                    </ul>
                    <a href="#" class="uk-button uk-button-primary">Sign up<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>

            </div>

        </div>

        <div class="row justify-content-center mt-3" id="prime_account">

            <div class="col-lg-6">
                <div class="designs" style="box-shadow:none">
                    <img style="width:215px;" src="{{ asset('') }}acc/1.png">
                    <p style="text-align:center;">
                        The Prime Account provides
                        a refined trading environment
                        for those seeking enhanced
                        stability and precision. With
                        premium features designed
                        to support advanced
                        strategies, this account type
                        offers an enriched trading
                        experience ideal for traders
                        looking for high performance
                        and expert-grade resources.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="designs" style="border-radius: 5%;">
                    <span>Prime Account</span>
                    <ul class="uk-list" style="padding-left: 155px;">
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Metatrader 5 platform
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Leverage up to 200:1
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> 200+ currency pairs
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Major indices
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> One-click Trading
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> All trading styles
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Expert advisors
                            allowed
                        </li>
                        <li style="display: flex; align-items: center;">
                            <i class="fa fa-check" style="margin-right: 10px; min-width: 20px;"></i> Hedging allowed
                        </li>
                    </ul>
                    <a href="#" class="uk-button uk-button-primary">Sign up<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
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
