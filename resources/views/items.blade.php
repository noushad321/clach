@extends('layouts.user.guest')
@section('content')
@push('styles')
<link href="{{ asset('css/searchMain.css') }}" rel="stylesheet">
@endpush
<main id="main" class="main" role="main">

    <div class="search-results__main " data-search-component="search-main">


        <article class="
    bg--grey-1 flex-grow-1
    descriptive-card
    descriptive-card--size-regular
    descriptive-card--ratio-wide
    descriptive-card--style-slim" style="" data-content-component="descriptive-card" data-motion="{&quot;properties&quot;: &quot;opacity from-v-direction&quot;, &quot;children&quot;: &quot;.descriptive-card__content > *&quot;}">
            <!-- dwMarker="content" dwContentID="2e7d255606c7684536c0792ec4" -->



            <div class="row flex-no-gutters">

                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--wide">
                        <div class="descriptive-card__media component-overlay component-overlay--center">

                            <picture>

                                <source data-srcset="{{asset('images/header.jpg')}}" class="picture--source-element" srcset="{{asset('images/header.jpg')}}">



                                <img data-image-component="lazyload" src="{{asset('images/header.jpg')}}" class="component-image descriptive-card__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                            </picture>

                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="
                descriptive-card__content-wrap
                flex flex-grow-1
                text-align--left
                component-v-align--center
                component-h-align--center
                
                
                ">
                        <div class="descriptive-card__content component-custom-width" style="--component-var-width:26.5rem; ">

                            <h1 class="descriptive-card__title heading-type component-copy__title--regular">
                                Juste un Clou
                            </h1>



                            <div class="descriptive-card__description font-family--serif text-line--medium">
                                Conceived in '70s New York, the Juste un Clou collection reflects the bold spirit of the era. Its nail-inspired silhouette breaks through conventions, asserting the essence of its wearer. Original, independent, fearless, and free.
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </article>




        <div class="search-results max-width--large gutter--normal">


            <div class="search-results__container">
                <div class="search-results__section toggle--active" id="product-search-results" role="tabpanel" aria-expanded="true">

                    <div class="search-results__toolbar row flex-align-center">
                        <div class="col-12 col-md-3 breadcrumbs--spaced">

                            <ol class="breadcrumbs body-type--centi list--reset">
                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="https://www.cartier.com/en-ae/home" title="Home">Home</a>


                                    <span class="breadcrumbs__separator">/</span>

                                </li>


                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="/en-ae/jewelry/" title="Jewellery">Jewellery</a>

                                    <span class="breadcrumbs__separator">/</span>

                                </li>

                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="/en-ae/jewellery/collections/" title="Collections">Collections</a>

                                    <span class="breadcrumbs__separator">/</span>

                                </li>

                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="/en-ae/jewellery/collections/juste-un-clou/" title="Juste un Clou">Juste un Clou</a>

                                </li>

                            </ol>

                        </div>


                        <div class="col-12 display--small-only flex flex-direction-row fixit-element">
                            <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
                                <button type="button" class="search-results__toolbar-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-search-component="refinement-bar-trigger" id="toggleID-6840" aria-expanded="false" aria-controls="toggleID-6840--target">
                                    Filter By
                                </button>
                            </div>

                            <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
                                <button type="button" class="search-results__toolbar-button search-results__toolbar-sortby-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-search-component="refinement-bar-trigger" id="toggleID-5499" aria-expanded="false" aria-controls="toggleID-6840--target">
                                    Sort By
                                </button>
                            </div>
                        </div>


                        <div class="search-results__toolbar-count col-6 col-md-6 font-family--serif" aria-live="polite" aria-atomic="true">
                            <span>

                                68 Models

                            </span>




                        </div>



                        <div class="col-6 col-md-3 flex-direction-row flex-justify-end body-type--centi">
                            <button type="button" class="search-results__layout-selector flex set--active" data-search-component="grid-feed-toggle" data-search-layout="grid" title="Grid">
                                <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Grid</span>
                                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                                    <use xlink:href="#icon--grid-view"></use>
                                </svg>
                                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                                    <use xlink:href="#icon--grid-view-active"></use>
                                </svg>
                            </button>

                            <button type="button" class="search-results__layout-selector flex " data-search-component="grid-feed-toggle" data-search-layout="feed" title="Feed">
                                <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Feed</span>
                                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                                    <use xlink:href="#icon--feed-view"></use>
                                </svg>
                                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                                    <use xlink:href="#icon--feed-view-active"></use>
                                </svg>
                            </button>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="refinement-bar  text-transform--uppercase" data-search-component="refinement-bar" id="toggleID-6840--target" aria-labelledby="toggleID-5499">
                                <div class="refinement-bar__head display--small-only gutter--normal flex flex-justify-center flex-align-center">
                                    <span class="refinement-bar__filter-title body-type--deka font-weight--semibold">Filter By</span>
                                    <span class="refinement-bar__sort-title body-type--deka font-weight--semibold">Sort By</span>
                                    <button class="refinement-bar__head-button flex" data-toggle-close="[data-search-component=refinement-bar-trigger]"><svg aria-hidden="true" focusable="false" class="icon">
                                            <use xlink:href="#icon--close"></use>
                                        </svg></button>
                                </div>

                                <div class="fixit-placeholder" style="height: 685.8px; margin: 0px;"></div>
                                <div class="refinement-bar__body gutter--small-only-normal fixit-element fixit--respond-to-parent fixit--is-tall fixit--frozen" style="top: 24.3px; width: 214px;">





                                    <div class="refinements body-type--deci">
                                        <div class="refinement__title font-weight--semibold display--small-up">
                                            Filter By
                                        </div>





                                        <div id="refinement-null" class="refinement__content null">

                                            <ol class="refinement__null list--reset">
























                                                <li class="refinement__boolean-item  ">
                                                    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection__JusteunClou&amp;prefn1=isSellable&amp;prefv1=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-true">

                                                        <span class="body-type--centi link--underline-hover" aria-hidden="true">

                                                            Available Online

                                                        </span>
                                                        <span class="sr-only selected-assistive-text">
                                                            Refine by Available Online: true
                                                        </span>
                                                    </a>
                                                </li>























                                                <li class="refinement__boolean-item  ">
                                                    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection__JusteunClou&amp;prefn1=novelties&amp;prefv1=BEST%20SELLER" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-MUST HAVE">

                                                        <span class="body-type--centi link--underline-hover" aria-hidden="true">

                                                            MUST HAVE

                                                        </span>
                                                        <span class="sr-only selected-assistive-text">
                                                            Refine by New Arrivals: MUST HAVE
                                                        </span>
                                                    </a>
                                                </li>


















                                            </ol>
                                        </div>
                                    </div>



                                    <div class="refinements body-type--deci">






































                                        <div class="refinement refinement-metal " data-refinement-type="metal" tabindex="-1">
                                            <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-search-component="refinement-trigger" aria-label="Metal" id="toggleID-5998" aria-expanded="false" aria-controls="refinement-metal">
                                                <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
                                                    Metal

                                                </strong>
                                                <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
                                                    <use xlink:href="#icon--angle-up"></use>
                                                </svg>
                                            </button>
                                            <div id="refinement-metal" class="refinement__content " aria-labelledby="toggleID-5998">






                                                <ol class="refinement__metal list--reset">












                                                    <li class="refinement__boolean-item  ">
                                                        <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection__JusteunClou&amp;prefn1=material1&amp;prefv1=Yellow%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Yellow Gold">

                                                            <span class="body-type--centi link--underline-hover" aria-hidden="true">

                                                                Yellow Gold

                                                            </span>
                                                            <span class="sr-only selected-assistive-text">
                                                                Refine by Metal: Yellow Gold
                                                            </span>
                                                        </a>
                                                    </li>














                                                    <li class="refinement__boolean-item  ">
                                                        <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection__JusteunClou&amp;prefn1=material1&amp;prefv1=Rose%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Rose Gold">

                                                            <span class="body-type--centi link--underline-hover" aria-hidden="true">

                                                                Rose Gold

                                                            </span>
                                                            <span class="sr-only selected-assistive-text">
                                                                Refine by Metal: Rose Gold
                                                            </span>
                                                        </a>
                                                    </li>














                                                    <li class="refinement__boolean-item  ">
                                                        <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection__JusteunClou&amp;prefn1=material1&amp;prefv1=White%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-White Gold">

                                                            <span class="body-type--centi link--underline-hover" aria-hidden="true">

                                                                White Gold

                                                            </span>
                                                            <span class="sr-only selected-assistive-text">
                                                                Refine by Metal: White Gold
                                                            </span>
                                                        </a>
                                                    </li>





                                                </ol>





                                            </div>
                                        </div>





                                    </div>

                                </div>

                                <div class="refinement-bar__footer flex flex-justify-between display--small-only gutter--normal">

                                    <button type="button" class="button button--primary flex-grow-1" data-toggle-close="[data-search-component=refinement-bar-trigger]">Apply</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-9">
                            <div class="">

                                <input type="hidden" data-refinement-tracking="">





                                <div class="row product-grid grid-view" itemtype="http://schema.org/SomeProducts" itemid="#product" data-search-component="product-grid">

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="search-results__section " id="content-search-results-pane" role="tabpanel" aria-expanded="false">
                    <div class="max-width--small" data-search-component="content-list">

                    </div>
                </div>
            </div>
        </div>

    </div>








</main>
@endsection