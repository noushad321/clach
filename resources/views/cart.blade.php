@extends('layouts.user.guest')
@section('content')

<main id="main" class="main" role="main">


















    <div class="cart  gutter--small-up-normal" data-cart-component="cart-container">
        <div class="brand__panther-image image-width__small inverted"></div>
        <div class="cart__header max-width--xmedium gutter--small-only-normal flex flex-align-baseline">
            <h1 class="cart__title fluid-type--deka-hecto heading-type">Shopping Bag</h1>


                <span class="cart__header-count font-family--serif" data-minicart-component="qty" data-qty-label-single="({0} Item)" data-qty-label="({0} Items)">(1 Item)</span>

        </div>

        <div class="cart__main max-width--xmedium fixit-container" data-cart-component="cart-main">

                <div class="row">

                    <div class="col-12 col-lg-8">
                        <div class="cart__contents">
                            <div class="cart-error-messaging" data-cart-component="cart-error"></div>

                            <div class="cart__items" data-cart-component="cart-items" data-line-item-container="cart"><!-- Disclaimer added - CARE-63975 start -->




        <div class="cart__line-item product-line-item product-line-item--cart gutter--normal">
            <p class="product-line-item__attributes font-family--serif text-align--justify">
                Please note that the carat weight, number of stones and product dimensions will vary based on the size of the creation you order.&nbsp;For detailed information please contact us.

            </p>
        </div>


<!-- Disclaimer added - CARE-63975 end -->




@if(session('cart'))
<?php $total = 0 ?>
@foreach(session('cart') as $id => $details)
<?php $total += $details['price'] * $details['quantity'] ?>

<div class="cart__line-item product-line-item product-line-item--cart gutter--normal " data-product-container="card" data-pid="CRB6067416" data-cart-line-item="be14c8d5b901190a7997ae7535">












<div class="product-line-item__main">
    <div class="product-line-item__details row">
        <div class="col-5 col-md-4">
            <a href="/en-ae/jewellery/bracelets/love/love-bracelet-CRB6067416.html" class="product-line-item__image-wrap link" title="#LOVE# bracelet" tabindex="-1">
                <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="data:image/jpeg;base64,{{ base64_encode(Storage::get($details['photo']->getRawOriginal('source_path'))) }}" alt="#LOVE# bracelet" title="#LOVE# bracelet" data-line-item-component="image">
            </a>
        </div>

        <div class="col-7 col-md-8">
            <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                <div class="product-line-item__header-main">
                    <!--Product Badges -->




                    <a href="/en-ae/jewellery/bracelets/love/love-bracelet-CRB6067416.html" class="product-line-item__name link word-break--break-word hyphens--auto" title="#LOVE# bracelet">
                        {{$details['name']}}
                    </a>
                </div>


                    <div class="product-line-item__header-price display--medium-up white-space--nowrap">
                        <div class="product-line-item__total-price item-total-be14c8d5b901190a7997ae7535 price font-family--sans" data-line-item-component="price-total">


<div class="price__sales pricing line-item-total-price-amount">
    $ {{$details['price']}}


</div>

</div>
                    </div>




<div class="product-line-item__remove ">
    <button type="button" class="product-line-item__action-cta--remove button--circle-close bg--white" data-line-item-component="remove-action" aria-label="Remove, #LOVE# bracelet" id="toggleID-1400" aria-expanded="false" aria-controls="toggleID-1400--target">

        <span class="sr-only">Remove</span>
        <svg aria-hidden="true" focusable="false" class="icon button__icon--circle-close"><use xlink:href="#icon--close"></use></svg>
    </button>

    <div class="inline-prompt flex flex-direction-col flex-align-center flex-justify-center text-align--center gutter--small" data-line-item-component="remove-confirm" role="dialog" aria-labelledby="toggleID-1400" id="toggleID-1400--target">
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






                    <div class="product-line-item__attribute font-weight--semibold display--medium-down body-type--deci">
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




<div class="product-line-item__actions">






    <div class="product-line-item__action product-line-item__add">
        <button type="button" class="link--primary" data-product-component="add-button" data-line-item-component="add-action" aria-label="Add another &quot;#LOVE# bracelet&quot; to bag" data-add-ready="">
            Add another item
        </button>
    </div>





    <!-- <div class="product-line-item__action product-line-item__edit body-type--deci">
        <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-GetProduct?uuid=be14c8d5b901190a7997ae7535" data-line-item-component="edit-action" class="link--primary button--flex" aria-label="Edit, #LOVE# bracelet">Edit</a>
    </div> -->






<div class="product-line-item__action product-line-item__wishlist">
    <button type="button" class="product-line-item__wishlist-remove link--primary" aria-label="Remove from wishlist, #LOVE# bracelet" data-wishlist-trigger-ready="cta">Remove from Wish List</button>

    <!-- <button type="button" class="product-line-item__wishlist-add link--primary" data-wishlist-label-add="Move to Wishlist" data-pid="CRB6067416" data-uuid="be14c8d5b901190a7997ae7535" data-line-item-component="remove-confirm-action" data-action="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-RemoveProductLineItem" aria-label="Move to wishlist, #LOVE# bracelet" data-wishlist-trigger-ready="cta">Move to Wishlist</button> -->
</div>



</div>



    <input type="hidden" value="1" data-product-component="qty">









<div class="product-line-item__personalisations">

        <div class="product-line-item__personalisation" data-line-item-component="gift-personalisation">



<div class="product-line-item__giftmessage">






        <!-- <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-AddPersonalisation?ProductPersonalisation=ProductGiftMessage&amp;uuid=be14c8d5b901190a7997ae7535&amp;pid=CRB6067416" class="link--secondary body-type--centi" aria-label="Add gift message for #LOVE# bracelet" data-disable-redirect="">
            Add gift message
        </a> -->

</div>
        </div>



        <div class="product-line-item__personalisation" data-line-item-component="engrav-personalisation">




    <div class="product-line-item__engraving">





            <!-- <a href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-AddPersonalisation?ProductPersonalisation=ProductEngraving&amp;uuid=be14c8d5b901190a7997ae7535&amp;pid=CRB6067416" class="link--secondary body-type--centi" aria-label="Add Engraving for #LOVE# bracelet" data-disable-redirect="">
                Add Engraving
            </a> -->

    </div>

        </div>



        <div class="product-line-item__personalisation" data-line-item-component="emboss-personalisation">




        </div>

</div>





        </div>
    </div>


</div>





</div>
@endforeach
@endif
</div>

                            <div class="approaching-discounts" data-cart-component="approaching-discounts"></div>






                        </div>
                    </div>


                    <div class="col-12 col-lg-4">
                        <div class="cart__summary-container">
                            <div class="fixit-placeholder" style=""></div><div class="cart__summary fixit-element fixit--respond-to-parent" data-cart-component="summary" style="">






                                <div class="cart__summary-section order-summary__totals gutter--normal">
                                    <div class="cart__totals" data-cart-component="totals">


<dl class="total-list">

    <div class="total-list__row row flex-align-center text-color--grey-5 hidden" data-totals-component="shippingLevelDiscountTotal">
        <dt class="col">
            <p class="word-break--break-word hyphens--auto" data-totals-component="label">Shipping Discount</p>
        </dt>
        <dd class="col">
            <p class="text-align--right">- <span data-totals-component="value">AED 0.00</span></p>
        </dd>
    </div>


    <div class="total-list__row row flex-align-center font-weight--semibold order-discount body-type--centi hidden" data-totals-component="orderLevelDiscountTotal">
        <dt class="col">
            <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Order Discount</p>
        </dt>
        <dd class="col">
            <p class="text-align--right order-discount-total">- <span data-totals-component="value">AED 0.00</span></p>
        </dd>
    </div>


    <div class="total-list__row--short-spacing row flex-align-center font-weight--semibold subtotal-item" data-totals-component="subTotal">
        <dt class="col">
            <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Subtotal</p>
        </dt>
        <dd class="col">
            <p class="text-align--right sub-total word-break--break-word" data-totals-component="value">$ {{$total}}</p>
        </dd>
    </div>


    <div class="total-list__row row sales-tax-item" data-totals-component="totalTax">
        <dt class="col">
            <p class="order-receipt-label font-family--serif word-break--break-word hyphens--auto" data-totals-component="label">Sales tax incl.</p>
        </dt>

	        <dd class="col">
	            <p class="text-align--right tax-total body-type--centi" data-totals-component="value">AED 1,257.14</p>
	        </dd>

    </div>
</dl>
                                    </div>

                                    <div class="cart__summary-section cart__checkout-actions">


<a href="{{url('/checkout')}}" class="button button--primary cart__checkout-action checkout-btn set--w-100" role="button" data-cart-component="checkout-action">
    Proceed to Checkout
</a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart__back-to-shopping text-align--small-center">
                    <a class="link--secondary link--flex flex-align-center font-weight--semibold" href="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/Cart-ContinueShopping" title="Back to Shopping" aria-label="Back to Shopping">
                        <svg aria-hidden="true" focusable="false" class="icon icon--set-left-short"><use xlink:href="#icon--angle-left"></use></svg>
                        Back to Shopping
                    </a>
                </div>



        </div>
    </div>

</main>

@endsection
