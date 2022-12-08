@extends('layouts.user.guest')
@section('content')
    <main id="main" class="main gutter--small-up-normal" role="main">
        <div id="checkout-main" class="checkout max-width--xmedium" data-customer-type="guest" data-stage=""
             data-current-stage="shipping"
             data-checkout-get-url="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/CheckoutServices-Get"
             data-shipping-view="single">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="gutter--normal">
                        <div class="checkout-steps-header extend-gutter--small-up-normal">
                            <div class="checkout-steps-header__item mt-4" data-checkout-component="steps-header-shipping"
                                 tabindex="-1">
                                <h1 class="checkout-steps-header__title fluid-type--deka-hecto heading-type">Proceed
                                    with your order</h1>
                                <div
                                    class="checkout-steps-header__message checkout-stage__shaded-message gutter--normal bg--grey-1">
                                    <form class="checkout-stage__form toggle--active" autocomplete="on"
                                          method="POST" novalidate="" action="{{ route('shipment') }}"
                                          data-address-mode="new" data-checkout-component="single-shipping-form"
                                          name="dwfrm_shipping" id="dwfrm_shipping">
                                        @csrf
                                    <div class="step-content">
                                        <ul class="checkout-steps_list row">
                                            <li class="col-12 col-lg-6 checkout-steps_list-guest">
                                                <h4 class="body-type heading-type">Proceed without registration</h4>
                                                <p class="font-family--serif">Insert your e-mail address to proceed with
                                                    the purchase.</p>
                                                <p class="font-family--serif">For further information about how we use
                                                    your personal information, please see our
                                                    <a href="https://www.cartier.com/en-ae/resources/privacy-policy-template/privacy-policy.html"
                                                       title="Privacy Policy" target="_blank">Privacy Policy</a></p>
                                                    <div class="form-group--short-spacing
                                    required dwfrm_shipping_shippingAddress_contactInfoFields_email"
                                                         data-floating-label="">
                                                        <label class="form-control-label" for="email">Email</label>
                                                        <input type="email" required="" class="form-control email"
                                                               id="email" value=""
                                                               aria-describedby="emailInvalidMessage"
                                                               name="shipping_email"
                                                               aria-required="true" maxlength="50"
                                                               pattern="^[\w.!#$%\/'*+=?^`{|}~-]+@[\w.-]+\.[\w]{2,6}$">
                                                        <div class="invalid-feedback" id="emailInvalidMessage"></div>
                                                    </div>
                                            </li>
                                            <li class="col-12 col-lg-6 checkout-steps_list-login">
                                                <h4 class="body-type heading-type">Login</h4>
                                                <p class="font-family--serif">Log in to recall your saved details and
                                                    speed up your purchase.</p>
                                                <div class="opt-wrapper">
                                                    <div class="checkout-register">
                                                        <a class="checkout-steps-header__message-link font-family--serif link--secondary"
                                                           title="Register"
                                                           href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Checkout-Register"
                                                           data-auth-required="true">Register</a>
                                                    </div>
                                                    <div class="checkout-login">
                                                        <a class="checkout-steps-header__message-link font-family--serif link--secondary"
                                                           title="Login"
                                                           href="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Checkout-Login"
                                                           data-auth-required="true">Login</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-stage mt-6" data-stage-container="shipping">
                                <input type="hidden" name="storeId" id="checkoutShippingStoreId" value="">
                                <div class="checkout-stage__details checkout-stage__details--shipping"
                                     data-checkout-component="shipping-details">
                                    <div class="checkout-stage__details-group"
                                         data-checkout-component="single-shipment-list">


                                        <div class="checkout-stage__shipment"
                                             data-shipment-uuid="e0002f69e8fac8fcfd190b30a7" data-skip-shipping="false"
                                             data-is-staff-sale-site="null">

                                                <input name="originalShipmentUUID" type="hidden"
                                                       value="e0002f69e8fac8fcfd190b30a7"
                                                       aria-describedby="originalShipmentUUID-1374831112540">
                                                <input name="shipmentUUID" type="hidden"
                                                       value="e0002f69e8fac8fcfd190b30a7"
                                                       aria-describedby="shipmentUUID-288521310580">


                                                <div class="checkout-stage__header shipping-method">
                                                    <legend class="body-type heading-type">Shipping Method</legend>
                                                </div>
                                                <div class="checkout-stage__shipment-toggle tab-nav">
                                                    <a href="#homedelivery"
                                                       class="checkout-stage__shipment-toggle-item tab-nav__item flex flex-align-center flex-justify-center font-family--sans-secondary body-type--centi text-line--xxlarge text-transform--uppercase toggle--active"
                                                       data-toggle-component="home" role="tab" id="toggleID-1656"
                                                       aria-expanded="true" aria-controls="toggleID-1656--target">
                                                        <span class="tab-nav__item-label">Ship to an Address</span>
                                                    </a>


                                                    <a href="#storepickup"
                                                       class="checkout-stage__shipment-toggle-item tab-nav__item flex flex-align-center flex-justify-center font-family--sans-secondary body-type--centi text-line--xxlarge text-transform--uppercase"
                                                       data-toggle-component="store" role="tab" id="toggleID-4169"
                                                       aria-expanded="false" aria-controls="toggleID-4169--target">
                                                        <span class="tab-nav__item-label">Ship to a Boutique</span>
                                                    </a>

                                                </div>
                                                <div class="tab-content">
                                                    <div
                                                        class="checkout-stage__address-container tab-content__panel toggle--active"
                                                        role="tabpanel" data-checkout-component="address-container"
                                                        id="toggleID-1656--target" aria-labelledby="toggleID-1656">


                                                        <fieldset class="checkout-stage__details-section"
                                                                  data-checkout-component="shipping-address-section">
                                                            <div
                                                                class="checkout-stage__address-selection checkout-stage__address-selection--top-spacing hidden ">
                                                                <div class="form-group--no-spacing">
                                                                    <label class="form-control-label"
                                                                           for="shipmentSelector-e0002f69e8fac8fcfd190b30a7">
                                                                        Shipping To
                                                                    </label>

                                                                    <select
                                                                        id="shipmentSelector-e0002f69e8fac8fcfd190b30a7"
                                                                        name="shipmentSelector"
                                                                        class="addressSelector form-control form-control--select form-control--boxed form-control--alt-font"
                                                                        data-checkout-component="single-shipping-address-selector"
                                                                        data-create-shipment-url="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/CheckoutAddressServices-CreateNewAddress"
                                                                        aria-describedby="shipmentSelector-1413098612274">


                                                                        <option value="new" data-address-type="new"
                                                                                data-salutation="" data-first-name=""
                                                                                data-last-name=""
                                                                                data-custom-first-name=""
                                                                                data-custom-last-name=""
                                                                                data-address1="" data-address2=""
                                                                                data-city="" data-state-code=""
                                                                                data-country-code="AE"
                                                                                data-postal-code="" data-phone="">
                                                                            New Address
                                                                        </option>


                                                                    </select>
                                                                    <div id="shipmentSelector-1413098612274"
                                                                         class="invalid-feedback"></div>
                                                                </div>

                                                                <div class="checkout-stage__address-actions"
                                                                     data-checkout-component="address-actions">
                                                                    <button type="button"
                                                                            class="checkout-stage__address-action link--primary"
                                                                            data-checkout-component="address-action-update">
                                                                        Update Address
                                                                    </button>


                                                                    <button type="button"
                                                                            class="checkout-stage__address-action link--primary"
                                                                            data-checkout-component="address-action-new">
                                                                        Add New
                                                                    </button>

                                                                </div>

                                                            </div>

                                                            <div class="checkout-stage__address-fields"
                                                                 data-checkout-component="address-fields"
                                                                 data-address-autocomplete="{&quot;searchField&quot;: &quot;[data-address-component=address1]&quot;}">


                                                                <input type="hidden"
                                                                       name="dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress"
                                                                       value="true"
                                                                       data-verification-component="using-verified"
                                                                       aria-describedby="dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress-333526276577">

                                                                <p class="form-required__copy font-family--serif text-align--right text-color--grey-5">
                                                                    Required field*
                                                                </p>


                                                                <!-- Salutation  -->


                                                                <div class="form-group required">
                                                                    <p class="form-control-label form-control-label--spacing-deka">
                                                                        Title
                                                                    </p>

                                                                    <div class="form-check-group flex">


                                                                        <div class="form-check form-check-group__item">
                                                                            <input
                                                                                id="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mr"
                                                                                type="radio" class="form-check-input"
                                                                                name="dwfrm_shipping_shippingAddress_addressFields_salutations_salutation"
                                                                                required="" aria-required="true"
                                                                                value="mr"
                                                                                aria-describedby="customerSalutationFeedback">

                                                                            <label
                                                                                for="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mr"
                                                                                class="form-check-label--radio">
                                                                                MR
                                                                            </label>
                                                                        </div>


                                                                        <div class="form-check form-check-group__item">
                                                                            <input
                                                                                id="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mrs"
                                                                                type="radio" class="form-check-input"
                                                                                name="dwfrm_shipping_shippingAddress_addressFields_salutations_salutation"
                                                                                required="" aria-required="true"
                                                                                value="mrs"
                                                                                aria-describedby="customerSalutationFeedback">

                                                                            <label
                                                                                for="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mrs"
                                                                                class="form-check-label--radio">
                                                                                MRS
                                                                            </label>
                                                                        </div>

                                                                    </div>

                                                                    <div id="customerSalutationFeedback"
                                                                         class="invalid-feedback feedback--large-spacing-top"></div>
                                                                </div>


                                                                <div class="row">

                                                                    <!-- Honorary Title -->


                                                                    <div class="col-12">
                                                                        <div class="form-group
            required
            dwfrm_shipping_shippingAddress_addressFields_firstName" data-floating-label="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingFirstName">
                                                                                First Name
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control shippingFirstName"
                                                                                   id="shippingFirstName"
                                                                                   data-validate-latin="" value=""
                                                                                   name="user_first_name"
                                                                                   required="" aria-required="true"
                                                                                   maxlength="27"
                                                                                   autocomplete="given-name"
                                                                                   aria-describedby="dwfrm_shipping_shippingAddress_addressFields_firstName-1103657993110">
                                                                            <div class="invalid-feedback"></div>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_firstName-1103657993110"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group
            required
            dwfrm_shipping_shippingAddress_addressFields_lastName" data-floating-label="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingLastName">
                                                                                Last Name
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control shippingLastName"
                                                                                   id="shippingLastName"
                                                                                   data-validate-latin="" value=""
                                                                                   name="user_last_name"
                                                                                   required="" aria-required="true"
                                                                                   maxlength="32"
                                                                                   autocomplete="family-name"
                                                                                   aria-describedby="dwfrm_shipping_shippingAddress_addressFields_lastName-111923446893">
                                                                            <div class="invalid-feedback"></div>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_lastName-111923446893"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Custom Names  -->


                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group
            required
            dwfrm_shipping_shippingAddress_addressFields_address1" data-floating-label="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingAddressOne">
                                                                                Delivery Address (Max 60 Characters)
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control shippingAddressOne pac-target-input"
                                                                                   id="shippingAddressOne"
                                                                                   data-validate-alphanumeric=""
                                                                                   data-validate-max="60"
                                                                                   data-checkout-component="shipping-method-update"
                                                                                   data-address-component="address1"
                                                                                   placeholder="Type your shipping address"
                                                                                   value=""
                                                                                   name="first_address"
                                                                                   required="" aria-required="true"
                                                                                   maxlength="60" autocomplete="off"
                                                                                   aria-describedby="dwfrm_shipping_shippingAddress_addressFields_address1-1014696669245">
                                                                            <div class="invalid-feedback"></div>


                                                                            <span
                                                                                class="tooltip tooltip--field-label tooltip--shipping-address">
    <button type="button" class="tooltip__trigger link" id="toggleID-6685" aria-expanded="false"
            aria-controls="toggleID-6685--target">
        <span class="sr-only">Help</span>
        <svg aria-hidden="true" focusable="false" class="tooltip__trigger-icon icon"><use
                xlink:href="#icon--info"></use></svg>
    </button>
    <div class="tooltip__content body-type--deci bg--grey-7 set--top set--right" id="toggleID-6685--target"
         aria-labelledby="toggleID-6685">




                Please note that Cartier does not ship to P.O. Boxes


    </div>
</span>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_address1-1014696669245"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group

            dwfrm_shipping_shippingAddress_addressFields_address2" data-floating-label="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingAddressTwo">
                                                                                Apartment#/Hotel Room#/Villa# (Max 39
                                                                                Characters)
                                                                            </label>
                                                                            <input type="text"
                                                                                   class="form-control shippingAddressTwo"
                                                                                   id="shippingAddressTwo"
                                                                                   data-validate-alphanumeric=""
                                                                                   data-validate-max="39" value=""
                                                                                   name="second_address"
                                                                                   maxlength="39"
                                                                                   autocomplete="shipping address-line2"
                                                                                   aria-describedby="dwfrm_shipping_shippingAddress_addressFields_address2-1163134638722">
                                                                            <div class="invalid-feedback"></div>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_address2-1163134638722"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group form-group__city
            required
            dwfrm_shipping_shippingAddress_addressFields_city_cityCode" data-floating-label="" data-custom-select="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingAddressCity">
                                                                                Area
                                                                            </label>
                                                                            <select
                                                                                class="form-control form-control--select shippingAddressCity select2-hidden-accessible"
                                                                                id="shippingAddressCity"
                                                                                data-checkout-component="shipping-method-update"
                                                                                name="area"
                                                                                required="" aria-required="true"
                                                                                autocomplete="shipping address-level2"
                                                                                aria-describedby="dwfrm_shipping_shippingAddress_addressFields_city_cityCode-1640922866346"
                                                                                data-select2-id="shippingAddressCity"
                                                                                tabindex="-1" aria-hidden="true">

                                                                                <option value=""
                                                                                        data-select2-id="2"></option>

                                                                                <option value="Abu Dhabi">Abu Dhabi
                                                                                </option>

                                                                                <option value="Abu Dhabi Gate City">Abu
                                                                                    Dhabi Gate City
                                                                                </option>

                                                                                <option value="Abu Hail">Abu Hail
                                                                                </option>

                                                                                <option value="Abu Shagara">Abu
                                                                                    Shagara
                                                                                </option>

                                                                                <option value="Academic City">Academic
                                                                                    City
                                                                                </option>

                                                                                <option value="Ajman">Ajman</option>

                                                                                <option value="Ajman City">Ajman City
                                                                                </option>

                                                                                <option value="Ajman Industrial Area">
                                                                                    Ajman Industrial Area
                                                                                </option>

                                                                                <option value="Al Ain">Al Ain</option>

                                                                                <option value="Al Ajban">Al Ajban
                                                                                </option>

                                                                                <option value="Al Aman">Al Aman</option>

                                                                                <option value="Al Awir">Al Awir</option>

                                                                                <option value="Albarari">Albarari
                                                                                </option>

                                                                                <option value="Al Barsha">Al Barsha
                                                                                </option>

                                                                                <option value="Al Bateen">Al Bateen
                                                                                </option>

                                                                                <option value="Al Butina">Al Butina
                                                                                </option>

                                                                                <option value="Al Darari Area">Al Darari
                                                                                    Area
                                                                                </option>

                                                                                <option value="Al Dhafra Air Base">Al
                                                                                    Dhafra Air Base
                                                                                </option>

                                                                                <option value="Al Dhafrah">Al Dhafrah
                                                                                </option>

                                                                                <option value="Al Falah">Al Falah
                                                                                </option>

                                                                                <option value="Al Falat">Al Falat
                                                                                </option>

                                                                                <option value="Al Safa">Al Safa</option>

                                                                                <option value="Al Gharayen">Al
                                                                                    Gharayen
                                                                                </option>

                                                                                <option value="Al Garhoud">Al Garhoud
                                                                                </option>

                                                                                <option value="Al Gharayen">Al
                                                                                    Gharayen
                                                                                </option>

                                                                                <option value="Al Ghubbaibasi">Al
                                                                                    Ghubbaibasi
                                                                                </option>

                                                                                <option value="Al Hamriya Dubai">Al
                                                                                    Hamriya Dubai
                                                                                </option>

                                                                                <option value="Al Hosn">Al Hosn</option>

                                                                                <option value="Al Ittihad">Al Ittihad
                                                                                </option>

                                                                                <option value="Al Jaddaf">Al Jaddaf
                                                                                </option>

                                                                                <option value="Al Jafiliya">Al
                                                                                    Jafiliya
                                                                                </option>

                                                                                <option value="Al Jaraf">Al Jaraf
                                                                                </option>

                                                                                <option value="Al Mankhool">Al
                                                                                    Mankhool
                                                                                </option>

                                                                                <option value="Al Karamah">Al Karamah
                                                                                </option>

                                                                                <option value="Al Kasba">Al Kasba
                                                                                </option>

                                                                                <option value="Al Khan">Al Khan</option>

                                                                                <option value="Al Khazmiya Area">Al
                                                                                    Khazmiya Area
                                                                                </option>

                                                                                <option value="Al Khubeirah">Al
                                                                                    Khubeirah
                                                                                </option>

                                                                                <option value="Al Madina Riyadiya">Al
                                                                                    Madina Riyadiya
                                                                                </option>

                                                                                <option value="Al Majaz">Al Majaz
                                                                                </option>

                                                                                <option value="Al Majazar">Al Majazar
                                                                                </option>

                                                                                <option value="Al Mamzar">Al Mamzar
                                                                                </option>

                                                                                <option value="Al Manhal">Al Manhal
                                                                                </option>

                                                                                <option value="Al Mankhool">Al
                                                                                    Mankhool
                                                                                </option>

                                                                                <option value="Al Maqtaa">Al Maqtaa
                                                                                </option>

                                                                                <option value="Al Maryah Island">Al
                                                                                    Maryah Island
                                                                                </option>

                                                                                <option value="Al Matar">Al Matar
                                                                                </option>

                                                                                <option value="Al Mina">Al Mina</option>

                                                                                <option value="Al Minhad Air Base">Al
                                                                                    Minhad Air Base
                                                                                </option>

                                                                                <option value="Al Muraqqabat">Al
                                                                                    Muraqqabat
                                                                                </option>

                                                                                <option value="Al Musalla">Al Musalla
                                                                                </option>

                                                                                <option value="Al Mushrif">Al Mushrif
                                                                                </option>

                                                                                <option value="Al Nabba">Al Nabba
                                                                                </option>

                                                                                <option value="Al Nahda">Al Nahda
                                                                                </option>

                                                                                <option value="Al Nahyan">Al Nahyan
                                                                                </option>

                                                                                <option value="Al Nouf Area">Al Nouf
                                                                                    Area
                                                                                </option>

                                                                                <option value="Al Qasimia">Al Qasimia
                                                                                </option>

                                                                                <option value="Al Quoz">Al Quoz</option>

                                                                                <option value="Al Qusais">Al Qusais
                                                                                </option>

                                                                                <option value="Al Raffa">Al Raffa
                                                                                </option>

                                                                                <option value="Al Raha">Al Raha</option>

                                                                                <option value="Al Rahba">Al Rahba
                                                                                </option>

                                                                                <option value="Al Ras">Al Ras</option>

                                                                                <option value="Al Rayhan">Al Rayhan
                                                                                </option>

                                                                                <option value="Al Reef">Al Reef</option>

                                                                                <option value="Al Reem Island">Al Reem
                                                                                    Island
                                                                                </option>

                                                                                <option value="Al Riffa">Al Riffa
                                                                                </option>

                                                                                <option value="Al Rigga">Al Rigga
                                                                                </option>

                                                                                <option value="Al Riqqa">Al Riqqa
                                                                                </option>

                                                                                <option value="Al Rowdah">Al Rowdah
                                                                                </option>

                                                                                <option value="Al Safa">Al Safa</option>

                                                                                <option value="Al Safarat">Al Safarat
                                                                                </option>

                                                                                <option value="Al Sajaa">Al Sajaa
                                                                                </option>

                                                                                <option value="Al Samha">Al Samha
                                                                                </option>

                                                                                <option value="Al Shaba Area">Al Shaba
                                                                                    Area
                                                                                </option>

                                                                                <option value="Al Shahama">Al Shahama
                                                                                </option>

                                                                                <option value="Al Shamkha">Al Shamkha
                                                                                </option>

                                                                                <option value="Al Shawamekh">Al
                                                                                    Shawamekh
                                                                                </option>

                                                                                <option value="Al Shindagha">Al
                                                                                    Shindagha
                                                                                </option>

                                                                                <option value="Al Sila'a">Al Sila'a
                                                                                </option>

                                                                                <option value="Al Soor">Al Soor</option>

                                                                                <option value="Al Sufouh">Al Sufouh
                                                                                </option>

                                                                                <option value="Al Tala Area">Al Tala
                                                                                    Area
                                                                                </option>

                                                                                <option value="Al Taweelah">Al
                                                                                    Taweelah
                                                                                </option>

                                                                                <option value="Al Tawoon">Al Tawoon
                                                                                </option>

                                                                                <option value="Al Twar">Al Twar</option>

                                                                                <option value="Al Wadha">Al Wadha
                                                                                </option>

                                                                                <option value="Al Wahdah">Al Wahdah
                                                                                </option>

                                                                                <option value="Al Warqa">Al Warqa
                                                                                </option>

                                                                                <option value="Al Wasl">Al Wasl</option>

                                                                                <option value="Al Wathba">Al Wathba
                                                                                </option>

                                                                                <option value="Al Zahiyah">Al Zahiyah
                                                                                </option>

                                                                                <option value="Al Zahra Square">Al Zahra
                                                                                    Square
                                                                                </option>

                                                                                <option value="Al Zayani">Al Zayani
                                                                                </option>

                                                                                <option value="Albarari">Albarari
                                                                                </option>

                                                                                <option value="Arabian Ranches">Arabian
                                                                                    Ranches
                                                                                </option>

                                                                                <option value="Bank Street">Bank
                                                                                    Street
                                                                                </option>

                                                                                <option value="Bain Al Jessrain">Bain Al
                                                                                    Jessrain
                                                                                </option>

                                                                                <option value="Baniyas">Baniyas</option>

                                                                                <option value="Baniyas Dubai">Baniyas
                                                                                    Dubai
                                                                                </option>

                                                                                <option value="Bank Street">Bank
                                                                                    Street
                                                                                </option>

                                                                                <option value="Barsha Heights">Barsha
                                                                                    Heights
                                                                                </option>

                                                                                <option value="Buhaira Road">Buhaira
                                                                                    Road
                                                                                </option>

                                                                                <option value="Buhairah Corniche">
                                                                                    Buhairah Corniche
                                                                                </option>

                                                                                <option value="Bur Dubai">Bur Dubai
                                                                                </option>

                                                                                <option value="Business Bay">Business
                                                                                    Bay
                                                                                </option>

                                                                                <option value="Canal District">Canal
                                                                                    District
                                                                                </option>

                                                                                <option value="Corniche Deira">Corniche
                                                                                    Deira
                                                                                </option>

                                                                                <option value="DWC Business Center">DWC
                                                                                    Business Center
                                                                                </option>

                                                                                <option value="Dasman">Dasman</option>

                                                                                <option value="Deira">Deira</option>

                                                                                <option value="Dhaid">Dhaid</option>

                                                                                <option value="Dibba">Dibba</option>

                                                                                <option value="Dubai">Dubai</option>

                                                                                <option value="Dubai Cargo Village">
                                                                                    Dubai Cargo Village
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai Cars And Auto Zone">
                                                                                    Dubai Cars And Auto Zone
                                                                                </option>

                                                                                <option value="Dubai Design District">
                                                                                    Dubai Design District
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai International Financial Center">
                                                                                    Dubai International Financial Center
                                                                                </option>

                                                                                <option value="Dubai Golf City">Dubai
                                                                                    Golf City
                                                                                </option>

                                                                                <option value="Dubai Healthcare City">
                                                                                    Dubai Healthcare City
                                                                                </option>

                                                                                <option value="Dubai Internet City">
                                                                                    Dubai Internet City
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai International Airport">
                                                                                    Dubai International Airport
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai International Financial Center">
                                                                                    Dubai International Financial Center
                                                                                </option>

                                                                                <option value="Dubai Internet City">
                                                                                    Dubai Internet City
                                                                                </option>

                                                                                <option value="Dubai Investment Park">
                                                                                    Dubai Investment Park
                                                                                </option>

                                                                                <option value="Dubai Lagoons">Dubai
                                                                                    Lagoons
                                                                                </option>

                                                                                <option value="Dubai Marina">Dubai
                                                                                    Marina
                                                                                </option>

                                                                                <option value="Dubai Media City">Dubai
                                                                                    Media City
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai Metal And Commodity Center">
                                                                                    Dubai Metal And Commodity Center
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai Metal And Commodity City">
                                                                                    Dubai Metal And Commodity City
                                                                                </option>

                                                                                <option value="Dubai Outlet City">Dubai
                                                                                    Outlet City
                                                                                </option>

                                                                                <option value="Dubai Production City">
                                                                                    Dubai Production City
                                                                                </option>

                                                                                <option value="Dubai Silicon Oasis">
                                                                                    Dubai Silicon Oasis
                                                                                </option>

                                                                                <option value="Dubai Sports City">Dubai
                                                                                    Sports City
                                                                                </option>

                                                                                <option value="Dubai Studio City">Dubai
                                                                                    Studio City
                                                                                </option>

                                                                                <option value="Dubai Sustainable City">
                                                                                    Dubai Sustainable City
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai World Central (DWC)">
                                                                                    Dubai World Central (DWC)
                                                                                </option>

                                                                                <option
                                                                                    value="Dubai World Trade Centre">
                                                                                    Dubai World Trade Centre
                                                                                </option>

                                                                                <option value="Dubailand">Dubailand
                                                                                </option>

                                                                                <option value="Emaar Business Park">
                                                                                    Emaar Business Park
                                                                                </option>

                                                                                <option value="Emirates Hills">Emirates
                                                                                    Hills
                                                                                </option>

                                                                                <option value="Emirates Palace">Emirates
                                                                                    Palace
                                                                                </option>

                                                                                <option value="Falaj Al Mualla">Falaj Al
                                                                                    Mualla
                                                                                </option>

                                                                                <option value="Falcon City">Falcon
                                                                                    City
                                                                                </option>

                                                                                <option value="Festival City">Festival
                                                                                    City
                                                                                </option>

                                                                                <option value="Fujirah">Fujairah
                                                                                </option>

                                                                                <option value="Ghayathi">Ghayathi
                                                                                </option>

                                                                                <option value="Global Village">Global
                                                                                    Village
                                                                                </option>

                                                                                <option value="Green Community">Green
                                                                                    Community
                                                                                </option>

                                                                                <option value="Greens">Greens</option>

                                                                                <option value="Habshan">Habshan</option>

                                                                                <option value="Hadbat Al Zafranah">
                                                                                    Hadbat Al Zafranah
                                                                                </option>

                                                                                <option value="Halwan">Halwan</option>

                                                                                <option
                                                                                    value="Hamriya Phase One Sharjah">
                                                                                    Hamriya Phase One Sharjah
                                                                                </option>

                                                                                <option
                                                                                    value="Hamriya Phase Two Sharjah">
                                                                                    Hamriya Phase Two Sharjah
                                                                                </option>

                                                                                <option value="Hatta">Hatta</option>

                                                                                <option value="Hor Al Anz">Hor Al Anz
                                                                                </option>

                                                                                <option value="Humanitarian City">
                                                                                    Humanitarian City
                                                                                </option>

                                                                                <option value="IMPZ">IMPZ</option>

                                                                                <option value="Icad 1">Icad 1</option>

                                                                                <option value="Icad 2">Icad 2</option>

                                                                                <option value="Icad 3">Icad 3</option>

                                                                                <option value="Icad 4">Icad 4</option>

                                                                                <option value="International City">
                                                                                    International City
                                                                                </option>

                                                                                <option value="Jcity.sh.AN">Jamal Abdul
                                                                                    Nasar Road
                                                                                </option>

                                                                                <option value="Jebel Ali">Jebel Ali
                                                                                </option>

                                                                                <option value="Jebel Ali Gardens">Jebel
                                                                                    Ali Gardens
                                                                                </option>

                                                                                <option
                                                                                    value="Jebel Ali Industrial Area">
                                                                                    Jebel Ali Industrial Area
                                                                                </option>

                                                                                <option value="Jebel Ali Lob 18-19">
                                                                                    Jebel Ali Lob 18-19
                                                                                </option>

                                                                                <option value="Jebel Ali View Towers">
                                                                                    Jebel Ali View Towers
                                                                                </option>

                                                                                <option value="Jebel Ali Village">Jebel
                                                                                    Ali Village
                                                                                </option>

                                                                                <option value="Jumeirah">Jumeirah
                                                                                </option>

                                                                                <option value="Jumeirah Golf Estate">
                                                                                    Jumeirah Golf Estate
                                                                                </option>

                                                                                <option value="Jumeirah Lake Towers">
                                                                                    Jumeirah Lake Towers
                                                                                </option>

                                                                                <option value="Jumeirah Village">
                                                                                    Jumeirah Village
                                                                                </option>

                                                                                <option value="Kalba">Kalba</option>

                                                                                <option value="Karama Area">Karama
                                                                                    Area
                                                                                </option>

                                                                                <option value="Khalidiya">Khalidiya
                                                                                </option>

                                                                                <option value="Khalifa City A">Khalifa
                                                                                    City A
                                                                                </option>

                                                                                <option value="Khor Kheir">Khor Kheir
                                                                                </option>

                                                                                <option value="Khorfakkan">Khorfakkan
                                                                                </option>

                                                                                <option value="King Faisal Road">King
                                                                                    Faisal Road
                                                                                </option>

                                                                                <option value="Knowledge Village">
                                                                                    Knowledge Village
                                                                                </option>

                                                                                <option value="Lagoons">Lagoons</option>

                                                                                <option value="Logistics City">Logistics
                                                                                    City
                                                                                </option>

                                                                                <option value="Mafraq">Mafraq</option>

                                                                                <option value="Marina Mall">Marina
                                                                                    Mall
                                                                                </option>

                                                                                <option value="Maritime City">Maritime
                                                                                    City
                                                                                </option>

                                                                                <option value="Masafi">Masafi</option>

                                                                                <option value="Masdar City">Masdar
                                                                                    City
                                                                                </option>

                                                                                <option value="Meydan City">Meydan
                                                                                    City
                                                                                </option>

                                                                                <option value="Mina Jebel Ali">Mina
                                                                                    Jebel Ali
                                                                                </option>

                                                                                <option value="Mina Zayed">Mina Zayed
                                                                                </option>

                                                                                <option value="Mirdif">Mirdif</option>

                                                                                <option value="Mohamed Bin Zayed City">
                                                                                    Mohamed Bin Zayed City
                                                                                </option>

                                                                                <option value="Motor City">Motor City
                                                                                </option>

                                                                                <option value="Muroor">Muroor</option>

                                                                                <option value="city.ab.MIF">Mushrif
                                                                                </option>

                                                                                <option value="Mussafah">Mussafah
                                                                                </option>

                                                                                <option value="Muteena">Muteena</option>

                                                                                <option value="Muteena Abu Dhabi">
                                                                                    Muteena Abu Dhabi
                                                                                </option>

                                                                                <option value="Nad Al Sheba">Nad Al
                                                                                    Sheba
                                                                                </option>

                                                                                <option value="Nad Al Sheba 3">Nad Al
                                                                                    Sheba 3
                                                                                </option>

                                                                                <option value="Nad Al Sheba 3">Nad Al
                                                                                    Sheba 3
                                                                                </option>

                                                                                <option value="Naif">Naif</option>

                                                                                <option value="Nakheel">Nakheel</option>

                                                                                <option value="Oud Al Muteena">Oud Al
                                                                                    Muteena
                                                                                </option>

                                                                                <option value="Oud Metha">Oud Metha
                                                                                </option>

                                                                                <option value="Outsource Zone">Outsource
                                                                                    Zone
                                                                                </option>

                                                                                <option value="Palm Deira">Palm Deira
                                                                                </option>

                                                                                <option value="Palm Jebel Ali">Palm
                                                                                    Jebel Ali
                                                                                </option>

                                                                                <option value="Palm Jumeirah">Palm
                                                                                    Jumeirah
                                                                                </option>

                                                                                <option value="Port Saeed">Port Saeed
                                                                                </option>

                                                                                <option value="Qarayen">Qarayen</option>

                                                                                <option value="Ramla">Ramla</option>

                                                                                <option value="Ras Al Khaimah">Ras Al
                                                                                    Khaimah
                                                                                </option>

                                                                                <option value="Ras Al Khaimah City">Ras
                                                                                    Al Khaimah City
                                                                                </option>

                                                                                <option value="Ras Al Khor">Ras Al
                                                                                    Khor
                                                                                </option>

                                                                                <option value="Rashidiya">Rashidiya
                                                                                </option>

                                                                                <option value="Riggat Al Buteen">Riggat
                                                                                    Al Buteen
                                                                                </option>

                                                                                <option value="Saadiyat Island">Saadiyat
                                                                                    Island
                                                                                </option>

                                                                                <option value="Satwa">Satwa</option>

                                                                                <option value="Shakboot City">Shakboot
                                                                                    City
                                                                                </option>

                                                                                <option value="Sharjah">Sharjah</option>

                                                                                <option value="Sharjah Airport">Sharjah
                                                                                    Airport
                                                                                </option>

                                                                                <option value="Sharjah City">Sharjah
                                                                                    City
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Eight">
                                                                                    Sharjah Indl Area Eight
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Eighteen">
                                                                                    Sharjah Indl Area Eighteen
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Eleven">
                                                                                    Sharjah Indl Area Eleven
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Fifteen">
                                                                                    Sharjah Indl Area Fifteen
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Five">
                                                                                    Sharjah Indl Area Five
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Four">
                                                                                    Sharjah Indl Area Four
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Fourteen">
                                                                                    Sharjah Indl Area Fourteen
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Nine">
                                                                                    Sharjah Indl Area Nine
                                                                                </option>

                                                                                <option value="Sharjah Indl Area One">
                                                                                    Sharjah Indl Area One
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Seven">
                                                                                    Sharjah Indl Area Seven
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Seventeen">
                                                                                    Sharjah Indl Area Seventeen
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Six">
                                                                                    Sharjah Indl Area Six
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Sixteen">
                                                                                    Sharjah Indl Area Sixteen
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Ten">
                                                                                    Sharjah Indl Area Ten
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Thirteen">
                                                                                    Sharjah Indl Area Thirteen
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Three">
                                                                                    Sharjah Indl Area Three
                                                                                </option>

                                                                                <option
                                                                                    value="Sharjah Indl Area Twelve">
                                                                                    Sharjah Indl Area Twelve
                                                                                </option>

                                                                                <option value="Sharjah Indl Area Two">
                                                                                    Sharjah Indl Area Two
                                                                                </option>

                                                                                <option value="Sharjah Port Khalid">
                                                                                    Sharjah Port Khalid
                                                                                </option>

                                                                                <option value="Sharjah Sea Port">Sharjah
                                                                                    Sea Port
                                                                                </option>

                                                                                <option value="Sheikh Zayed Road">Sheikh
                                                                                    Zayed Road
                                                                                </option>

                                                                                <option value="Sufouh Gardens">Sufouh
                                                                                    Gardens
                                                                                </option>

                                                                                <option value="Sweihan">Sweihan</option>

                                                                                <option value="Technopark">Technopark
                                                                                </option>

                                                                                <option value="Texmas">Texmas</option>

                                                                                <option value="Umm Al Nar">Umm Al Nar
                                                                                </option>

                                                                                <option value="Umm Al Quwain">Umm Al
                                                                                    Quwain
                                                                                </option>

                                                                                <option value="Umm Al Quwain City">Umm
                                                                                    Al Quwain City
                                                                                </option>

                                                                                <option value="Umm Al Sheif">Umm Al
                                                                                    Sheif
                                                                                </option>

                                                                                <option value="Umm Hurair">Umm Hurair
                                                                                </option>

                                                                                <option value="Umm Ramool">Umm Ramool
                                                                                </option>

                                                                                <option value="Umm Suqeim">Umm Suqeim
                                                                                </option>

                                                                                <option value="Warsan">Warsan</option>

                                                                                <option value="Wathba">Wathba</option>

                                                                                <option value="Yarmook">Yarmook</option>

                                                                                <option value="Yas Island">Yas Island
                                                                                </option>

                                                                                <option value="Za'abeel">Za'abeel
                                                                                </option>

                                                                                <option value="Zaab">Zaab</option>

                                                                            </select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" data-select2-id="1"
                                                                                style="width: auto;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-disabled="false"
                                                                                        aria-labelledby="select2-shippingAddressCity-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-shippingAddressCity-container"
                                                                                            role="textbox"
                                                                                            aria-readonly="true"
                                                                                            title=" "> </span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span>
                                                                            <div class="invalid-feedback"></div>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_city_cityCode-1640922866346"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div
                                                                            class="form-group required dwfrm_shipping_shippingAddress_addressFields_country_countryCode set--floating-label"
                                                                            data-floating-label="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingCountry">
                                                                                Country
                                                                            </label>
                                                                            <select
                                                                                class="form-control shippingCountry custom-select"
                                                                                id="shippingCountry"
                                                                                data-checkout-component="shipping-method-update"
                                                                                name="country_code"
                                                                                required="" aria-required="true"
                                                                                autocomplete="shipping country"
                                                                                aria-describedby="dwfrm_shipping_shippingAddress_addressFields_country_countryCode-291660805933">

                                                                                <option value="AE">United Arab
                                                                                    Emirates
                                                                                </option>

                                                                            </select>
                                                                            <div class="invalid-feedback"></div>


                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_country_countryCode-291660805933"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group
            required
            dwfrm_shipping_shippingAddress_addressFields_states_stateCode" data-floating-label="" data-custom-select="">
                                                                            <label class="form-control-label"
                                                                                   for="shippingState">
                                                                                Emirate
                                                                            </label>
                                                                            <select
                                                                                class="form-control shippingState custom-select select2-hidden-accessible"
                                                                                id="shippingState"
                                                                                data-checkout-component="shipping-method-update"
                                                                                name="city_code"
                                                                                required="" aria-required="true"
                                                                                autocomplete="shipping address-level1"
                                                                                data-autocomplete-custom=""
                                                                                aria-describedby="dwfrm_shipping_shippingAddress_addressFields_states_stateCode-43096523279"
                                                                                data-select2-id="shippingState"
                                                                                tabindex="-1" aria-hidden="true">

                                                                                <option value=""
                                                                                        data-select2-id="4"></option>

                                                                                <option value="AD">Abu Dhabi</option>

                                                                                <option value="AJ">Ajman</option>

                                                                                <option value="DU">Dubai</option>

                                                                                <option value="FU">Fujairah</option>

                                                                                <option value="RK">Ras al Khaimah
                                                                                </option>

                                                                                <option value="SH">Sharjah</option>

                                                                                <option value="UK">Umm Al Quawain
                                                                                </option>

                                                                                <option value="AA">Al Ain</option>

                                                                            </select><span
                                                                                class="select2 select2-container select2-container--default"
                                                                                dir="ltr" data-select2-id="3"
                                                                                style="width: auto;"><span
                                                                                    class="selection"><span
                                                                                        class="select2-selection select2-selection--single"
                                                                                        role="combobox"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"
                                                                                        tabindex="0"
                                                                                        aria-disabled="false"
                                                                                        aria-labelledby="select2-shippingState-container"><span
                                                                                            class="select2-selection__rendered"
                                                                                            id="select2-shippingState-container"
                                                                                            role="textbox"
                                                                                            aria-readonly="true"
                                                                                            title=" "> </span><span
                                                                                            class="select2-selection__arrow"
                                                                                            role="presentation"><b
                                                                                                role="presentation"></b></span></span></span><span
                                                                                    class="dropdown-wrapper"
                                                                                    aria-hidden="true"></span></span>
                                                                            <div class="invalid-feedback"></div>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_states_stateCode-43096523279"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" class="customer-email" value=""
                                                                           name="dwfrm_shipping_shippingAddress_contactInfoFields_email"
                                                                           required="" aria-required="true"
                                                                           maxlength="50"
                                                                           pattern="^[\w.!#$%\/'*+=?^`{|}~-]+@[\w.-]+\.[\w]{2,6}$"
                                                                           aria-describedby="dwfrm_shipping_shippingAddress_contactInfoFields_email-1620356253012">
                                                                    <div
                                                                        id="dwfrm_shipping_shippingAddress_contactInfoFields_email-1620356253012"
                                                                        class="invalid-feedback"></div>
                                                                </div>


                                                                <div class="checkout-stage__phone-number-field">


                                                                    <div
                                                                        class="iti__container form-group form-combo flex flex-flow-wrap set--intl-tel-ready"
                                                                        data-intl-container="">
                                                                        <label
                                                                            class="iti__dropdown-label form-control-label">
                                                                            Prefix
                                                                        </label>

                                                                        <div
                                                                            class="iti__dropdown-placeholder form-control form-control--select form-control--combo form-control--combo-no-border font-weight--light"></div>


                                                                        <!-- Phone Number -->
                                                                        <div class="form-group--no-spacing flex-grow-1
        required" data-floating-label="">
                                                                            <label
                                                                                class="iti__input-label form-control-label"
                                                                                for="phone">
                                                                                Phone
                                                                            </label>

                                                                            <div
                                                                                class="iti iti--allow-dropdown iti--separate-dial-code">
                                                                                <div class="iti__flag-container">
                                                                                    <div class="iti__selected-flag"
                                                                                         role="combobox"
                                                                                         aria-controls="iti-0__country-listbox"
                                                                                         aria-owns="iti-0__country-listbox"
                                                                                         aria-expanded="false"
                                                                                         tabindex="0"
                                                                                         title="United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;): +971"
                                                                                         aria-activedescendant="iti-0__item-ae-preferred">
                                                                                        <div
                                                                                            class="iti__flag iti__ae"></div>
                                                                                        <div
                                                                                            class="iti__selected-dial-code">
                                                                                            +971
                                                                                        </div>
                                                                                        <div class="iti__arrow"></div>
                                                                                    </div>
                                                                                    <ul class="iti__country-list iti__hide"
                                                                                        id="iti-0__country-listbox"
                                                                                        role="listbox"
                                                                                        aria-label="List of countries">
                                                                                        <li class="iti__country iti__preferred iti__active"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ae-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="971"
                                                                                            data-country-code="ae"
                                                                                            aria-selected="true">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ae"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+971</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__preferred"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bh-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="973"
                                                                                            data-country-code="bh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bahrain (&#x202B;البحرين&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+973</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__preferred"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-om-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="968"
                                                                                            data-country-code="om"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__om"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Oman (&#x202B;عُمان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+968</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__preferred"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kw-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="965"
                                                                                            data-country-code="kw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kuwait (&#x202B;الكويت&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+965</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__preferred"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-qa-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="974"
                                                                                            data-country-code="qa"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__qa"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Qatar (&#x202B;قطر&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+974</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__preferred"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sa-preferred"
                                                                                            role="option"
                                                                                            data-dial-code="966"
                                                                                            data-country-code="sa"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sa"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+966</span>
                                                                                        </li>
                                                                                        <li class="iti__divider"
                                                                                            role="separator"
                                                                                            aria-disabled="true"></li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-af"
                                                                                            role="option"
                                                                                            data-dial-code="93"
                                                                                            data-country-code="af"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__af"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Afghanistan (&#x202B;افغانستان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+93</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-al"
                                                                                            role="option"
                                                                                            data-dial-code="355"
                                                                                            data-country-code="al"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__al"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Albania (Shqipëri)</span><span
                                                                                                class="iti__dial-code">+355</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-dz"
                                                                                            role="option"
                                                                                            data-dial-code="213"
                                                                                            data-country-code="dz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__dz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Algeria (&#x202B;الجزائر&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+213</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-as"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="as"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__as"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">American Samoa</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ad"
                                                                                            role="option"
                                                                                            data-dial-code="376"
                                                                                            data-country-code="ad"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ad"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Andorra</span><span
                                                                                                class="iti__dial-code">+376</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ao"
                                                                                            role="option"
                                                                                            data-dial-code="244"
                                                                                            data-country-code="ao"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ao"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Angola</span><span
                                                                                                class="iti__dial-code">+244</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ai"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="ai"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ai"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Anguilla</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ag"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="ag"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ag"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Antigua and Barbuda</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ar"
                                                                                            role="option"
                                                                                            data-dial-code="54"
                                                                                            data-country-code="ar"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ar"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Argentina</span><span
                                                                                                class="iti__dial-code">+54</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-am"
                                                                                            role="option"
                                                                                            data-dial-code="374"
                                                                                            data-country-code="am"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__am"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Armenia (Հայաստան)</span><span
                                                                                                class="iti__dial-code">+374</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-aw"
                                                                                            role="option"
                                                                                            data-dial-code="297"
                                                                                            data-country-code="aw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__aw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Aruba</span><span
                                                                                                class="iti__dial-code">+297</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ac"
                                                                                            role="option"
                                                                                            data-dial-code="247"
                                                                                            data-country-code="ac"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ac"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ascension Island</span><span
                                                                                                class="iti__dial-code">+247</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-au"
                                                                                            role="option"
                                                                                            data-dial-code="61"
                                                                                            data-country-code="au"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__au"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Australia</span><span
                                                                                                class="iti__dial-code">+61</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-at"
                                                                                            role="option"
                                                                                            data-dial-code="43"
                                                                                            data-country-code="at"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__at"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Austria (Österreich)</span><span
                                                                                                class="iti__dial-code">+43</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-az"
                                                                                            role="option"
                                                                                            data-dial-code="994"
                                                                                            data-country-code="az"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__az"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Azerbaijan (Azərbaycan)</span><span
                                                                                                class="iti__dial-code">+994</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bs"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="bs"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bs"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bahamas</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bh"
                                                                                            role="option"
                                                                                            data-dial-code="973"
                                                                                            data-country-code="bh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bahrain (&#x202B;البحرين&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+973</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bd"
                                                                                            role="option"
                                                                                            data-dial-code="880"
                                                                                            data-country-code="bd"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bd"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bangladesh (বাংলাদেশ)</span><span
                                                                                                class="iti__dial-code">+880</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bb"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="bb"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bb"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Barbados</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-by"
                                                                                            role="option"
                                                                                            data-dial-code="375"
                                                                                            data-country-code="by"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__by"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Belarus (Беларусь)</span><span
                                                                                                class="iti__dial-code">+375</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-be"
                                                                                            role="option"
                                                                                            data-dial-code="32"
                                                                                            data-country-code="be"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__be"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Belgium (België)</span><span
                                                                                                class="iti__dial-code">+32</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bz"
                                                                                            role="option"
                                                                                            data-dial-code="501"
                                                                                            data-country-code="bz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Belize</span><span
                                                                                                class="iti__dial-code">+501</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bj"
                                                                                            role="option"
                                                                                            data-dial-code="229"
                                                                                            data-country-code="bj"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bj"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Benin (Bénin)</span><span
                                                                                                class="iti__dial-code">+229</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bm"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="bm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bermuda</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bt"
                                                                                            role="option"
                                                                                            data-dial-code="975"
                                                                                            data-country-code="bt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bhutan (འབྲུག)</span><span
                                                                                                class="iti__dial-code">+975</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bo"
                                                                                            role="option"
                                                                                            data-dial-code="591"
                                                                                            data-country-code="bo"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bo"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bolivia</span><span
                                                                                                class="iti__dial-code">+591</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ba"
                                                                                            role="option"
                                                                                            data-dial-code="387"
                                                                                            data-country-code="ba"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ba"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span
                                                                                                class="iti__dial-code">+387</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bw"
                                                                                            role="option"
                                                                                            data-dial-code="267"
                                                                                            data-country-code="bw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Botswana</span><span
                                                                                                class="iti__dial-code">+267</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-br"
                                                                                            role="option"
                                                                                            data-dial-code="55"
                                                                                            data-country-code="br"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__br"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Brazil (Brasil)</span><span
                                                                                                class="iti__dial-code">+55</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-io"
                                                                                            role="option"
                                                                                            data-dial-code="246"
                                                                                            data-country-code="io"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__io"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">British Indian Ocean Territory</span><span
                                                                                                class="iti__dial-code">+246</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-vg"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="vg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__vg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">British Virgin Islands</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bn"
                                                                                            role="option"
                                                                                            data-dial-code="673"
                                                                                            data-country-code="bn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Brunei</span><span
                                                                                                class="iti__dial-code">+673</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bg"
                                                                                            role="option"
                                                                                            data-dial-code="359"
                                                                                            data-country-code="bg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Bulgaria (България)</span><span
                                                                                                class="iti__dial-code">+359</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bf"
                                                                                            role="option"
                                                                                            data-dial-code="226"
                                                                                            data-country-code="bf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Burkina Faso</span><span
                                                                                                class="iti__dial-code">+226</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bi"
                                                                                            role="option"
                                                                                            data-dial-code="257"
                                                                                            data-country-code="bi"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bi"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Burundi (Uburundi)</span><span
                                                                                                class="iti__dial-code">+257</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kh"
                                                                                            role="option"
                                                                                            data-dial-code="855"
                                                                                            data-country-code="kh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cambodia (កម្ពុជា)</span><span
                                                                                                class="iti__dial-code">+855</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cm"
                                                                                            role="option"
                                                                                            data-dial-code="237"
                                                                                            data-country-code="cm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cameroon (Cameroun)</span><span
                                                                                                class="iti__dial-code">+237</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ca"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="ca"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ca"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Canada</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cv"
                                                                                            role="option"
                                                                                            data-dial-code="238"
                                                                                            data-country-code="cv"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cv"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cape Verde (Kabu Verdi)</span><span
                                                                                                class="iti__dial-code">+238</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bq"
                                                                                            role="option"
                                                                                            data-dial-code="599"
                                                                                            data-country-code="bq"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bq"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Caribbean Netherlands</span><span
                                                                                                class="iti__dial-code">+599</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ky"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="ky"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ky"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cayman Islands</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cf"
                                                                                            role="option"
                                                                                            data-dial-code="236"
                                                                                            data-country-code="cf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Central African Republic (République centrafricaine)</span><span
                                                                                                class="iti__dial-code">+236</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-td"
                                                                                            role="option"
                                                                                            data-dial-code="235"
                                                                                            data-country-code="td"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__td"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Chad (Tchad)</span><span
                                                                                                class="iti__dial-code">+235</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cl"
                                                                                            role="option"
                                                                                            data-dial-code="56"
                                                                                            data-country-code="cl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Chile</span><span
                                                                                                class="iti__dial-code">+56</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cn"
                                                                                            role="option"
                                                                                            data-dial-code="86"
                                                                                            data-country-code="cn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">China (中国)</span><span
                                                                                                class="iti__dial-code">+86</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cx"
                                                                                            role="option"
                                                                                            data-dial-code="61"
                                                                                            data-country-code="cx"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cx"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Christmas Island</span><span
                                                                                                class="iti__dial-code">+61</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cc"
                                                                                            role="option"
                                                                                            data-dial-code="61"
                                                                                            data-country-code="cc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cocos (Keeling) Islands</span><span
                                                                                                class="iti__dial-code">+61</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-co"
                                                                                            role="option"
                                                                                            data-dial-code="57"
                                                                                            data-country-code="co"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__co"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Colombia</span><span
                                                                                                class="iti__dial-code">+57</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-km"
                                                                                            role="option"
                                                                                            data-dial-code="269"
                                                                                            data-country-code="km"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__km"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Comoros (&#x202B;جزر القمر&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+269</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cd"
                                                                                            role="option"
                                                                                            data-dial-code="243"
                                                                                            data-country-code="cd"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cd"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span
                                                                                                class="iti__dial-code">+243</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cg"
                                                                                            role="option"
                                                                                            data-dial-code="242"
                                                                                            data-country-code="cg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Congo (Republic) (Congo-Brazzaville)</span><span
                                                                                                class="iti__dial-code">+242</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ck"
                                                                                            role="option"
                                                                                            data-dial-code="682"
                                                                                            data-country-code="ck"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ck"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cook Islands</span><span
                                                                                                class="iti__dial-code">+682</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cr"
                                                                                            role="option"
                                                                                            data-dial-code="506"
                                                                                            data-country-code="cr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Costa Rica</span><span
                                                                                                class="iti__dial-code">+506</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ci"
                                                                                            role="option"
                                                                                            data-dial-code="225"
                                                                                            data-country-code="ci"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ci"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Côte d’Ivoire</span><span
                                                                                                class="iti__dial-code">+225</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-hr"
                                                                                            role="option"
                                                                                            data-dial-code="385"
                                                                                            data-country-code="hr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__hr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Croatia (Hrvatska)</span><span
                                                                                                class="iti__dial-code">+385</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cu"
                                                                                            role="option"
                                                                                            data-dial-code="53"
                                                                                            data-country-code="cu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cuba</span><span
                                                                                                class="iti__dial-code">+53</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cw"
                                                                                            role="option"
                                                                                            data-dial-code="599"
                                                                                            data-country-code="cw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Curaçao</span><span
                                                                                                class="iti__dial-code">+599</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cy"
                                                                                            role="option"
                                                                                            data-dial-code="357"
                                                                                            data-country-code="cy"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cy"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Cyprus (Κύπρος)</span><span
                                                                                                class="iti__dial-code">+357</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-cz"
                                                                                            role="option"
                                                                                            data-dial-code="420"
                                                                                            data-country-code="cz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__cz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Czech Republic (Česká republika)</span><span
                                                                                                class="iti__dial-code">+420</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-dk"
                                                                                            role="option"
                                                                                            data-dial-code="45"
                                                                                            data-country-code="dk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__dk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Denmark (Danmark)</span><span
                                                                                                class="iti__dial-code">+45</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-dj"
                                                                                            role="option"
                                                                                            data-dial-code="253"
                                                                                            data-country-code="dj"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__dj"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Djibouti</span><span
                                                                                                class="iti__dial-code">+253</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-dm"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="dm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__dm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Dominica</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-do"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="do"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__do"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Dominican Republic (República Dominicana)</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ec"
                                                                                            role="option"
                                                                                            data-dial-code="593"
                                                                                            data-country-code="ec"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ec"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ecuador</span><span
                                                                                                class="iti__dial-code">+593</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-eg"
                                                                                            role="option"
                                                                                            data-dial-code="20"
                                                                                            data-country-code="eg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__eg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Egypt (&#x202B;مصر&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+20</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sv"
                                                                                            role="option"
                                                                                            data-dial-code="503"
                                                                                            data-country-code="sv"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sv"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">El Salvador</span><span
                                                                                                class="iti__dial-code">+503</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gq"
                                                                                            role="option"
                                                                                            data-dial-code="240"
                                                                                            data-country-code="gq"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gq"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span
                                                                                                class="iti__dial-code">+240</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-er"
                                                                                            role="option"
                                                                                            data-dial-code="291"
                                                                                            data-country-code="er"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__er"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Eritrea</span><span
                                                                                                class="iti__dial-code">+291</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ee"
                                                                                            role="option"
                                                                                            data-dial-code="372"
                                                                                            data-country-code="ee"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ee"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Estonia (Eesti)</span><span
                                                                                                class="iti__dial-code">+372</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sz"
                                                                                            role="option"
                                                                                            data-dial-code="268"
                                                                                            data-country-code="sz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Eswatini</span><span
                                                                                                class="iti__dial-code">+268</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-et"
                                                                                            role="option"
                                                                                            data-dial-code="251"
                                                                                            data-country-code="et"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__et"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ethiopia</span><span
                                                                                                class="iti__dial-code">+251</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fk"
                                                                                            role="option"
                                                                                            data-dial-code="500"
                                                                                            data-country-code="fk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Falkland Islands (Islas Malvinas)</span><span
                                                                                                class="iti__dial-code">+500</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fo"
                                                                                            role="option"
                                                                                            data-dial-code="298"
                                                                                            data-country-code="fo"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fo"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Faroe Islands (Føroyar)</span><span
                                                                                                class="iti__dial-code">+298</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fj"
                                                                                            role="option"
                                                                                            data-dial-code="679"
                                                                                            data-country-code="fj"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fj"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Fiji</span><span
                                                                                                class="iti__dial-code">+679</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fi"
                                                                                            role="option"
                                                                                            data-dial-code="358"
                                                                                            data-country-code="fi"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fi"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Finland (Suomi)</span><span
                                                                                                class="iti__dial-code">+358</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fr"
                                                                                            role="option"
                                                                                            data-dial-code="33"
                                                                                            data-country-code="fr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">France</span><span
                                                                                                class="iti__dial-code">+33</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gf"
                                                                                            role="option"
                                                                                            data-dial-code="594"
                                                                                            data-country-code="gf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">French Guiana (Guyane française)</span><span
                                                                                                class="iti__dial-code">+594</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pf"
                                                                                            role="option"
                                                                                            data-dial-code="689"
                                                                                            data-country-code="pf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">French Polynesia (Polynésie française)</span><span
                                                                                                class="iti__dial-code">+689</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ga"
                                                                                            role="option"
                                                                                            data-dial-code="241"
                                                                                            data-country-code="ga"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ga"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Gabon</span><span
                                                                                                class="iti__dial-code">+241</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gm"
                                                                                            role="option"
                                                                                            data-dial-code="220"
                                                                                            data-country-code="gm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Gambia</span><span
                                                                                                class="iti__dial-code">+220</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ge"
                                                                                            role="option"
                                                                                            data-dial-code="995"
                                                                                            data-country-code="ge"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ge"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Georgia (საქართველო)</span><span
                                                                                                class="iti__dial-code">+995</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-de"
                                                                                            role="option"
                                                                                            data-dial-code="49"
                                                                                            data-country-code="de"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__de"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Germany (Deutschland)</span><span
                                                                                                class="iti__dial-code">+49</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gh"
                                                                                            role="option"
                                                                                            data-dial-code="233"
                                                                                            data-country-code="gh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ghana (Gaana)</span><span
                                                                                                class="iti__dial-code">+233</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gi"
                                                                                            role="option"
                                                                                            data-dial-code="350"
                                                                                            data-country-code="gi"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gi"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Gibraltar</span><span
                                                                                                class="iti__dial-code">+350</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gr"
                                                                                            role="option"
                                                                                            data-dial-code="30"
                                                                                            data-country-code="gr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Greece (Ελλάδα)</span><span
                                                                                                class="iti__dial-code">+30</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gl"
                                                                                            role="option"
                                                                                            data-dial-code="299"
                                                                                            data-country-code="gl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Greenland (Kalaallit Nunaat)</span><span
                                                                                                class="iti__dial-code">+299</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gd"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="gd"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gd"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Grenada</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gp"
                                                                                            role="option"
                                                                                            data-dial-code="590"
                                                                                            data-country-code="gp"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gp"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guadeloupe</span><span
                                                                                                class="iti__dial-code">+590</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gu"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="gu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guam</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gt"
                                                                                            role="option"
                                                                                            data-dial-code="502"
                                                                                            data-country-code="gt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guatemala</span><span
                                                                                                class="iti__dial-code">+502</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gg"
                                                                                            role="option"
                                                                                            data-dial-code="44"
                                                                                            data-country-code="gg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guernsey</span><span
                                                                                                class="iti__dial-code">+44</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gn"
                                                                                            role="option"
                                                                                            data-dial-code="224"
                                                                                            data-country-code="gn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guinea (Guinée)</span><span
                                                                                                class="iti__dial-code">+224</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gw"
                                                                                            role="option"
                                                                                            data-dial-code="245"
                                                                                            data-country-code="gw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guinea-Bissau (Guiné Bissau)</span><span
                                                                                                class="iti__dial-code">+245</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gy"
                                                                                            role="option"
                                                                                            data-dial-code="592"
                                                                                            data-country-code="gy"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gy"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Guyana</span><span
                                                                                                class="iti__dial-code">+592</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ht"
                                                                                            role="option"
                                                                                            data-dial-code="509"
                                                                                            data-country-code="ht"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ht"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Haiti</span><span
                                                                                                class="iti__dial-code">+509</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-hn"
                                                                                            role="option"
                                                                                            data-dial-code="504"
                                                                                            data-country-code="hn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__hn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Honduras</span><span
                                                                                                class="iti__dial-code">+504</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-hk"
                                                                                            role="option"
                                                                                            data-dial-code="852"
                                                                                            data-country-code="hk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__hk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Hong Kong (香港)</span><span
                                                                                                class="iti__dial-code">+852</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-hu"
                                                                                            role="option"
                                                                                            data-dial-code="36"
                                                                                            data-country-code="hu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__hu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Hungary (Magyarország)</span><span
                                                                                                class="iti__dial-code">+36</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-is"
                                                                                            role="option"
                                                                                            data-dial-code="354"
                                                                                            data-country-code="is"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__is"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Iceland (Ísland)</span><span
                                                                                                class="iti__dial-code">+354</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-in"
                                                                                            role="option"
                                                                                            data-dial-code="91"
                                                                                            data-country-code="in"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__in"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">India (भारत)</span><span
                                                                                                class="iti__dial-code">+91</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-id"
                                                                                            role="option"
                                                                                            data-dial-code="62"
                                                                                            data-country-code="id"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__id"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Indonesia</span><span
                                                                                                class="iti__dial-code">+62</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ir"
                                                                                            role="option"
                                                                                            data-dial-code="98"
                                                                                            data-country-code="ir"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ir"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Iran (&#x202B;ایران&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+98</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-iq"
                                                                                            role="option"
                                                                                            data-dial-code="964"
                                                                                            data-country-code="iq"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__iq"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Iraq (&#x202B;العراق&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+964</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ie"
                                                                                            role="option"
                                                                                            data-dial-code="353"
                                                                                            data-country-code="ie"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ie"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ireland</span><span
                                                                                                class="iti__dial-code">+353</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-im"
                                                                                            role="option"
                                                                                            data-dial-code="44"
                                                                                            data-country-code="im"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__im"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Isle of Man</span><span
                                                                                                class="iti__dial-code">+44</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-il"
                                                                                            role="option"
                                                                                            data-dial-code="972"
                                                                                            data-country-code="il"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__il"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Israel (&#x202B;ישראל&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+972</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-it"
                                                                                            role="option"
                                                                                            data-dial-code="39"
                                                                                            data-country-code="it"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__it"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Italy (Italia)</span><span
                                                                                                class="iti__dial-code">+39</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-jm"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="jm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__jm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Jamaica</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-jp"
                                                                                            role="option"
                                                                                            data-dial-code="81"
                                                                                            data-country-code="jp"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__jp"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Japan (日本)</span><span
                                                                                                class="iti__dial-code">+81</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-je"
                                                                                            role="option"
                                                                                            data-dial-code="44"
                                                                                            data-country-code="je"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__je"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Jersey</span><span
                                                                                                class="iti__dial-code">+44</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-jo"
                                                                                            role="option"
                                                                                            data-dial-code="962"
                                                                                            data-country-code="jo"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__jo"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Jordan (&#x202B;الأردن&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+962</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kz"
                                                                                            role="option"
                                                                                            data-dial-code="7"
                                                                                            data-country-code="kz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kazakhstan (Казахстан)</span><span
                                                                                                class="iti__dial-code">+7</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ke"
                                                                                            role="option"
                                                                                            data-dial-code="254"
                                                                                            data-country-code="ke"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ke"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kenya</span><span
                                                                                                class="iti__dial-code">+254</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ki"
                                                                                            role="option"
                                                                                            data-dial-code="686"
                                                                                            data-country-code="ki"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ki"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kiribati</span><span
                                                                                                class="iti__dial-code">+686</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-xk"
                                                                                            role="option"
                                                                                            data-dial-code="383"
                                                                                            data-country-code="xk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__xk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kosovo</span><span
                                                                                                class="iti__dial-code">+383</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kw"
                                                                                            role="option"
                                                                                            data-dial-code="965"
                                                                                            data-country-code="kw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kuwait (&#x202B;الكويت&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+965</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kg"
                                                                                            role="option"
                                                                                            data-dial-code="996"
                                                                                            data-country-code="kg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Kyrgyzstan (Кыргызстан)</span><span
                                                                                                class="iti__dial-code">+996</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-la"
                                                                                            role="option"
                                                                                            data-dial-code="856"
                                                                                            data-country-code="la"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__la"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Laos (ລາວ)</span><span
                                                                                                class="iti__dial-code">+856</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lv"
                                                                                            role="option"
                                                                                            data-dial-code="371"
                                                                                            data-country-code="lv"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lv"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Latvia (Latvija)</span><span
                                                                                                class="iti__dial-code">+371</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lb"
                                                                                            role="option"
                                                                                            data-dial-code="961"
                                                                                            data-country-code="lb"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lb"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Lebanon (&#x202B;لبنان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+961</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ls"
                                                                                            role="option"
                                                                                            data-dial-code="266"
                                                                                            data-country-code="ls"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ls"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Lesotho</span><span
                                                                                                class="iti__dial-code">+266</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lr"
                                                                                            role="option"
                                                                                            data-dial-code="231"
                                                                                            data-country-code="lr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Liberia</span><span
                                                                                                class="iti__dial-code">+231</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ly"
                                                                                            role="option"
                                                                                            data-dial-code="218"
                                                                                            data-country-code="ly"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ly"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Libya (&#x202B;ليبيا&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+218</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-li"
                                                                                            role="option"
                                                                                            data-dial-code="423"
                                                                                            data-country-code="li"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__li"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Liechtenstein</span><span
                                                                                                class="iti__dial-code">+423</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lt"
                                                                                            role="option"
                                                                                            data-dial-code="370"
                                                                                            data-country-code="lt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Lithuania (Lietuva)</span><span
                                                                                                class="iti__dial-code">+370</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lu"
                                                                                            role="option"
                                                                                            data-dial-code="352"
                                                                                            data-country-code="lu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Luxembourg</span><span
                                                                                                class="iti__dial-code">+352</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mo"
                                                                                            role="option"
                                                                                            data-dial-code="853"
                                                                                            data-country-code="mo"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mo"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Macau (澳門)</span><span
                                                                                                class="iti__dial-code">+853</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mk"
                                                                                            role="option"
                                                                                            data-dial-code="389"
                                                                                            data-country-code="mk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">North Macedonia (Македонија)</span><span
                                                                                                class="iti__dial-code">+389</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mg"
                                                                                            role="option"
                                                                                            data-dial-code="261"
                                                                                            data-country-code="mg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Madagascar (Madagasikara)</span><span
                                                                                                class="iti__dial-code">+261</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mw"
                                                                                            role="option"
                                                                                            data-dial-code="265"
                                                                                            data-country-code="mw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Malawi</span><span
                                                                                                class="iti__dial-code">+265</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-my"
                                                                                            role="option"
                                                                                            data-dial-code="60"
                                                                                            data-country-code="my"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__my"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Malaysia</span><span
                                                                                                class="iti__dial-code">+60</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mv"
                                                                                            role="option"
                                                                                            data-dial-code="960"
                                                                                            data-country-code="mv"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mv"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Maldives</span><span
                                                                                                class="iti__dial-code">+960</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ml"
                                                                                            role="option"
                                                                                            data-dial-code="223"
                                                                                            data-country-code="ml"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ml"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mali</span><span
                                                                                                class="iti__dial-code">+223</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mt"
                                                                                            role="option"
                                                                                            data-dial-code="356"
                                                                                            data-country-code="mt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Malta</span><span
                                                                                                class="iti__dial-code">+356</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mh"
                                                                                            role="option"
                                                                                            data-dial-code="692"
                                                                                            data-country-code="mh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Marshall Islands</span><span
                                                                                                class="iti__dial-code">+692</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mq"
                                                                                            role="option"
                                                                                            data-dial-code="596"
                                                                                            data-country-code="mq"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mq"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Martinique</span><span
                                                                                                class="iti__dial-code">+596</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mr"
                                                                                            role="option"
                                                                                            data-dial-code="222"
                                                                                            data-country-code="mr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mauritania (&#x202B;موريتانيا&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+222</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mu"
                                                                                            role="option"
                                                                                            data-dial-code="230"
                                                                                            data-country-code="mu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mauritius (Moris)</span><span
                                                                                                class="iti__dial-code">+230</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-yt"
                                                                                            role="option"
                                                                                            data-dial-code="262"
                                                                                            data-country-code="yt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__yt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mayotte</span><span
                                                                                                class="iti__dial-code">+262</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mx"
                                                                                            role="option"
                                                                                            data-dial-code="52"
                                                                                            data-country-code="mx"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mx"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mexico (México)</span><span
                                                                                                class="iti__dial-code">+52</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-fm"
                                                                                            role="option"
                                                                                            data-dial-code="691"
                                                                                            data-country-code="fm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__fm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Micronesia</span><span
                                                                                                class="iti__dial-code">+691</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-md"
                                                                                            role="option"
                                                                                            data-dial-code="373"
                                                                                            data-country-code="md"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__md"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Moldova (Republica Moldova)</span><span
                                                                                                class="iti__dial-code">+373</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mc"
                                                                                            role="option"
                                                                                            data-dial-code="377"
                                                                                            data-country-code="mc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Monaco</span><span
                                                                                                class="iti__dial-code">+377</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mn"
                                                                                            role="option"
                                                                                            data-dial-code="976"
                                                                                            data-country-code="mn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mongolia (Монгол)</span><span
                                                                                                class="iti__dial-code">+976</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-me"
                                                                                            role="option"
                                                                                            data-dial-code="382"
                                                                                            data-country-code="me"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__me"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Montenegro (Crna Gora)</span><span
                                                                                                class="iti__dial-code">+382</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ms"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="ms"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ms"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Montserrat</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ma"
                                                                                            role="option"
                                                                                            data-dial-code="212"
                                                                                            data-country-code="ma"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ma"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Morocco (&#x202B;المغرب&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+212</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mz"
                                                                                            role="option"
                                                                                            data-dial-code="258"
                                                                                            data-country-code="mz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Mozambique (Moçambique)</span><span
                                                                                                class="iti__dial-code">+258</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mm"
                                                                                            role="option"
                                                                                            data-dial-code="95"
                                                                                            data-country-code="mm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Myanmar (Burma) (မြန်မာ)</span><span
                                                                                                class="iti__dial-code">+95</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-na"
                                                                                            role="option"
                                                                                            data-dial-code="264"
                                                                                            data-country-code="na"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__na"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Namibia (Namibië)</span><span
                                                                                                class="iti__dial-code">+264</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nr"
                                                                                            role="option"
                                                                                            data-dial-code="674"
                                                                                            data-country-code="nr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Nauru</span><span
                                                                                                class="iti__dial-code">+674</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-np"
                                                                                            role="option"
                                                                                            data-dial-code="977"
                                                                                            data-country-code="np"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__np"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Nepal (नेपाल)</span><span
                                                                                                class="iti__dial-code">+977</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nl"
                                                                                            role="option"
                                                                                            data-dial-code="31"
                                                                                            data-country-code="nl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Netherlands (Nederland)</span><span
                                                                                                class="iti__dial-code">+31</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nc"
                                                                                            role="option"
                                                                                            data-dial-code="687"
                                                                                            data-country-code="nc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">New Caledonia (Nouvelle-Calédonie)</span><span
                                                                                                class="iti__dial-code">+687</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nz"
                                                                                            role="option"
                                                                                            data-dial-code="64"
                                                                                            data-country-code="nz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">New Zealand</span><span
                                                                                                class="iti__dial-code">+64</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ni"
                                                                                            role="option"
                                                                                            data-dial-code="505"
                                                                                            data-country-code="ni"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ni"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Nicaragua</span><span
                                                                                                class="iti__dial-code">+505</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ne"
                                                                                            role="option"
                                                                                            data-dial-code="227"
                                                                                            data-country-code="ne"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ne"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Niger (Nijar)</span><span
                                                                                                class="iti__dial-code">+227</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ng"
                                                                                            role="option"
                                                                                            data-dial-code="234"
                                                                                            data-country-code="ng"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ng"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Nigeria</span><span
                                                                                                class="iti__dial-code">+234</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nu"
                                                                                            role="option"
                                                                                            data-dial-code="683"
                                                                                            data-country-code="nu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Niue</span><span
                                                                                                class="iti__dial-code">+683</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-nf"
                                                                                            role="option"
                                                                                            data-dial-code="672"
                                                                                            data-country-code="nf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__nf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Norfolk Island</span><span
                                                                                                class="iti__dial-code">+672</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kp"
                                                                                            role="option"
                                                                                            data-dial-code="850"
                                                                                            data-country-code="kp"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kp"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">North Korea (조선 민주주의 인민 공화국)</span><span
                                                                                                class="iti__dial-code">+850</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mp"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="mp"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mp"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Northern Mariana Islands</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-no"
                                                                                            role="option"
                                                                                            data-dial-code="47"
                                                                                            data-country-code="no"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__no"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Norway (Norge)</span><span
                                                                                                class="iti__dial-code">+47</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-om"
                                                                                            role="option"
                                                                                            data-dial-code="968"
                                                                                            data-country-code="om"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__om"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Oman (&#x202B;عُمان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+968</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pk"
                                                                                            role="option"
                                                                                            data-dial-code="92"
                                                                                            data-country-code="pk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Pakistan (&#x202B;پاکستان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+92</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pw"
                                                                                            role="option"
                                                                                            data-dial-code="680"
                                                                                            data-country-code="pw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Palau</span><span
                                                                                                class="iti__dial-code">+680</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ps"
                                                                                            role="option"
                                                                                            data-dial-code="970"
                                                                                            data-country-code="ps"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ps"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Palestine (&#x202B;فلسطين&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+970</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pa"
                                                                                            role="option"
                                                                                            data-dial-code="507"
                                                                                            data-country-code="pa"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pa"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Panama (Panamá)</span><span
                                                                                                class="iti__dial-code">+507</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pg"
                                                                                            role="option"
                                                                                            data-dial-code="675"
                                                                                            data-country-code="pg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Papua New Guinea</span><span
                                                                                                class="iti__dial-code">+675</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-py"
                                                                                            role="option"
                                                                                            data-dial-code="595"
                                                                                            data-country-code="py"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__py"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Paraguay</span><span
                                                                                                class="iti__dial-code">+595</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pe"
                                                                                            role="option"
                                                                                            data-dial-code="51"
                                                                                            data-country-code="pe"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pe"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Peru (Perú)</span><span
                                                                                                class="iti__dial-code">+51</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ph"
                                                                                            role="option"
                                                                                            data-dial-code="63"
                                                                                            data-country-code="ph"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ph"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Philippines</span><span
                                                                                                class="iti__dial-code">+63</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pl"
                                                                                            role="option"
                                                                                            data-dial-code="48"
                                                                                            data-country-code="pl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Poland (Polska)</span><span
                                                                                                class="iti__dial-code">+48</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pt"
                                                                                            role="option"
                                                                                            data-dial-code="351"
                                                                                            data-country-code="pt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Portugal</span><span
                                                                                                class="iti__dial-code">+351</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pr"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="pr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Puerto Rico</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-qa"
                                                                                            role="option"
                                                                                            data-dial-code="974"
                                                                                            data-country-code="qa"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__qa"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Qatar (&#x202B;قطر&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+974</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-re"
                                                                                            role="option"
                                                                                            data-dial-code="262"
                                                                                            data-country-code="re"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__re"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Réunion (La Réunion)</span><span
                                                                                                class="iti__dial-code">+262</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ro"
                                                                                            role="option"
                                                                                            data-dial-code="40"
                                                                                            data-country-code="ro"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ro"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Romania (România)</span><span
                                                                                                class="iti__dial-code">+40</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ru"
                                                                                            role="option"
                                                                                            data-dial-code="7"
                                                                                            data-country-code="ru"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ru"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Russia (Россия)</span><span
                                                                                                class="iti__dial-code">+7</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-rw"
                                                                                            role="option"
                                                                                            data-dial-code="250"
                                                                                            data-country-code="rw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__rw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Rwanda</span><span
                                                                                                class="iti__dial-code">+250</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-bl"
                                                                                            role="option"
                                                                                            data-dial-code="590"
                                                                                            data-country-code="bl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__bl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Barthélemy</span><span
                                                                                                class="iti__dial-code">+590</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sh"
                                                                                            role="option"
                                                                                            data-dial-code="290"
                                                                                            data-country-code="sh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Helena</span><span
                                                                                                class="iti__dial-code">+290</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kn"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="kn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Kitts and Nevis</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lc"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="lc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Lucia</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-mf"
                                                                                            role="option"
                                                                                            data-dial-code="590"
                                                                                            data-country-code="mf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__mf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Martin (Saint-Martin (partie française))</span><span
                                                                                                class="iti__dial-code">+590</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-pm"
                                                                                            role="option"
                                                                                            data-dial-code="508"
                                                                                            data-country-code="pm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__pm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span
                                                                                                class="iti__dial-code">+508</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-vc"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="vc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__vc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saint Vincent and the Grenadines</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ws"
                                                                                            role="option"
                                                                                            data-dial-code="685"
                                                                                            data-country-code="ws"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ws"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Samoa</span><span
                                                                                                class="iti__dial-code">+685</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sm"
                                                                                            role="option"
                                                                                            data-dial-code="378"
                                                                                            data-country-code="sm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">San Marino</span><span
                                                                                                class="iti__dial-code">+378</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-st"
                                                                                            role="option"
                                                                                            data-dial-code="239"
                                                                                            data-country-code="st"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__st"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span
                                                                                                class="iti__dial-code">+239</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sa"
                                                                                            role="option"
                                                                                            data-dial-code="966"
                                                                                            data-country-code="sa"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sa"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Saudi Arabia (&#x202B;المملكة العربية السعودية&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+966</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sn"
                                                                                            role="option"
                                                                                            data-dial-code="221"
                                                                                            data-country-code="sn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Senegal (Sénégal)</span><span
                                                                                                class="iti__dial-code">+221</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-rs"
                                                                                            role="option"
                                                                                            data-dial-code="381"
                                                                                            data-country-code="rs"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__rs"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Serbia (Србија)</span><span
                                                                                                class="iti__dial-code">+381</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sc"
                                                                                            role="option"
                                                                                            data-dial-code="248"
                                                                                            data-country-code="sc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Seychelles</span><span
                                                                                                class="iti__dial-code">+248</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sl"
                                                                                            role="option"
                                                                                            data-dial-code="232"
                                                                                            data-country-code="sl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Sierra Leone</span><span
                                                                                                class="iti__dial-code">+232</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sg"
                                                                                            role="option"
                                                                                            data-dial-code="65"
                                                                                            data-country-code="sg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Singapore</span><span
                                                                                                class="iti__dial-code">+65</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sx"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="sx"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sx"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Sint Maarten</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sk"
                                                                                            role="option"
                                                                                            data-dial-code="421"
                                                                                            data-country-code="sk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Slovakia (Slovensko)</span><span
                                                                                                class="iti__dial-code">+421</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-si"
                                                                                            role="option"
                                                                                            data-dial-code="386"
                                                                                            data-country-code="si"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__si"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Slovenia (Slovenija)</span><span
                                                                                                class="iti__dial-code">+386</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sb"
                                                                                            role="option"
                                                                                            data-dial-code="677"
                                                                                            data-country-code="sb"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sb"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Solomon Islands</span><span
                                                                                                class="iti__dial-code">+677</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-so"
                                                                                            role="option"
                                                                                            data-dial-code="252"
                                                                                            data-country-code="so"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__so"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Somalia (Soomaaliya)</span><span
                                                                                                class="iti__dial-code">+252</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-za"
                                                                                            role="option"
                                                                                            data-dial-code="27"
                                                                                            data-country-code="za"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__za"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">South Africa</span><span
                                                                                                class="iti__dial-code">+27</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-kr"
                                                                                            role="option"
                                                                                            data-dial-code="82"
                                                                                            data-country-code="kr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__kr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">South Korea (대한민국)</span><span
                                                                                                class="iti__dial-code">+82</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ss"
                                                                                            role="option"
                                                                                            data-dial-code="211"
                                                                                            data-country-code="ss"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ss"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">South Sudan (&#x202B;جنوب السودان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+211</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-es"
                                                                                            role="option"
                                                                                            data-dial-code="34"
                                                                                            data-country-code="es"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__es"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Spain (España)</span><span
                                                                                                class="iti__dial-code">+34</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-lk"
                                                                                            role="option"
                                                                                            data-dial-code="94"
                                                                                            data-country-code="lk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__lk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Sri Lanka (ශ්&zwj;රී ලංකාව)</span><span
                                                                                                class="iti__dial-code">+94</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sd"
                                                                                            role="option"
                                                                                            data-dial-code="249"
                                                                                            data-country-code="sd"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sd"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Sudan (&#x202B;السودان&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+249</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sr"
                                                                                            role="option"
                                                                                            data-dial-code="597"
                                                                                            data-country-code="sr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Suriname</span><span
                                                                                                class="iti__dial-code">+597</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sj"
                                                                                            role="option"
                                                                                            data-dial-code="47"
                                                                                            data-country-code="sj"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sj"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Svalbard and Jan Mayen</span><span
                                                                                                class="iti__dial-code">+47</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-se"
                                                                                            role="option"
                                                                                            data-dial-code="46"
                                                                                            data-country-code="se"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__se"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Sweden (Sverige)</span><span
                                                                                                class="iti__dial-code">+46</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ch"
                                                                                            role="option"
                                                                                            data-dial-code="41"
                                                                                            data-country-code="ch"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ch"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Switzerland (Schweiz)</span><span
                                                                                                class="iti__dial-code">+41</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-sy"
                                                                                            role="option"
                                                                                            data-dial-code="963"
                                                                                            data-country-code="sy"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__sy"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Syria (&#x202B;سوريا&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+963</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tw"
                                                                                            role="option"
                                                                                            data-dial-code="886"
                                                                                            data-country-code="tw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Taiwan (台灣)</span><span
                                                                                                class="iti__dial-code">+886</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tj"
                                                                                            role="option"
                                                                                            data-dial-code="992"
                                                                                            data-country-code="tj"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tj"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tajikistan</span><span
                                                                                                class="iti__dial-code">+992</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tz"
                                                                                            role="option"
                                                                                            data-dial-code="255"
                                                                                            data-country-code="tz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tanzania</span><span
                                                                                                class="iti__dial-code">+255</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-th"
                                                                                            role="option"
                                                                                            data-dial-code="66"
                                                                                            data-country-code="th"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__th"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Thailand (ไทย)</span><span
                                                                                                class="iti__dial-code">+66</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tl"
                                                                                            role="option"
                                                                                            data-dial-code="670"
                                                                                            data-country-code="tl"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tl"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Timor-Leste</span><span
                                                                                                class="iti__dial-code">+670</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tg"
                                                                                            role="option"
                                                                                            data-dial-code="228"
                                                                                            data-country-code="tg"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tg"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Togo</span><span
                                                                                                class="iti__dial-code">+228</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tk"
                                                                                            role="option"
                                                                                            data-dial-code="690"
                                                                                            data-country-code="tk"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tk"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tokelau</span><span
                                                                                                class="iti__dial-code">+690</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-to"
                                                                                            role="option"
                                                                                            data-dial-code="676"
                                                                                            data-country-code="to"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__to"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tonga</span><span
                                                                                                class="iti__dial-code">+676</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tt"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="tt"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tt"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Trinidad and Tobago</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tn"
                                                                                            role="option"
                                                                                            data-dial-code="216"
                                                                                            data-country-code="tn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tunisia (&#x202B;تونس&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+216</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tr"
                                                                                            role="option"
                                                                                            data-dial-code="90"
                                                                                            data-country-code="tr"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tr"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Turkey (Türkiye)</span><span
                                                                                                class="iti__dial-code">+90</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tm"
                                                                                            role="option"
                                                                                            data-dial-code="993"
                                                                                            data-country-code="tm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Turkmenistan</span><span
                                                                                                class="iti__dial-code">+993</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tc"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="tc"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tc"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Turks and Caicos Islands</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-tv"
                                                                                            role="option"
                                                                                            data-dial-code="688"
                                                                                            data-country-code="tv"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__tv"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Tuvalu</span><span
                                                                                                class="iti__dial-code">+688</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-vi"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="vi"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__vi"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">U.S. Virgin Islands</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ug"
                                                                                            role="option"
                                                                                            data-dial-code="256"
                                                                                            data-country-code="ug"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ug"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Uganda</span><span
                                                                                                class="iti__dial-code">+256</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ua"
                                                                                            role="option"
                                                                                            data-dial-code="380"
                                                                                            data-country-code="ua"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ua"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Ukraine (Україна)</span><span
                                                                                                class="iti__dial-code">+380</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ae"
                                                                                            role="option"
                                                                                            data-dial-code="971"
                                                                                            data-country-code="ae"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ae"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">United Arab Emirates (&#x202B;الإمارات العربية المتحدة&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+971</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-gb"
                                                                                            role="option"
                                                                                            data-dial-code="44"
                                                                                            data-country-code="gb"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__gb"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">United Kingdom</span><span
                                                                                                class="iti__dial-code">+44</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-us"
                                                                                            role="option"
                                                                                            data-dial-code="1"
                                                                                            data-country-code="us"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__us"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">United States</span><span
                                                                                                class="iti__dial-code">+1</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-uy"
                                                                                            role="option"
                                                                                            data-dial-code="598"
                                                                                            data-country-code="uy"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__uy"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Uruguay</span><span
                                                                                                class="iti__dial-code">+598</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-uz"
                                                                                            role="option"
                                                                                            data-dial-code="998"
                                                                                            data-country-code="uz"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__uz"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Uzbekistan (Oʻzbekiston)</span><span
                                                                                                class="iti__dial-code">+998</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-vu"
                                                                                            role="option"
                                                                                            data-dial-code="678"
                                                                                            data-country-code="vu"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__vu"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Vanuatu</span><span
                                                                                                class="iti__dial-code">+678</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-va"
                                                                                            role="option"
                                                                                            data-dial-code="39"
                                                                                            data-country-code="va"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__va"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Vatican City (Città del Vaticano)</span><span
                                                                                                class="iti__dial-code">+39</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ve"
                                                                                            role="option"
                                                                                            data-dial-code="58"
                                                                                            data-country-code="ve"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ve"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Venezuela</span><span
                                                                                                class="iti__dial-code">+58</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-vn"
                                                                                            role="option"
                                                                                            data-dial-code="84"
                                                                                            data-country-code="vn"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__vn"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Vietnam (Việt Nam)</span><span
                                                                                                class="iti__dial-code">+84</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-wf"
                                                                                            role="option"
                                                                                            data-dial-code="681"
                                                                                            data-country-code="wf"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__wf"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span
                                                                                                class="iti__dial-code">+681</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-eh"
                                                                                            role="option"
                                                                                            data-dial-code="212"
                                                                                            data-country-code="eh"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__eh"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Western Sahara (&#x202B;الصحراء الغربية&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+212</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ye"
                                                                                            role="option"
                                                                                            data-dial-code="967"
                                                                                            data-country-code="ye"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ye"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Yemen (&#x202B;اليمن&#x202C;&lrm;)</span><span
                                                                                                class="iti__dial-code">+967</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-zm"
                                                                                            role="option"
                                                                                            data-dial-code="260"
                                                                                            data-country-code="zm"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__zm"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Zambia</span><span
                                                                                                class="iti__dial-code">+260</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-zw"
                                                                                            role="option"
                                                                                            data-dial-code="263"
                                                                                            data-country-code="zw"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__zw"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Zimbabwe</span><span
                                                                                                class="iti__dial-code">+263</span>
                                                                                        </li>
                                                                                        <li class="iti__country iti__standard"
                                                                                            tabindex="-1"
                                                                                            id="iti-0__item-ax"
                                                                                            role="option"
                                                                                            data-dial-code="358"
                                                                                            data-country-code="ax"
                                                                                            aria-selected="false">
                                                                                            <div class="iti__flag-box">
                                                                                                <div
                                                                                                    class="iti__flag iti__ax"></div>
                                                                                            </div>
                                                                                            <span
                                                                                                class="iti__country-name">Åland Islands</span><span
                                                                                                class="iti__dial-code">+358</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <input type="tel"
                                                                                       class="iti__input form-control"
                                                                                       id="phone"
                                                                                       data-validate-intl-phone=""
                                                                                       data-intl-phone=""
                                                                                       data-intl-preferred="AE,BH,OM,KW,QA,SA"
                                                                                       value="" maxlength="20"
                                                                                       autocomplete="tel"
                                                                                       aria-describedby="phoneValidation-dwfrm_shipping_shippingAddress_addressFields_phone"
                                                                                       required=""
                                                                                       placeholder="50 123 4567"
                                                                                       data-intl-tel-input-id="0"
                                                                                       style="padding-left: 92px;" name="phone_no">
                                                                            </div>

                                                                            <input type="hidden" value=""
                                                                                   name="dwfrm_shipping_shippingAddress_addressFields_phone"
                                                                                   data-intl-phone-hidden=""
                                                                                   aria-describedby="dwfrm_shipping_shippingAddress_addressFields_phone-1666151536453">
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_addressFields_phone-1666151536453"
                                                                                class="invalid-feedback"></div>
                                                                        </div>

                                                                        <div
                                                                            id="phoneValidation-dwfrm_shipping_shippingAddress_addressFields_phone"
                                                                            class="set--w-100 invalid-feedback"></div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    id="dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress-333526276577"
                                                                    class="invalid-feedback"></div>
                                                            </div>
                                                        </fieldset>

                                                        <hr class="checkout-stage__details-division extend-gutter--small-up-normal text-color--grey-3">

                                                        <fieldset class="checkout-stage__details-section--no-spacing"
                                                                  data-checkout-component="shipping-methods-section">

                                                            <div
                                                                class="cms-generic-copy form-intro__copy text-line--medium">


                                                                <div class="content-asset">
                                                                    <!-- dwMarker="content" dwContentID="d7858b4f1d061084590247f792" -->
                                                                    <p>Cartier offers complimentary secure delivery on
                                                                        all orders</p>

                                                                    <p>&nbsp;</p>

                                                                    <p class="flex">
                                                                        <svg
                                                                            class="icon icon--large icon--set-left-short"
                                                                            viewBox="0 0 26 26">
                                                                            <circle cx="12" cy="8" r="1.2"></circle>
                                                                            <path
                                                                                d="M13 11c0-.6-.4-1-1-1h-2v2h1v3H9v2h6v-2h-2v-4z"></path>
                                                                            <path
                                                                                d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z"></path>
                                                                        </svg>
                                                                        <span class="set--w-100">Working days are Monday to Saturday, excluding public holidays.</span>
                                                                    </p>

                                                                    <p>&nbsp;</p>
                                                                </div> <!-- End content-asset -->


                                                            </div>


                                                            <input name="shipmentUUID" type="hidden"
                                                                   value="e0002f69e8fac8fcfd190b30a7"
                                                                   aria-describedby="shipmentUUID-146925642301">

                                                            <div class="form-check-list"
                                                                 data-select-shipping-method-url="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/CheckoutShippingServices-SelectShippingMethod"
                                                                 data-action-url="https://www.cartier.com/on/demandware.store/Sites-CartierUAE-Site/en_AE/CheckoutShippingServices-UpdateShippingMethodsList"
                                                                 data-checkout-component="shipping-method-list">

                                                                <div class="shipping-method__item row"
                                                                     style="display: flex">
                                                                    <div class="col-8 col-md-9">
                                                                        <div class="form-check">


                                                                            <input
                                                                                id="shippingMethod-STDD-e0002f69e8fac8fcfd190b30a7-single"
                                                                                name="dwfrm_shipping_shippingAddress_shippingMethodID"
                                                                                type="radio" value="STDD"
                                                                                class="form-check-input STDD"
                                                                                data-checkout-component="shipping-method-check"
                                                                                checked=""
                                                                                aria-describedby="dwfrm_shipping_shippingAddress_shippingMethodID-978950933184">


                                                                            <label class="form-check-label--radio"
                                                                                   for="shippingMethod-STDD-e0002f69e8fac8fcfd190b30a7-single"
                                                                                   data-checkout-component="shipping-method-label">
                                                                                <span
                                                                                    class="display-name heading-type body-type--deci"
                                                                                    data-checkout-component="shipping-method-name">Standard Delivery</span>


                                                                            </label>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_shippingMethodID-978950933184"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4 col-md-3">
                                                                        <div
                                                                            class="text-align--right heading-type body-type--deci"
                                                                            data-checkout-component="shipping-method-cost">
                                                                            AED 0.00
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="shipping-method__item row"
                                                                     style="display: none">
                                                                    <div class="col-8 col-md-9">
                                                                        <div class="form-check">


                                                                            <input
                                                                                id="shippingMethod-BTQP-e0002f69e8fac8fcfd190b30a7-single"
                                                                                name="dwfrm_shipping_shippingAddress_shippingMethodID"
                                                                                type="radio" value="BTQP"
                                                                                class="form-check-input BTQP"
                                                                                data-pickup="&quot;true&quot;"
                                                                                data-checkout-component="shipping-method-check"
                                                                                aria-describedby="dwfrm_shipping_shippingAddress_shippingMethodID-103809467635">


                                                                            <label class="form-check-label--radio"
                                                                                   for="shippingMethod-BTQP-e0002f69e8fac8fcfd190b30a7-single"
                                                                                   data-checkout-component="shipping-method-label">
                                                                                <span
                                                                                    class="display-name heading-type body-type--deci"
                                                                                    data-checkout-component="shipping-method-name">Pick up in Store</span>


                                                                            </label>
                                                                            <div
                                                                                id="dwfrm_shipping_shippingAddress_shippingMethodID-103809467635"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4 col-md-3">
                                                                        <div
                                                                            class="text-align--right heading-type body-type--deci"
                                                                            data-checkout-component="shipping-method-cost">
                                                                            AED 0.00
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <!-- Template used by client to redraw shipping methods -->

                                                            <div id="shipping-method-template" class="hidden"
                                                                 data-checkout-component="shipping-method-template">
                                                                <div class="shipping-method__item row">
                                                                    <div class="col-8 col-md-9">
                                                                        <div class="form-check">
                                                                            <input type="radio" class="form-check-input"
                                                                                   id="shippingMethodRadioButton"
                                                                                   data-checkout-component="shipping-method-check"
                                                                                   aria-describedby="shippingMethodRadioButton-1267592559017">
                                                                            <label class="form-check-label--radio"
                                                                                   for="shippingMethodRadioButton"
                                                                                   data-checkout-component="shipping-method-label">
                                                                                <span
                                                                                    class="display-name heading-type body-type--deci"
                                                                                    data-checkout-component="shipping-method-name"></span>
                                                                                <span
                                                                                    class="arrival-time font-family--serif hidden"
                                                                                    data-checkout-component="shipping-method-estimate"></span>
                                                                            </label>
                                                                            <div
                                                                                id="shippingMethodRadioButton-1267592559017"
                                                                                class="invalid-feedback"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-4 col-md-3">
                                                                        <div
                                                                            class="text-align--right heading-type body-type--deci"
                                                                            data-checkout-component="shipping-method-cost"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="shipmentUUID-146925642301"
                                                                 class="invalid-feedback"></div>
                                                        </fieldset>

                                                        <hr class="checkout-stage__details-division extend-gutter--small-up-normal text-color--grey-3">


                                                    </div>


                                                    <div class="checkout-stage__store-locator tab-content__panel"
                                                         role="tabpanel"
                                                         data-checkout-component="store-locator-container"
                                                         id="toggleID-4169--target" aria-labelledby="toggleID-4169">
                                                        <fieldset
                                                            class="checkout-stage__details-section store-locator--store-pickup"
                                                            data-checkout-component="shipping-pickup-section">
                                                            <div class="pickup-in-store"
                                                                 data-url="/on/demandware.store/Sites-CartierUAE-Site/en_AE/Stores-InventorySearch?showMap=false&amp;products=CRB6048617%3a1&amp;isForm=false&amp;radius=300"
                                                                 data-checkout-component="pickup-in-store"></div>

                                                            <div class="hidden"
                                                                 data-locator-component="selected-store-display">
                                                                <div class="checkout-stage__header">
                                                                    <p class="body-type heading-type">
                                                                        Selected Boutique
                                                                    </p>
                                                                </div>


                                                                <div class="store-details--short">
                                                                    <p class="font-weight--semibold"
                                                                       data-address-summary="name"></p>

                                                                    <address class="">
                                                                        <p data-address-summary="address1">

                                                                        </p>

                                                                        <p data-address-summary="address2">

                                                                        </p>

                                                                        <p><span data-address-summary="city"></span>,
                                                                            <span
                                                                                data-address-summary="stateCode"></span>
                                                                            <span
                                                                                data-address-summary="postalCode"></span>
                                                                        </p>
                                                                    </address>
                                                                </div>


                                                                <button type="button" class="link--primary change-store"
                                                                        name="changeStore" value="changeStore"
                                                                        data-checkout-component="change-store">
                                                                    Change Boutique
                                                                </button>
                                                            </div>

                                                            <hr class="checkout-stage__details-division extend-gutter--small-up-normal text-color--grey-3 display--small-only">
                                                        </fieldset>
                                                    </div>
                                                    <button
                                                        class="button button--primary set--w-100 body-type--centi submit-shipping"
                                                        type="submit" name="submit" value="submit-shipping"
                                                        data-checkout-component="shipping-stage-next"
                                                        form="dwfrm_shipping">
                                                        Proceed
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
