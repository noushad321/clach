@extends('layouts.user.guest')
@section('content')

<!-- @push('styles')
    <link href="{{ asset('css/flex-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scaffold.css') }}" rel="stylesheet">

@endpush -->
<main id="main" class="main" role="main">
















































    <!-- CQuotient Activity Tracking (viewProduct-cquotient.js) -->
    <script type="text/javascript">
        //<!--
        /* <![CDATA[ */
        (function() {
            try {
                if (window.CQuotient) {
                    var cq_params = {};
                    cq_params.product = {
                        id: 'B6067517',
                        sku: '',
                        type: '',
                        alt_id: ''
                    };
                    cq_params.realm = "BFHP";
                    cq_params.siteId = "CartierUAE";
                    cq_params.instanceType = "prd";
                    window.CQuotient.trackViewProduct(cq_params);
                }
            } catch (err) {}
        })();
        /* ]]> */
        // -->
    </script>
    <script type="text/javascript">
        //<!--
        /* <![CDATA[ (viewProduct-active_data.js) */
        dw.ac._capture({
            id: "B6067517",
            type: "detail"
        });
        /* ]]> */
        // -->
    </script>
    <div class="pdp set--page-motion-ready" itemscope="" itemtype="http://schema.org/Product" data-page-motion="">
        <div class="pdp-main max-width--large set--removed-wishlist" data-product-container="pdp" data-pid="CRB6067515" data-product-querystring="dwvar_B6067517_size=15&amp;pid=B6067517&amp;quantity=1">

            <!-- dwMarker="product" dwContentID="5d390e3010d785d9f47e31534d" -->

            <div class="row flex-no-gutters">
                <!-- Product Images Carousel -->
                <div class="col-12 col-md-7">
                    <div class="pdp-main__media">
                        <!-- Breadcrumbs -->
                        <div class="pdp-main__breadcrumbs">

                            <ol class="breadcrumbs body-type--centi list--reset">
                                @foreach(request()->route()->parameters as $breadcrumbs)
                                @if(count(request()->route()->parameters)-1 > $loop->index )
                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="{{url('/items')}}" title="Home">{{$breadcrumbs}}</a>

                                    @if(count(request()->route()->parameters)-2 > $loop->index )
                                    <span class="breadcrumbs__separator">/</span>
                                    @endif

                                </li>
                                @endif
                                @endforeach


                            </ol>
                        </div>





                        <div class="product-gallery__wrapper">
                            <!-- Novelty Badge-->

                            <p class="product-badge--novelty">
                                MUST HAVE
                            </p>

                            <ul id="pdpCarousel-B6067517" class="product-gallery product-gallery--pdp slider--sm-pre-layout-1 slider--arrows-inner slider--arrows-center slider--dots-inner list--reset slider--flex slider--row" data-product-component="image-gallery" aria-label="Product Main Images" data-carousel-config="{&quot;type&quot;: &quot;pdpCarousel&quot;}">


































                                @foreach($product->multimedia as $multimedia)

                                <li class="product-gallery__col col-12 {{$loop->index!=0 ?  'col-md-6' : ''}}" aria-hidden="true" role="tabpanel" id="slick-slide260">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($multimedia->source_path)) }}" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="0" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                @endforeach


                                <!-- <li class="product-gallery__col col-12" style="" aria-hidden="true" role="tabpanel" id="slick-slide260">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw4ea4ef0c/images/large/637925972888407302-2365438.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="0" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide261">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw9880d50a/images/large/637908492718175507-2365447.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="1" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide262">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw9e534aa0/images/large/637908492718175507-2365427.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="2" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide263">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dwe39ab714/images/large/637908492718175507-2365426.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="3" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide264">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw688fa655/images/large/637908492718175507-2365448.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="4" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide265">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw4d687ad0/images/large/637908492718175507-2365486.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="5" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide266">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dwfdbe37ce/images/large/637908492718175507-2365469.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="6" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide267">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw14d4c2a8/images/large/637919643786136538-2159771.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="7" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li>
                                <li class="product-gallery__col col-12 col-md-6" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide268">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-1" type="button" data-product-component="zoom-trigger" tabindex="-1">
                                        <img src="https://www.cartier.com/dw/image/v2/BFHP_PRD/on/demandware.static/-/Sites-cartier-master/default/dw48471015/images/large/637919643786136538-2159773.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" width="750" height="750" class="product-gallery__img component-overlay component-overlay--center object-fit--contain full-stretch-image" data-product-component="image" data-image-index="8" alt="#LOVE# bracelet" itemprop="image" title="#LOVE# bracelet">
                                    </button>
                                </li> -->
                            </ul>

                            <div class="hidden">
                                <li class="product-gallery__col col-12 col-md-6" data-product-component="gallery-item" data-image-template="image-gallery">
                                    <button class="product-gallery__item aspect-ratio--square set--w-100 bg--grey-1" type="button" data-product-component="zoom-trigger">
                                        <img class="product-gallery__img component-overlay component-overlay--center object-fit--contain" data-product-component="image" data-image-index="" alt="" itemprop="image">
                                    </button>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="fixit-container col-12 col-md-5">
                    <div class="fixit-placeholder"></div>
                    <div class="my-header sticky pdp-main__details flex flex-direction-col flex-align-center gutter--normal fixit-element fixit--respond-to-parent fixit--is-tall fixit--active" style="top: 154px; width: 600px;">
                        <div class="pdp-main__section pdp-main__section--name set--w-100">
                            <!-- Product Badges -->


                            <!-- Product Name -->
                            <h1 class="pdp__name heading-type fluid-type--deka-hecto text-line--normal" data-product-component="name">
                                <!-- <span class="font-family--cartier-logos">LOVE</span>  -->
                                {{$product->name}}
                            </h1>

                            <!-- Short Description -->

                            <div class="pdp__details-short-description-wrapper">

                                <div class="pdp-main__short-description cms-generic-copy text-line--medium">
                                    @foreach($product->attributeValues as $value)
                                    @if($value->attribute->name=='metal')
                                    {{$value->value}}
                                    @endif
                                    @endforeach

                                    @foreach($product->tags as $tag)

                                    {{$tag->name}}

                                    @endforeach
                                </div>



                            </div>


                            <!-- Prices -->
                            <div class="pdp-main__price flex flex-flow-wrap">
                                <div class="pdp-main__price-value font-weight--semibold">











                                    <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">







                                        <meta itemprop="priceCurrency" content="$">

                                        <span class="price__sales sales">



                                            <span class="value" itemprop="price">




                                                ${{$product->price}}



                                            </span>


                                        </span>
                                    </div>








                                </div>


                                <span class="pdp-main__price-tax font-family--serif body-type--deci">


                                    including sales tax


                                </span>

                            </div>


                            <div class="pdp__details-description-wrapper">


                                <div class="pdp-main__description cms-generic-copy text-line--medium" data-product-component="short-description" id="toggleID-1017--target" aria-labelledby="toggleID-1017">

                                   
                                        @if(strlen($product->long_description) > 100)
                                        <span class="pdp-main__description-truncated">{{substr($product->long_description,0,100)."..."}}</span>
                                        <span class="pdp-main__description-full">{{$product->long_description}}</span>
                                      
                                        
                                        @else
                                        <span class="">{{$product->long_description}}</span>
                                        @endif

                                    </span>
                                    @if(strlen($product->long_description) > 100)
                                    <button type="button" class="pdp-main__description-more link link--underline toggleRead" id="toggleID-1017" aria-expanded="false" aria-controls="toggleID-1017--target">
                                        <span class="pdp-main__description-truncated">Read More</span>
                                        <span class="pdp-main__description-full">Read Less</span>
                                    </button>
                                    @endif

                                </div>



                            </div>





                        </div>

                        <div class="pdp-main__section pdp-main__section--attributes set--w-100">
                            <!-- Attributes and Quantity -->
                            <div class="product-attribute__list flex flex-flow-wrap">

                                <div class="product-attribute main-attributes" data-product-component="main-attributes"></div>









                                <div class="product-attribute product-attribute--size product-attribute--last" data-attr-group="size" data-attr-group-type="dropdown">
                                    <!-- Size Chart -->


                                    <!-- Select <Attribute> Label -->
                                    <div class="product-attribute__head flex flex-justify-between sr-only">
                                        <label class="product-attribute__label product-attribute__label--size form-control-label" for="productAttribute-B6067517-size">
                                            <span class="product-attribute__label-pre">Select Size</span>
                                        </label>
                                    </div>
                                    @php
                                    $sizeExist = false;

                                    foreach($product->attributeValues as $value){
                                    if($value->attribute->name=='size'){
                                    $sizeExist = true;
                                    }
                                    }
                                    @endphp
                                    @if( $sizeExist)
                                    <div class="product-attribute__contents ">

                                        <!-- Attribute Values Drop Down Menu -->

                                        <select id="productAttribute-B6067517-size" class="product-attribute__size button form-control form-control--select form-control--boxed text-align-last--center" data-attr="size" data-attr-type="dropdown">
                                            <option value="">
                                                Select Size
                                            </option>
                                            @foreach($product->attributeValues as $value)
                                            @if($value->attribute->name=='size')
                                            <option value=" {{$value->value}}">
                                                {{$value->value}}
                                            </option>
                                            @endif
                                            @endforeach





                                        </select>



                                    </div>
                                    @endif


                                </div>



                                <!-- Quantity Drop Down Menu -->




                                <input type="hidden" value="1" data-product-component="qty">



                                <!-- 3D watches navigation tabs -->









                                <!-- Strap color options -->




                                <!-- <div class="product-attribute product-attribute--engrav">
                                    <button class="product-add-engrav__button button button--primary-outline set--w-100" data-pid="CRB6067515" data-product-component="show-engrav-form" data-url="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Product-Personalisation?personalisationType=engrav&amp;dwvar_B6067517_size=15&amp;pid=B6067517&amp;quantity=1" data-product-url="productEngraving" data-disable-redirect="">
                                        Add Engraving
                                    </button>
                                </div> -->







                            </div>
                        </div>



                        <div class="pdp-main__section pdp-main__section--actions flex set--w-100" data-product-component="actions">
                            <!-- Cart and [Optionally] Apple Pay -->



                            <div class="product-add__container cart-and-ipay flex-grow-1 flex flex-align-center">










                                <button type="button" class="product__request-price button button--primary set--w-100 hidden" data-pid="CRB6067515" data-url="/on/demandware.store/Sites-CartierUAE-Site/en_AE/RequestPrice-Start?dwvar_B6067517_size=15&amp;pid=B6067517&amp;quantity=1" data-product-url="productRequestPrice" data-product-component="request-price" data-disable-redirect="">
                                    Request Price
                                </button>


                                <button type="button" class="stock-notify-subscription product-get__notify button button--primary button--fluid set--w-100 hidden" data-pid="CRB6067515" data-url="/on/demandware.store/Sites-CartierUAE-Site/en_AE/StockNotification-Show?pid=CRB6067515" data-notification-url="getStockNotification" data-product-component="stock-availability-status" data-disable-redirect="">
                                    GET NOTIFIED
                                </button>
                                <p class="font-family--serif hidden" data-product-component="stock-availability-status">
                                    You will be notified as soon as the item becomes available online.
                                </p>



                                <p class="font-family--serif hidden" data-product-component="availability-status">
                                    Currently unavailable online
                                </p>
                                    <input type="hidden" value="{{$product->id}}">
                                <button class="product-add__button add-to-cart button button--primary button--fluid set--w-100 addToCart" data-pid="CRB6067515" data-product-component="add-button" data-url="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-AddProduct" data-sellable-url="getWebVisibleInfo" data-add-ready="">

                                    Add to Shopping Bag

                                </button>
                                <p class="font-family--serif hidden" data-product-component="phone-sellable-message">
                                    This Product will be Sold only on Phone.
                                </p>



                            </div>





                            <!-- <div class="product-common__wishlist">
                                <button type="button" class="product-common__wishlist-trigger button--flex button--fluid flex-align-center flex-justify-center" title="Add to Wish List, #LOVE# bracelet" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet" data-wishlist-trigger-ready="heart">
                                    <span class="sr-only">Add to Wish List</span>

                                    <svg aria-hidden="true" focusable="false" class="product-common__wishlist-add icon body-type--deka">
                                        <use xlink:href="#icon--heart"></use>
                                    </svg>
                                    <svg aria-hidden="true" focusable="false" class="product-common__wishlist-remove icon body-type--deka">
                                        <use xlink:href="#icon--heart-filled"></use>
                                    </svg>
                                </button>
                            </div> -->
                            <!-- <div class="loader face-loader-wrapper"><svg class="loader-indicator">
                                    <g class="face">
                                        <path class="loader-indicator__path" d="M57.89,40.39l-7.18-5,3.71-6.73h0L59.74,19l.93,4.89Zm-6.1,8.74L40.52,39.45,50,36.06l7.55,5.31ZM32.32,70c-5.08-.21-7.21-2.8-7.88-3.88l7.83-2.74,7.81,2.73C37.29,69.93,32.35,70,32.32,70ZM3.92,23.86l.93-4.92,5.33,9.67h0l3.72,6.73-7.2,5ZM1.09,4.65a.43.43,0,0,0,0-.12,3,3,0,0,1,.54-1.08C5.15,1.07,13.33,6.76,16.85,9.67l-12,7.1C.09,7.14,1.09,4.66,1.09,4.65Zm15.13.11L17,8.47C14.75,6.71,9.68,3,5.44,2.07c4.09,0,9.62,2.2,10.78,2.69ZM34.05,1c.09,0,5.51,0,13.27,3.67L42.55,31,32.8,28V1c.42,0,.83,0,1.25,0ZM59.23,2.08C55,3,49.8,6.79,47.64,8.52l.68-3.74C49.4,4.32,55.09,2,59.23,2.08ZM53.65,28l-10.07,3,3.7-20.39,12,7.14ZM21.6,32l2.53,6.39L14.9,35.09l-3.26-5.91Zm-.26-1.12L11,28,5.29,17.67l12.06-7.14ZM31.8,28l-9.44,3L17.23,4.7A49.12,49.12,0,0,1,31.8,1.07Zm1,8.53V29.05l9.46,2.88-3,6.72Zm-7.3,3.09,6.8-2.2L39,39.63V53.41H25.5Zm6.3-3.09-6.51,2.1-2.66-6.71,9.17-2.88Zm.49,22.3-5.81-4.43H38.07ZM7.05,41.35l7.57-5.29L24,39.44,12.79,49.11ZM13.25,50,24.5,40.35V53.61L15,58.71ZM23.8,65.28l-8.25-5.75,9.4-5,6.85,5.22v2.77Zm17,0-8-2.79V59.72l6.79-5.22,9.45,5Zm8.85-6.58L40,53.61V40.35l11.29,9.71Zm.08-23.62L40.48,38.4,43.31,32,53,29.19Zm10-18.32L47.82,9.67C51.3,6.76,59.43,1.1,62.92,3.46a3,3,0,0,1,.53,1.07l0,.1s1,2.51-3.73,12.14Zm.74.79c4.9-9.87,4.14-12.8,3.9-13.33a3.72,3.72,0,0,0-.69-1.36.22.22,0,0,0-.05-.08,3.92,3.92,0,0,0-1.41-1.11C58-.32,49.44,3.21,47.94,3.85,39.82,0,34.3,0,34.05,0,33.51,0,33,0,32.42,0L32.3,0a.58.58,0,0,0-.19,0A48.54,48.54,0,0,0,16.66,3.86C15.18,3.22,6.56-.32,2.34,1.68A4.16,4.16,0,0,0,.92,2.79l0,0a3.86,3.86,0,0,0-.71,1.4c-.24.53-1,3.46,3.9,13.32L2.92,23.76a.49.49,0,0,0,0,.17L5.84,41.31h0a.39.39,0,0,0,.08.2h0L12.24,50l1.87,9.53a.15.15,0,0,0,0,.07.64.64,0,0,0,0,.07h0a.43.43,0,0,0,.14.16l9,6.29c.39.79,2.58,4.56,9,4.83.24,0,5.94,0,8.94-4.81l9-6.31a.54.54,0,0,0,.14-.16h0a.1.1,0,0,0,0-.07.21.21,0,0,0,0-.07L52.35,50l6.31-8.51a.85.85,0,0,0,.09-.22l2.92-17.38a.49.49,0,0,0,0-.17Z"></path>
                                    </g>
                                    <g class="eyes">
                                        <polygon id="eye-sx" points="14.9 35.09 11.64 29.18 21.6 32.03 24.13 38.42 14.9 35.09"></polygon>
                                        <polygon id="eye-dx" points="40.48 38.4 43.31 32.03 52.96 29.19 49.71 35.09 40.48 38.4"></polygon>
                                    </g>
                                </svg><svg class="hide">
                                    <defs>
                                        <clipPath id="clipping-face">
                                            <path d="M57.89,40.39l-7.18-5,3.71-6.73h0L59.74,19l.93,4.89Zm-6.1,8.74L40.52,39.45,50,36.06l7.55,5.31ZM32.32,70c-5.08-.21-7.21-2.8-7.88-3.88l7.83-2.74,7.81,2.73C37.29,69.93,32.35,70,32.32,70ZM3.92,23.86l.93-4.92,5.33,9.67h0l3.72,6.73-7.2,5ZM1.09,4.65a.43.43,0,0,0,0-.12,3,3,0,0,1,.54-1.08C5.15,1.07,13.33,6.76,16.85,9.67l-12,7.1C.09,7.14,1.09,4.66,1.09,4.65Zm15.13.11L17,8.47C14.75,6.71,9.68,3,5.44,2.07c4.09,0,9.62,2.2,10.78,2.69ZM34.05,1c.09,0,5.51,0,13.27,3.67L42.55,31,32.8,28V1c.42,0,.83,0,1.25,0ZM59.23,2.08C55,3,49.8,6.79,47.64,8.52l.68-3.74C49.4,4.32,55.09,2,59.23,2.08ZM53.65,28l-10.07,3,3.7-20.39,12,7.14ZM21.6,32l2.53,6.39L14.9,35.09l-3.26-5.91Zm-.26-1.12L11,28,5.29,17.67l12.06-7.14ZM31.8,28l-9.44,3L17.23,4.7A49.12,49.12,0,0,1,31.8,1.07Zm1,8.53V29.05l9.46,2.88-3,6.72Zm-7.3,3.09,6.8-2.2L39,39.63V53.41H25.5Zm6.3-3.09-6.51,2.1-2.66-6.71,9.17-2.88Zm.49,22.3-5.81-4.43H38.07ZM7.05,41.35l7.57-5.29L24,39.44,12.79,49.11ZM13.25,50,24.5,40.35V53.61L15,58.71ZM23.8,65.28l-8.25-5.75,9.4-5,6.85,5.22v2.77Zm17,0-8-2.79V59.72l6.79-5.22,9.45,5Zm8.85-6.58L40,53.61V40.35l11.29,9.71Zm.08-23.62L40.48,38.4,43.31,32,53,29.19Zm10-18.32L47.82,9.67C51.3,6.76,59.43,1.1,62.92,3.46a3,3,0,0,1,.53,1.07l0,.1s1,2.51-3.73,12.14Zm.74.79c4.9-9.87,4.14-12.8,3.9-13.33a3.72,3.72,0,0,0-.69-1.36.22.22,0,0,0-.05-.08,3.92,3.92,0,0,0-1.41-1.11C58-.32,49.44,3.21,47.94,3.85,39.82,0,34.3,0,34.05,0,33.51,0,33,0,32.42,0L32.3,0a.58.58,0,0,0-.19,0A48.54,48.54,0,0,0,16.66,3.86C15.18,3.22,6.56-.32,2.34,1.68A4.16,4.16,0,0,0,.92,2.79l0,0a3.86,3.86,0,0,0-.71,1.4c-.24.53-1,3.46,3.9,13.32L2.92,23.76a.49.49,0,0,0,0,.17L5.84,41.31h0a.39.39,0,0,0,.08.2h0L12.24,50l1.87,9.53a.15.15,0,0,0,0,.07.64.64,0,0,0,0,.07h0a.43.43,0,0,0,.14.16l9,6.29c.39.79,2.58,4.56,9,4.83.24,0,5.94,0,8.94-4.81l9-6.31a.54.54,0,0,0,.14-.16h0a.1.1,0,0,0,0-.07.21.21,0,0,0,0-.07L52.35,50l6.31-8.51a.85.85,0,0,0,.09-.22l2.92-17.38a.49.49,0,0,0,0-.17Z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="face-loader face-loader--reverse"></div>
                            </div> -->
                        </div>


                      




                        <div class="pdp-main__section pdp-main__section--footer flex flex-align-center flex-flow-wrap set--w-100">
                            <!-- Social Sharing Icons -->

                            <div class="pdp-main__footer-item pdp-main__social flex">



                                <!-- <button type="button" class="product-common__share-trigger link link--flex flex-align-center body-type--centi text-transform--uppercase" data-share-component="trigger" data-disable-redirect="">
                                    <svg aria-hidden="true" focusable="false" class="icon icon icon--set-left-short body-type--hecto">
                                        <use xlink:href="#icon--share"></use>
                                    </svg>
                                    Share
                                </button> -->

                                <div class="modal-container--static" data-share-component="modal">
                                    <div class="modal__header">
                                        <h2 class="modal__title fluid-type--deka-hecto heading-type">Share</h2>
                                    </div>

                                    <div class="modal__body gutter--normal">
                                        <ul class="product-common__social flex flex-justify-center flex-align-center list--reset">

                                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fabaf6a531b5e43"></script>


                                            <li class="product-common__social-item social-item__facebook">
                                                <a class="link--highlight-hover link--flex product-common__social-anchor--facebook addthis_button_facebook" title="Facebook" href="#">
                                                    <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                                                        <use xlink:href="#icon--facebook"></use>
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="product-common__social-item social-item__pinterest_share">
                                                <a class="link--highlight-hover link--flex product-common__social-anchor--pinterest_share addthis_button_pinterest_share" target="_blank" title="Pinterest" href="#">
                                                    <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                                                        <use xlink:href="#icon--pinterest_share"></use>
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="product-common__social-item social-item__twitter">
                                                <a class="link--highlight-hover link--flex product-common__social-anchor--twitter addthis_button_twitter" title="Twitter" href="#">
                                                    <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                                                        <use xlink:href="#icon--twitter"></use>
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="product-common__social-item social-item__email">
                                                <a class="link--highlight-hover link--flex product-common__social-anchor--email addthis_button_email" target="_blank" title="Email" href="#">
                                                    <svg aria-hidden="true" focusable="false" class="icon heading-type--h6">
                                                        <use xlink:href="#icon--email"></use>
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="product-common__social-item social-item__whatsapp">
                                                <a class="link--highlight-hover link--flex product-common__social-anchor--whatsapp addthis_button_whatsapp" target="_blank" title="WhatsApp" href="#">
                                                    <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                                                        <use xlink:href="#icon--whatsapp"></use>
                                                    </svg>
                                                </a>
                                            </li>





                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="pdp-main__footer-item pdp-main__ref body-type--deci">
                                Ref. <span data-product-component="pid" data-pid="CRB6067515">{{$product['reference_number']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>














        <!-- The DIV tag id below is unique on purpose in case there are multiple recommendation slots on the same .isml page: -->
        <div id="cq_recomm_slot-272ef53f8b61e20f2e286c4c39">
















































            <div class="module-container  module-container--spacing-bottom-regular" style="">
                <section class="product-list max-width--xmedium">

                    <div class="module-container__header text-align--center set--motion-complete">

                        <h1 class="module-container__title heading-type component-copy__title--regular">You May Also Like</h1>



                    </div>




                    <div class="product-list__carousel slider--flex slider--arrows-outer slider--dots-right slider--arrows-tile-center slider--h-align-center slider--row slider--pre-layout-1 slider--md-pre-layout-md-3 slider--lg-pre-layout-3 slick-initialized slick-slider slick-has-arrows slick-can-scroll" data-carousel-config="{&quot;type&quot;: &quot;productListCarousel&quot;, &quot;slidesToShow&quot;: 3.0, &quot;slidesToScroll&quot;: 3.0, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1.0, &quot;slidesToScroll&quot;: 1.0}}, {&quot;breakpoint&quot;: 1024, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3.0, &quot;slidesToScroll&quot;: 3.0}}]}"><button type="button" class="slick-arrow slick-prev slick-disabled" aria-label="Previous Slide" aria-disabled="true" style="">
                            <svg aria-hidden="true" focusable="false" class="icon ">
                                <use xlink:href="#icon--angle-left"></use>
                            </svg>
                        </button>

                        <div class="row">
                            @foreach($similarProducts as $product)
                            <livewire:product-item :product="$product" :keys="$loop->index">
                                @endforeach
                        </div>

                        <button type="button" class="slick-arrow slick-next" aria-label="Next Slide" aria-disabled="false" style="">
                            <svg aria-hidden="true" focusable="false" class="icon ">
                                <use xlink:href="#icon--angle-right"></use>
                            </svg>
                        </button>
                    </div>
                </section>
            </div>






            <script type="text/javascript">
                if (window.SFRA && window.SFRA.publish) {
                    window.SFRA.publish('init:modules');
                }
            </script>
        </div>
        <!-- ====================== snippet ends here ======================== -->




        <!-- Product Services Content -->














        <div class="pdp__recommendations" data-tracking-context="Othersuggestions">




        </div>

        <div class="pdp__recommendations" data-tracking-context="Similarsuggestions">




        </div>


    </div>



</main>
@endsection

@push('custom-scripts')
<script type="text/javascript" src="{{ asset ('js/custom-scripts.js') }}"></script>
@endpush