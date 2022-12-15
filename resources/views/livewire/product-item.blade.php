<div class="product-grid__item col-6 col-md-3">
    <div class="product flex flex-grow-1 flex-direction-col">
        <div class="product-tile product-tile--default flex flex-direction-col text-align--center">
            <!-- dwMarker="product" dwContentID="0a6cce9987006d6da95df75306" -->
            <a class="product-tile__anchor" href="{{ url('/details/'. $product->subCategoryType->subCategory->category->slug .'/'. $product->subCategoryType->subCategory->slug .'/'. $product->subCategoryType->slug.'/'. $product->slug) }}" data-product-url="productShow" itemprop="url">
                <!--Product Badges -->

                <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                    <div class="product-tile__media-container component-overlay component-overlay--center">

                        <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up  full-stretch-image " data-product-component="image" data-src="data:image/jpeg;base64,{{ base64_encode(Storage::get($product->multimedia[0]->getRawOriginal('source_path'))) }}" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" width="350" height="350" title="Panth&egrave;re de Cartier bracelet" />

                        @if($product->multimedia->count() > 1)
                        <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image " data-product-component="image" data-src="data:image/jpeg;base64,{{ base64_encode(Storage::get($product->multimedia[1]->getRawOriginal('source_path'))) }}" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" width="350" height="350" title="Panth&egrave;re de Cartier bracelet" />
                        @endif
                    </div>
                </div>


                <div class="product-tile__body">
                    <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                        {{$product->name}}
                    </p>
                    <p class="product-tile__body-section product-tile__material font-family--serif myAttrs">
                        @foreach($product->attributeValues as $value)
                        @if($value->attribute->name=='metal')
                        {{$value->value}}
                        @endif
                        @endforeach

                        @foreach($product->tags as $tag)

                        {{$tag->name}}

                        @endforeach
                    </p>
                    <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                        <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="AED" />
                            <span class="price__sales sales">
                                <span class="value" itemprop="price" content="30700.00">
                                    ${{$product->price}}
                                </span>
                        </div>





                    </div>



                    <div class="body-type--deci">




                    </div>



                </div>
            </a>


          






            <div class="product-tile__overlay flex flex-align-end bg--white">
                <div class="product-tile__overlay-actions set--w-100">

                    @php
                    $sizeExist = false;

                    foreach($product->attributeValues as $value){
                    if($value->attribute->name=='size'){
                    $sizeExist = true;
                    }
                    }
                    @endphp

                    @if(!$sizeExist)


                    <div class="product-tile__quickadd" data-quickadd>
                        <input type="hidden" value='{{$product->id}}'class="productID">
                        <button type="button"  class="product-tile__quickadd-trigger button button--primary button--small set--w-100 addToCart" data-url="" data-product-url="productShowQuickAdd" title="Quick Add for Panth&egrave;re de Cartier bracelet" data-quickadd-trigger>
                            <span class="display--small-up">
                                Add to Shopping Bag
                            </span>
                            <span class="display--small-only">
                                Add to Bag
                            </span>
                        </button>

                        <div class="product-tile__quickadd-panel body-type--deci" data-quickadd-component="panel" tabindex="-1" role="dialog" aria-modal="true"></div>
                    </div>
                    @else
                    <div class="product-tile__quickadd">
                    <input type="hidden" class="productId" value="{{$product->id}}">
                        <button type="button"  class="product-tile__quickadd-trigger button button--primary button--small set--w-100 quickView"  title="Quick Add for {{$product->name}}">
                            <span class="display--small-up">
                                Quick View
                            </span>
                            <span class="display--small-only">
                                Quick View
                            </span>
                        </button>
                        <input type="hidden" class="price" value="{{$product->price}}">
                        <input type="hidden" class="name" value="{{$product->name}}">
                        <input type="hidden" class="description" value="{{$product->long_description}}">
                       
                       @php 
                       $values =[]; 
                        foreach($product->attributeValues as $value){
                                    if($value->attribute->name=='size'){
                                        array_push($values,$value->value);
                                    }
                                }
                        $sizes =   implode(",", $values);
                                
                        @endphp
                        <input type="hidden" class="size" value="{{$sizes}}">
                        <div class="product-tile__quickadd-panel body-type--deci" data-quickadd-component="panel" tabindex="-1" role="dialog" aria-modal="true"></div>
                    </div>
                    @endif


                </div>
            </div>

            <!-- END_dwmarker -->
        </div>

    </div>
    
</div>
