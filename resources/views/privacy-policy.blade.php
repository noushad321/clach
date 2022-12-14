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
                            <a class="secondary-navigation__anchor link--secondary--highlight set--active link--secondary--static" href="{{url('privacy-policy')}}">PRIVACY POLICY</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/conditions-of-sale')}}">Conditions of Sale</a>
                        </li>
                    
                
                    
                    
                        <li class="secondary-navigation__item">
                            <a class="secondary-navigation__anchor link--secondary--highlight " href="{{url('/shipping-policy')}}">shipping policy</a>
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
        
            <h1 class="module-container__title heading-type component-copy__title--regular">Privacy policy</h1>
        

        
            <!-- <div class="module-container__description font-family--serif"><p><strong>Last updated: September 2020</strong></p></div> -->
        
    </div>



                    

<div class="cms-page__contents">
<p>Our information collection practices on the Platforms, such as the types of information we collect regarding visitors to the Platforms and the ways in which we may use that information, are governed by the terms of our Privacy Policy. In this Privacy Policy, we use the term CLACH (and ???<strong>we</strong>???, ???<strong>us</strong>??? and ???<strong>our</strong>???) to refer to the head office of CLACH at Address Office No N 417, North Tower Emirates Financial Towers<br>
DIFC</p>
<p>Please take a moment to read the following policy that explains how we collect, use, disclose and transfer the personal information that you provide to us on our websites, mobile applications, and other digital platforms (together referred to as the ???<strong>Platforms</strong>???).</p>
<p>The privacy of everyone is acknowledged by and respected by CLACH. This policy outlines how we will gather, use, manage, and safeguard your personal data. By giving us your personal information, such as your name, address, phone number, and email address, you are granting us permission to collect, use, and disclose that information in the ways described in this Privacy Policy. You are more than welcome to get in touch with us if you have any questions about our privacy policy.</p>
<p>UPDATES TO PRIVACY POLICY</p>
<p>From time to time we may update this Privacy Policy. When we do, we will publish the changes on this Platform.</p>
<p id="contactus" style="margin-bottom: 120px;">
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