@extends('master')
@section('contents')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- breadcrumb content begin -->
<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
    
<div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-1-2@m uk-text-center" style="margin-bottom: 30px;">
                    <p class="uk-text-lead uk-text-muted uk-margin-remove-bottom uk-text-center">FAQ</p>
                    <h2 class="uk-margin-small-top uk-text-center">Do you have any question</h2>
                </div>
                <div class="uk-width-1-1@m sdo_set">
                    <div class="uk-grid uk-child-width-1-1@m uk-margin-medium-top" style="margin-top: 5px !important;" data-uk-grid>
                        <div>
                            <ul class="in-faq-2" data-uk-accordion>
                                <li>                                
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                            <i class="fas fa-pencil-ruler fa-xs"></i> What is Forex?
                                        </div>
                                    </a>                                
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Forex, short for foreign exchange, refers to the global marketplace for buying and selling currencies. It's the largest and most liquid financial market in the world.</p>                                 
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-clearfix">
                                            <i class="fas fa-pencil-ruler fa-xs"></i> How does Forex trading work?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Forex trading involves exchanging one currency for another at an agreed-upon exchange rate. Traders speculate on the price movements of currency pairs, trying to profit from the fluctuations in exchange rates.</p>                                    
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i> What are currency pairs?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>In Forex trading, currencies are quoted in pairs, like EUR/USD or GBP/JPY. The first currency in the pair is the base currency, and the second is the quote currency. The exchange rate tells you how much of the quote currency you need to buy one unit of the base currency.</p>                                   
                                    </div>
                                </li>
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>What are technical and fundamental analysis in Forex?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Technical analysis involves studying price charts and using indicators to predict future price movements. Fundamental analysis, on the other hand, looks at economic and geopolitical factors to assess a currency's intrinsic value.</p>                                   
                                    </div>
                                </li> 
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>Who participates in the Forex market?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Participants include banks, financial institutions, governments, corporations, and individual retail traders. Central banks also play a significant role by setting interest rates and implementing monetary policies.</p>                                   
                                    </div>
                                </li>  
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>What is a pip?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>A pip (percentage in point) is the smallest price move that a given exchange rate can make. It's typically the last decimal place in currency quotes. For most currency pairs, one pip is equal to 0.0001, but this can vary.</p>                                   
                                    </div>
                                </li>    
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>What is leverage in Forex trading?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Leverage allows traders to control a larger position size with a relatively small amount of capital. It magnifies both potential profits and losses. It's crucial to use leverage cautiously and understand the risks involved.</p>                                   
                                    </div>
                                </li>    
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>What are the risks of Forex trading?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Forex trading is highly leveraged and involves significant risk. Market volatility can result in substantial losses. Traders should be aware of these risks and use risk management techniques like stop-loss orders.</p>                                   
                                    </div>
                                </li>    
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>Is Forex trading suitable for everyone?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Forex trading can be lucrative, but it's not suitable for everyone. It requires a good understanding of the market, risk management skills, and discipline. Many traders experience losses, so it's essential to only invest what you can afford to lose.</p>                                   
                                    </div>
                                </li>    
                                <li>
                                    <a class="uk-accordion-title" href="#">
                                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <i class="fas fa-pencil-ruler fa-xs"></i>What are some common trading strategies?
                                        </div>
                                    </a>
                                    <div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
                                        <p>Common Forex trading strategies include day trading, swing trading, scalping, and carry trading. Each strategy has its own set of rules and timeframes.</p>                                   
                                    </div>
                                </li>    
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection