@extends('master')
@section('contents')
<style>
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
        /* Ensures the image fills the width */
        height: 400px;
        /* Ensures the image fills the height */
        object-fit: cover;
        /* Crops the image to fit the container */
        display: block;
        /* Removes the extra space below the image */
        border-radius: 8px;
        /* Optional: rounded corners */

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
</style>
<link rel="stylesheet" href="{{ asset('') }}teccss/tec-style.css">
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb">
                    <li><a href="#">Forex</a></li>
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
                <h1>Forex</h1>
                <p style="line-height: 1.6;">Trade Forex seamlessly with Arbitrage Prime Limited, where our advanced
                    platform provides the tools, insights, and flexibility needed to capitalize on the world’s largest
                    financial market.</p>
                <h6>Trade with Major Currencies like:</h6>
                <button type="button" class="uk-button uk-button-primary breathing" id="button-euro">Euro</button>
                <button type="button" class="uk-button uk-button-primary breathing" id="button-pound">Great Britain Pound</button> <br />
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-dollor">U.S Dollar</button>
                <button type="button" class="uk-button uk-button-primary breathing mt-2" id="button-yen">Japanese Yen</button>
            </div>
            <div class="col-lg-6">
                <!-- <img class="res" src="{{ asset('') }}images/symbol/9.png"> -->
                <div class="uk-grid-large uk-child-width-1-2@s uk-grid-match" uk-grid>
                    <div>                     
                        <img src="{{ asset('') }}images/symbol/9.png" alt="Image 1" id="image-euro" class="breathing-img">
                    </div>
                    <div>                        
                        <img src="{{ asset('') }}images/symbol/10.png" alt="Image 2" id="image-pound" class="breathing-img">
                    </div>
                    <div>                        
                        <img src="{{ asset('') }}images/symbol/11.png" alt="Image 3" id="image-dollor" class="breathing-img" style="margin-top: -165px;">
                    </div>
                    <div>                      
                        <img src="{{ asset('') }}images/symbol/12.png" alt="Image 4" id="image-yen" class="breathing-img" style="margin-top: -165px;">
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
    <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12"><h1 align="center">Get Started in 3 Simple Steps</h1><br><br></div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico8.png">
                    <span>Login & Open Your Account</span>
                    <p>Complete the formalities, register & verify your account.</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico9.png">
                    <span>Deposit your Funds</span>
                    <p>Add the funds in your capacity, get ready for the final stage</p>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="designs">
                    <img src="{{ asset('') }}images/ico10.png">
                    <span>Enjoy Trading</span>
                    <p>Reap the benefits & trade smart to enjoy profits</p>
                 </div>
                </div>
            </div>
        </div> -->

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