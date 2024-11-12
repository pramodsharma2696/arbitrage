@extends('master')
@section('contents')
<style>
    @media (max-width: 640px) {
        .designs {
            height: 423px !important;
            margin-top: 20px;
        }

    }
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
                <img class="res" src="{{ asset('') }}images/1st-4.png">
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
                    <img style="width:130px;" src="{{ asset('') }}acc/2.png">
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
                    <img style="width:130px;" src="{{ asset('') }}acc/1.png">
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

@endsection