<style>
    ul.social {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex; /* Use flexbox to display items horizontally */
        align-items: center; /* Center items vertically */
        gap: 0.375rem; /* Space between icons */
    }

    ul.social li {
        /* No additional styles needed for list items when using flexbox */
    }

    ul.social li a {
        width: 2.5rem;
        height: 2.5rem;
        /* background: #777777; */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease-in-out;
    }

    img.footer-logo {
        max-width:65px !important;
    height: 65px !important;
}

    ul.social li a:hover {
        background-color: rgb(24 24 24) /* Hover effect color */
    }
</style>


<footer style="background-color:rgb(24, 24, 24); color: white; padding-top: 20px;">
    <div class="uk-section uk-padding-remove">
        <div class="uk-container" style="padding: 0 10px;">
            <div class="uk-grid uk-grid-large">
                <div class="uk-width-1-1@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-remove-top" data-uk-grid="">
                        <!-- Logo and Mission Section -->
                        <div style="padding: 30px;">
                            <img src="{{ asset('') }}img/user/header-logo.svg" alt="logo" width="146" height="40">
                            <p class="uk-margin-small-top">
                                Arbitrage Prime Limited mission is to create the best trading experience for retail and institutional clients alike, allowing traders to focus more on their trading. 
                                Built by traders for traders, Arbitrage Prime Limited is dedicated to offering superior spreads, execution, and service. 
                            </p>
                            <!-- Social Media Icons -->
                            <ul class="social" style="list-style: none; padding: 0; margin: 20px 0;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                               
                                <li style="display: inline; margin-right: 10px;">
                                    <a id="footer_logo_twitter_1" class="footer-logo-social-icon twitter" href="https://x.com/arbitrageprime" target="_blank">
                                        <img class="img-fluid footer-logo" src="{{ asset('') }}forexdata/icon/twitter.png" alt="Twitter">
                                    </a>
                                </li>
                                <li style="display: inline; margin-right: 10px;">
                                    <a id="footer_logo_instagram_1" class="footer-logo-social-icon instagram" href="https://www.instagram.com/arbitrageprime/" target="_blank">
                                        <img class="img-fluid footer-logo" src="{{ asset('') }}forexdata/icon/instagram.png" alt="Instagram">
                                    </a>
                                </li>
                                <li style="display: inline;">
                                    <a id="footer_logo_linkedin_1" class="footer-logo-social-icon youtube" href="https://www.youtube.com/@arbitrageprime" target="_blank">
                                        <img class="img-fluid footer-logo" src="{{ asset('') }}forexdata/icon/youtube.png" alt="Youtube">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Instruments Section -->
                        <div style="padding: 30px;">
                            <h5 style="color: white;">Forex Trading</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ url('forex') }}">Forex</a></li>
                                <li><a href="{{ url('equities') }}">Equities</a></li>
                                <li><a href="{{ url('indices') }}">Indices</a></li>
                                <li><a href="{{ url('commodities') }}">Commodities</a></li>
                            </ul>
                        </div>
                        <!-- Accounts Type Section -->
                        <div style="padding: 30px;">
                            <h5 style="color: white;">Accounts Type</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ url('account') }}">Standard</a></li>
                                <li><a href="{{ url('account') }}">Joint Accounts</a></li>
                                <li><a href="{{ url('account') }}">Corporate Accounts</a></li>
                                <li><a href="{{ url('account') }}">Islamic</a></li>
                            </ul>
                        </div>
                        <!-- Company Section -->
                        <div style="padding: 30px;">
                            <h5 style="color: white;">Company</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ url('about-us') }}#about_company">About Company</a></li>
                                <li><a href="{{ url('about-us') }}#our_brand">Our Brand Values</a></li>
                                <li><a href="{{ url('about-us') }}#3step">3 Step Process</a></li>
                                <li><a href="{{ url('contact-us') }}#3step">Contact</a></li>
                                <li><a href="{{ url('FAQ') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="uk-width-1-1">
                <p class="in-trading-risk">Email:  <a href="mailto:support@arbitrageprime.com" style="color: #fff">support@arbitrageprime.com</a></p>
            </div>
            <hr class="uk-margin-large" style="border-color: #f8f9fa;">
            <div>
                <p>
                    <b>Risk Disclaimer:</b> An investment in derivatives may mean investors may lose an amount even greater than their original investment. Anyone wishing to invest in any of the products mentioned in Arbitrage Prime Limited
                     should seek their own financial or professional advice. Trading of securities, forex, stock market, commodities, options and futures may not be suitable for everyone and involves the risk 
                    of losing part or all of your money. Trading in the financial markets has large potential rewards, but also large potential risk. You must be aware of the risks and be willing to accept them in order
                     to invest in the markets. Don't invest and trade with money which you can't afford to lose. Forex Trading are not allowed in some countries, before investing your money, make sure whether
                     your country is allowing this or not. <br><br>
                     You are strongly advised to obtain independent financial, legal and tax advice before proceeding with any currency or spot metals trade.
                     Nothing in this site should be read or construed as constituting advice on the part of Arbitrage Prime Limited or any of its affiliates, directors, officers or employees.
                </p>

                <p>
                    <b>Restricted Regions:</b> Arbitrage Prime Limited does not provide services for citizens/residents of the United States, Cuba, Iraq, Myanmar, North Korea, Sudan. The services of Arbitrage Prime Limited are not intended for distribution to, or use by, any person in any country or jurisdiction where such distribution or use would be contrary to local law or regulation.
                </p>
                <p>
                    <b>OR</b>
                </p>
                <p>
                    <i>Information on this site is not directed at residents in any country or jurisdiction where such distribution or use would be contrary to local law or regulation</i>
                </p>

            </div>
            
            
            <hr class="uk-margin-small" style="border-color: #f8f9fa;">
            <p class="in-trading-risk">Arbitrage Prime Ltd is incorporated under the laws of Saint Lucia with registration number 2024-00526. The registered address is Ground Floor, The Sotheby Building, Rodney Village, Rodney Bay, Gros-Islet, Saint Lucia.<br></p>
            <p class="in-trading-risk">Physical Address: Parklane tower, 3209, Businessbay, Dubai.<br></p>
            
            <hr class="uk-margin-large" style="border-color: #f8f9fa;">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-2-3@m uk-text-small">
                        <ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin="" style="display: none;">
                            <li><a href="#">Risk disclosure</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Return policy</a></li>
                            <li><a href="#">Customer Agreement</a></li>
                            <li><a href="#">AML policy</a></li>
                        </ul>
                        <p class="copyright-text">©2024 Arbitrage Prime Limited. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
