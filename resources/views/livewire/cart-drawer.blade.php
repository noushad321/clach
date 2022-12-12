<div>

    <div class="header__minicart-overlay utility-overlay set--loaded {{$isToggle ? 'toggle--active':'' }}" data-minicart-component="overlay" tabindex="-1" role="dialog" aria-modal="true" id="toggleID-5389--target" aria-labelledby="toggleID-5389" data-focustrap-enabled="true">
        <div class="utility-overlay__header text-align--center gutter--normal">
            <h2 class="utility-overlay__header-title fluid-type--deka-hecto heading-type font-weight--semibold">
                Shopping Bag 
               
                   <span class="cartCount">  @if(session('cart')) ({{count(session('cart'))}}) @endif</span>
               
            </h2>
            <button type="button" class="utility-overlay__header-close link flex flex-align-center" data-toggle-close="" aria-label="Close shopping bag panel" wire:click="closeCartBar()">
                <svg aria-hidden="true" focusable="false" class="icon">
                    <use xlink:href="#icon--close"></use>
                </svg>
            </button>
        </div>
        <div class="myCartList"></div>
        <?php $total = 0 ?>

        @if(session('cart'))

        <div class="utility-overlay__line-items" data-minicart-component="items" data-line-item-container="minicart">





        @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
    <div class="utility-overlay__line-item product-line-item product-line-item--minicart" data-product-container="card" data-pid="CRB6067416" data-cart-line-item="be14c8d5b901190a7997ae7535">











<div class="product-line-item__main">
    <div class="product-line-item__details row">
        <div class="col-6">
            <a href="#" class="product-line-item__image-wrap link" title="#LOVE# bracelet" tabindex="-1">
                @if($details['photo'])
                <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" 
                src="data:image/jpeg;base64,{{base64_encode(Storage::get(json_decode($details['photo'])->source_path)) }}"   alt="#LOVE# bracelet" title="#LOVE# bracelet" data-line-item-component="image">
                @endif
            </a>
        </div>

        <div class="col-6">
            <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                <div class="product-line-item__header-main">
                    <!--Product Badges -->




                    <a href="#" class="product-line-item__name link word-break--break-word hyphens--auto" title="#LOVE# bracelet">
                        {{$details['name']}}
                    </a>
                </div>





<div class="product-line-item__remove ">
    <button data-id="{{$id}}"  type="button" class="product-line-item__action-cta--remove button--circle-close bg--white" data-line-item-component="remove-action" aria-label="Remove, #LOVE# bracelet" id="toggleID-7824" aria-expanded="false" aria-controls="toggleID-7824--target">

        <span class="sr-only">Remove</span>
        <svg aria-hidden="true" focusable="false" class="icon button__icon--circle-close"><use xlink:href="#icon--close"></use></svg>
    </button>

    <div class="inline-prompt flex flex-direction-col flex-align-center flex-justify-center text-align--center gutter--small" data-line-item-component="remove-confirm" role="dialog" aria-labelledby="toggleID-7824" id="toggleID-7824--target">
    <div class="inline-prompt__header">
        <h4 id="removeLineItem-be14c8d5b901190a7997ae7535" class="inline-prompt__title font-weight--semibold text-line--large">Remove Product?</h4>
    </div>

    <p class="inline-prompt__body font-family--serif">
        Are you sure you want to remove the following product from the cart?
    </p>

    <div class="inline-prompt__footer row flex-justify-center set--w-100">
        <div class="col-4">
            <button type="button" class="button button--small button--primary-outline body-type--deci" data-toggle-close="[data-line-item-component=remove-action]">Cancel</button>
        </div>

        <div class="col-4">
            <button type="button" class="button button--small button--primary body-type--deci" data-toggle-close="[data-line-item-component=remove-action]" data-line-item-component="remove-confirm-action">
                Yes
            </button>
        </div>
    </div>
</div>

</div>


            </div>

            <div class="product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto">



                    <p class="product-line-item__attribute">Rose gold</p>



                    <p class="product-line-item__attribute" data-line-item-component="size">


                        <span class="product-line-item__attribute-key">Size:</span>


                    <span class="product-line-item__attribute-value">16</span></p>
                    <p class="product-line-item__attribute" data-line-item-component="size">


<span class="product-line-item__attribute-key">Quantity:</span>


<span class="product-line-item__attribute-value">{{$details['quantity']}}</span></p>


                <div class="product-line-item__options">

                </div>






                    <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
                        <div class="product-line-item__total-price item-total-be14c8d5b901190a7997ae7535 price font-family--sans" data-line-item-component="price-total">


<div class="price__sales pricing line-item-total-price-amount">
    $ {{$details['price']}}


</div>

</div>
                    </div>


                <div class="product-line-item__attribute">

<div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="be14c8d5b901190a7997ae7535">

</div>

                </div>






            </div>




        </div>
    </div>


</div>

    </div>

    @endforeach
</div>




















        <div class="utility-overlay__footer">


    <div class="utility-overlay__footer-section utility-overlay__footer-totals">
        <div class="row font-weight--semibold text-transform--uppercase" data-totals-component="subTotal">
            <div class="col-6">
                <p data-totals-component="label">Subtotal</p>
            </div>

            <div class="col-6">
                <p class="text-align--right" data-totals-component="value">$ {{$total}}</p>
            </div>
        </div>

            <!-- <p class="utility-overlay__footer-message font-family--serif">Shipping and taxes calculated at checkout.</p> -->

        <div class="utility-overlay__footer-actions">
            <a href="{{url('/cart')}}" class="button button--primary minicart__checkout-action checkout-btn set--w-100 " role="button" data-cart-component="checkout-action">
    Proceed to Checkout
</a>


        </div>
    </div>
</div>

@else
        <p class="flex flex-align-center flex-justify-center set--h-100 emptyCart">Your shopping bag is empty</p>
        
@endif
<div class="myFooter"></div>

    </div>

</div>
