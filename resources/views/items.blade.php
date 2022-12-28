@extends('layouts.user.guest')
@section('content')
@push('styles')
<link href="{{ asset('css/searchMain.css') }}" rel="stylesheet">
@endpush
<main id="main" class="main" role="main">

    <div class="search-results__main " data-search-component="search-main">


        <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-regular descriptive-card--ratio-natural descriptive-card--style-default set--motion-complete" style="" data-content-component="descriptive-card">
            <!-- dwMarker="content" dwContentID="262c06849652c8feb53ba11b6c" -->



            <div class="row flex-no-gutters">

                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--natural">
                        <div class="descriptive-card__media ">










































                            <picture>





                                <source data-srcset="{{asset('images/banner.jpeg')}}" class="picture--source-element" srcset="{{asset('images/banner.jpeg')}}">



                                <img data-image-component="lazyload" src="{{asset('images/banner.jpeg')}}" class="component-image descriptive-card__img object-fit--cover blur-up lazyloaded" title="Contact Us" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
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
                        <div class="descriptive-card__content component-custom-width" style="--component-var-width:26.25rem; ">

                            <h1 class="descriptive-card__title heading-type component-copy__title--regular set--motion-complete">
                                {{$category->name}}
                            </h1>



                            <div class="descriptive-card__description font-family--serif text-line--medium set--motion-complete">
                                A love child of '70s New York, the LOVE collection is a symbol of free-spirited love. Its binding closure and screw motif give it true permanence, while diverse interpretations allow for a unique expression of feelings. Lock in your love, forever.
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

                            <!-- <ol class="breadcrumbs body-type--centi list--reset">
                                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                                    <a class="breadcrumbs__anchor link--secondary" href="#" title="Home">Home</a>


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

                            </ol> -->

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
                            <!-- <span>

                                68 Models

                            </span> -->




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





                                <div class="refinement-bar__sort-list form-check-group" name="sort-order" data-search-component="search-sort">
        <div class="display--small-up body-type--deci font-weight--semibold">Sort By</div>
        
            <div class="refinement-bar__sort-item-container">
                <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;srule=price-low-to-high&amp;start=0&amp;sz=24" data-sort-option-id="price-low-to-high" data-search-component="search-sort-anchor" aria-label="Price Low To High">
                    <input type="radio" id="price-low-to-high" class="form-check-input" name="sort-radio">
                    <label for="price-low-to-high" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Price Low To High</span>
                    </label>
                </a>
            </div>
        
            <div class="refinement-bar__sort-item-container">
                <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;srule=price-high-to-low&amp;start=0&amp;sz=24" data-sort-option-id="price-high-to-low" data-search-component="search-sort-anchor" aria-label="Price High to Low">
                    <input type="radio" id="price-high-to-low" class="form-check-input" name="sort-radio">
                    <label for="price-high-to-low" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Price High to Low</span>
                    </label>
                </a>
            </div>
        
            <div class="refinement-bar__sort-item-container">
                <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;srule=recommended&amp;start=0&amp;sz=24" data-sort-option-id="recommended" data-search-component="search-sort-anchor" aria-label="Recommended">
                    <input type="radio" id="recommended" class="form-check-input" name="sort-radio">
                    <label for="recommended" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Recommended</span>
                    </label>
                </a>
            </div>
        
    </div>



    <div class="refinement refinement-metal " data-refinement-type="metal" tabindex="-1">
                <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-search-component="refinement-trigger" aria-label="Metal" id="toggleID-9771" aria-expanded="false" aria-controls="refinement-metal">
                    <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
                        Metal
                        
                    </strong>
                </button>
                <div id="refinement-metal" class="refinement__content " aria-labelledby="toggleID-9771">
                    
                    

                    
                    
                        
<ol class="refinement__metal list--reset">
    
        
        

        

        
            

            

<li class="refinement__boolean-item  ">
    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;prefn1=material1&amp;prefv1=Yellow%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Yellow Gold">
        
        <span class="body-type--centi link--underline-hover" aria-hidden="true">
            
                Yellow Gold
            
        </span>
        <span class="sr-only selected-assistive-text">
            Refine by Metal: Yellow Gold
        </span>
    </a>
</li>

        
    
        
        

        

        
            

            

<li class="refinement__boolean-item  ">
    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;prefn1=material1&amp;prefv1=Platinum" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Platinum">
        
        <span class="body-type--centi link--underline-hover" aria-hidden="true">
            
                Platinum
            
        </span>
        <span class="sr-only selected-assistive-text">
            Refine by Metal: Platinum
        </span>
    </a>
</li>

        
    
        
        

        

        
            

            

<li class="refinement__boolean-item  ">
    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;prefn1=material1&amp;prefv1=Rose%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Rose Gold">
        
        <span class="body-type--centi link--underline-hover" aria-hidden="true">
            
                Rose Gold
            
        </span>
        <span class="sr-only selected-assistive-text">
            Refine by Metal: Rose Gold
        </span>
    </a>
</li>

        
    
        
        

        
            
            
        

        
            

            

<li class="refinement__boolean-item  hidden" data-refinement-hide="">
    <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Search-ShowAjax?cgid=Jewelry_AllCollection_LOVE&amp;prefn1=material1&amp;prefv1=White%20Gold" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-White Gold">
        
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

                                <div class="refinement-bar__footer flex flex-justify-between display--small-only gutter--normal">

                                    <button type="button" class="button button--primary flex-grow-1" data-toggle-close="[data-search-component=refinement-bar-trigger]">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
    <div class="row product-grid grid-view">
        @foreach($products as $product)
        <livewire:product-item :product="$product" :keys="$loop->index">

            @endforeach
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