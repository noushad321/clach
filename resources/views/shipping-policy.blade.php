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
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('privacy-policy')}}">PRIVACY POLICY</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/conditions-of-sale')}}">Conditions of Sale</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight set--active link--secondary--static" href="{{url('/shipping-policy')}}">shipping policy</a>
                        </li>
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/refund-policy')}}">Exchange policy</a>
                        </li>
                    
                
                    
                    
                
            </ul>
        </nav>
    </div>


            </div>

            <div class="col-12 col-md-9 col-lg-8">
                <div class="gutter--small-only-normal">
                    
    <div class="module-container__header  text-align--left" data-motion="opacity from-bottom">
        
            <h1 class="module-container__title heading-type component-copy__title--regular">Shipping Policy</h1>
        

        
            <!-- <div class="module-container__description font-family--serif"><p><strong>Last updated: September 2020</strong></p></div> -->
        
    </div>



                    

<div class="cms-page__contents">

We only accept orders for delivery to the country or countries that are identified during the Order Process. Please note that we do not ship to certain addresses, such as military, certain restricted areas, pick-up points, or PO boxes. For further information, please contact the Client Relations Center.

If you order several products, we will ship the order only once all products are available (there will be no partial shipments, unless otherwise communicated to you).</div>


                    
                </div>
            </div>
        </div>

        



    <div class="cms-page__footer row">
        
            
        
    </div>



        <!-- END_dwmarker -->
    </div>

</main>



@endsection