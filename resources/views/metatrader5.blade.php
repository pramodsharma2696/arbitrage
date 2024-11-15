@extends('master')
@section('contents')
<style>
.icon-img{
    margin-top: -344px !important;
    margin-left: 337px !important;;
}
.apps-icon {
    width: 165px !important;
    height: 50px !important;
}
.setImg {
        width: 181px;
        margin-top: -74px;
        margin-bottom: -45px;
    }
    .card-body{
        margin-left: 17px;
    }
    .img-fluid{
        margin-left: -40px;
        max-width: 330px !important;
        margin:-60px auto;
    }

    @media (max-width: 640px) {
        .icon-img{
            margin-top: -200px !important;
            margin-left: 156px !important;
            margin-bottom: 82px;
        }
        .m-btm{
            margin-bottom: -220px;
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

                <p>With MetaQuotes as our trusted technology partner, we’re
                    committed to providing a superior trading experience.
                </p>
                <p>Through our partnership, we bring you cutting-edge tools, reliable
                    performance, and intuitive features, all designed to help you trade
                    with confidence and efficiency.</p>

            </div>
            <div class="col-lg-6">
                <img class="res" src="{{ asset('') }}images/icons/metatrader/11.png" style="width: 570px;height: auto;">
            </div>
        </div>
    </div>
</section>

<section class="bg_add" id="our_brand" style="padding: 0 !important;">
    <div class="uk-grid" uk-grid>
        <!-- card 1 -->
        <div class="uk-width-1-2@m uk-width-1-1 p-0 m-btm">
            <img src="{{ asset('') }}images/icons/metatrader/12.png" alt="Premium Economic Calendar" class="uk-width-1-1">
        </div>
        <!-- card 2 -->
        <div class="uk-width-1-2@m uk-width-1-1 p-0">
            <!-- Use a container to wrap the image and buttons -->
            <div>
                <img src="{{ asset('') }}images/icons/metatrader/13.png" alt="Technical Views" class="uk-width-1-1 uk-margin-bottom">
                <div class="uk-margin-top icon-img">
                    <div class="uk-flex uk-flex-left uk-gap-small">
                        <a href="javascript:void(0);">
                            <img src="http://arbitrage.test/img/in-app-store.svg" alt="App Store" width="150" height="30" class="apps-icon">
                        </a>
                        <a href="javascript:void(0);">
                            <img src="http://arbitrage.test/img/in-google-play.svg" alt="Google Play" width="150" height="30" class="apps-icon" style="margin-left: 15px;">
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
                    <img src="{{ asset('') }}images/icons/metatrader/14.png" alt="Login & Open Your Account" class="img-fluid">
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
                    <img src="{{ asset('') }}images/icons/metatrader/17.png" alt="Fast Trade Execution" class="img-fluid">
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
                    <img src="{{ asset('') }}images/icons/metatrader/19.png" alt="Customizable Interface" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Customizable Interface</h5>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col">
                <div class="card border-0">
                    <img src="{{ asset('') }}images/icons/metatrader/20.png" alt="Cross-Device Compatibility" class="img-fluid">
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

@endsection