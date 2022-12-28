@extends('layouts.user.guest')
@section('content')
@push('styles')
<link href="{{ asset('css/searchMain.css') }}" rel="stylesheet">
<style>
    p{
        padding-bottom: 10px;
        padding-top: 10px;
    }
</style>
@endpush
<main id="main" class="main" role="main">

    <!-- dwMarker="folder" dwContentID="f49369b60d66d4ac5e2babdce4" -->
    

    <div class="cms-page--group max-width--large gutter--small-up-normal">
        <div class="row">
            <div class="col-12 col-md-3">
                
    <div class="fixit-container flex-grow-1">
        <div class="fixit-placeholder" style=""></div><nav class="secondary-navigation fixit-element fixit--respond-to-parent" style="">
            <p class="secondary-navigation__title font-weight--semibold display--small-up">
            LEGAL &amp; PRIVACY


            </p>

            <button type="button" class="secondary-navigation__trigger display--small-only" title="LEGAL &amp; PRIVACY" id="toggleID-1040" aria-expanded="false" aria-controls="toggleID-1040--target">
                LEGAL &amp; PRIVACY

                <svg aria-hidden="true" focusable="false" class="secondary-navigation__trigger-icon icon"><use xlink:href="#icon--angle-down"></use></svg>
            </button>

            <ul class="secondary-navigation__list list--reset" id="toggleID-1040--target" aria-labelledby="toggleID-1040">
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('terms-of-use')}}">Terms of Use</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight" href="{{url('privacy-policy')}}">PRIVACY POLICY</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/conditions-of-sale')}}">Conditions of Sale</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/shipping-policy')}}">shipping policy</a>
                        </li>
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight  set--active link--secondary--static" href="{{url('/refund-policy')}}">Exchange policy</a>
                        </li>
                    
                
                    
                    
                
            </ul>
        </nav>
    </div>


            </div>

            <div class="col-12 col-md-9 col-lg-8">
                <div class="gutter--small-only-normal">
                    
    <div class="module-container__header  text-align--left" data-motion="opacity from-bottom">
        
            <h1 class="module-container__title heading-type component-copy__title--regular">Exchange policy</h1>
        

        
            <!-- <div class="module-container__description font-family--serif"><p><strong>Last updated: September 2020</strong></p></div> -->
        
    </div>



                    

<div class="cms-page__contents">
    <p>
You may return a product purchased through the Sales Channels for refund, provided that the return complies with these Conditions of Sale and with the Return Process above.
    </p>
    <p>
Only the buyer will be entitled to receive a refund of the purchase price. In no event will a person who has received the product as a gift (i.e. a “Gift Recipient”) be entitled to receive a refund. If you are a Gift Recipient and wish to return a product, please contact the Client Relations Center to discuss your options.
    </p><p>
If the return complies with these Conditions of Sale, we will use commercially reasonable endeavors to refund the purchase price for the initial transaction to the buyer using the most appropriate means of payment n within fourteen (14) days after receipt of the returned item by the CLACHe-boutique distribution center. For the avoidance of doubt it shall be in our sole discretion as to how to fulfil a refund to you and we may request you accept merchandise credit. Initial shipping charges will be refunded, except where you had originally opted for a non-standard delivery, in which cases the supplemental costs will be non-refundable.
</p>
</div>


                    
                </div>
            </div>
        </div>

        



    <div class="cms-page__footer row">
        
            
        
    </div>



        <!-- END_dwmarker -->
    </div>

</main>



@endsection