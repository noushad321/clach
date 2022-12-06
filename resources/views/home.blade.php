@extends('layouts.user.guest')
@section('content')


    <main id="main" class="main" role="main">
        <h1 class="sr-only">Cartier&reg; Official Website - Jewellery and Watchmaker since 1847</h1>
        <div class="experience-region experience-main">
            <div class="experience-component experience-accelerator_layouts-flexibleGrid">
                <div class="module-container" data-tracking-context="content-grid">

                    <section
                        class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
                        <div class="wrapper">
                            <div class="carousel">
                                <div><img src="images/1.jpg">
                                    <div class="
                                    content-tile__content-wrap
                                    set--w-100 flex

                                    set--text-after

                                    text-align--center

                                    component-h-align--center


                                    " style="">

                                        <div class="content-tile__content">


                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                More Feline Than Ever&ZeroWidthSpace;
                                            </h2>


                                            <div class="component-actions content-tile__actions">


                                                <a href="https://www.cartier.com/en-ae/jewellery/collections/panthere-de-cartier/"
                                                   target="_blank"
                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                   aria-label="Discover" tabindex="0" style="">
                                                    Discover
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div><img src="images/2.jpg">
                                    <div class="
            content-tile__content-wrap
            set--w-100 flex

            set--text-after

            text-align--center

            component-h-align--center


            " style="">

                                        <div class="content-tile__content">


                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                More Feline Than Ever&ZeroWidthSpace;
                                            </h2>


                                            <div class="component-actions content-tile__actions">


                                                <a href="https://www.cartier.com/en-ae/jewellery/collections/panthere-de-cartier/"
                                                   target="_blank"
                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                   aria-label="Discover" tabindex="0" style="">
                                                    Discover
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div><img src="images/3.jpg">
                                    <div class="
                                    content-tile__content-wrap
                                    set--w-100 flex

                                    set--text-after

                                    text-align--center

                                    component-h-align--center


                                    " style="">

                                        <div class="content-tile__content">


                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                More Feline Than Ever&ZeroWidthSpace;
                                            </h2>


                                            <div class="component-actions content-tile__actions">


                                                <a href="https://www.cartier.com/en-ae/jewellery/collections/panthere-de-cartier/"
                                                   target="_blank"
                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                   aria-label="Discover" tabindex="0" style="">
                                                    Discover
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>


                        <div class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters">

                            <div class="module-grid__item col-12 col-md-12 col-lg-12">


                                <section class=" gutter--normal">
                                    <div class="module-container__header">
                                        <div class="multiple-items">

                                            @foreach($products as $product)
                                                <livewire:product-item :product="$product" :keys="$loop->index">
                                            @endforeach
                                        </div>
                                    </div>


                                    <div
                                        class="page-designer__empty-container page-designer__empty-container--secondary">
                                    </div>
                                </section>

                            </div>
                            <div class="module-grid__item col-12 col-md-12 col-lg-12">


                                <div
                                    class="module-container module-container--spacing-top-tiny module-container--spacing-bottom-tiny">
                                    <section
                                        class="max-width-- module-container__constraint--center gutter--normal module-container--has-outer-gutter">
                                        <div
                                            class="page-designer__empty-container page-designer__empty-container--secondary">
                                        </div>

                                        <div
                                            class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters">

                                            <div class="module-grid__item col-12 col-md-6 col-lg-6">
                                                <div class="flex flex-grow-1">

                                                    <article class="
    set--w-100 flex flex-direction-col
    content-tile
    content-tile--size-regular
    content-tile--ratio-natural
    content-tile--style-default" data-content-component="content-tile"
                                                             data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}'>
                                                        <!-- dwMarker="content" dwContentID="null" -->

                                                        <div
                                                            class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">

                                                            <div class="content-tile__media ">


                                                                <picture>


                                                                    <source
                                                                        data-srcset="images/CLASH_HP_ANIMATION_MAINS_1680x1377.jpg"
                                                                        class="picture--source-element">


                                                                    <img data-image-component="lazyload"
                                                                         src=images/CLASH_HP_ANIMATION_MAINS_1680x1377.jpg?sw=40&amp;q=100
                                                                         class="component-image content-tile__img object-fit--cover lazyload blur-up"
                                                                         title="" alt=""
                                                                         style="--focal-point-x: 50%; --focal-point-y:50%; ; "/>
                                                                </picture>


                                                            </div>

                                                        </div>


                                                        <a class="component-overlay component-overlay--low-index component-overlay--center "
                                                           href="https://www.cartier.com/en-ae/jewellery/collections/clash-de-cartier/"
                                                           aria-label="Discover the Creations">

                                                        <span class="sr-only">
                                                            Too much or never enough?

                                                            Discover the Creations
                                                        </span>
                                                        </a>


                                                        <div class="
            content-tile__content-wrap
            set--w-100 flex

            set--text-after

            text-align--center

            component-h-align--center


            " style="">

                                                            <div class="content-tile__content">


                                                                <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                                    Too much or never enough?
                                                                </h2>


                                                                <div class="component-actions content-tile__actions">


                                                                    <a href="https://www.cartier.com/en-ae/jewellery/collections/clash-de-cartier/"
                                                                       target=_blank
                                                                       class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                                       aria-label="Discover the Creations" tabindex=-1
                                                                       style="">
                                                                        Discover the Creations
                                                                    </a>


                                                                </div>

                                                            </div>
                                                        </div>

                                                    </article>

                                                </div>
                                            </div>

                                            <div class="module-grid__item col-12 col-md-6 col-lg-6">
                                                <div class="flex flex-grow-1">

                                                    <article class="
    set--w-100 flex flex-direction-col
    content-tile
    content-tile--size-regular
    content-tile--ratio-natural
    content-tile--style-default





    " style="" data-content-component="content-tile"
                                                             data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}'>
                                                        <!-- dwMarker="content" dwContentID="null" -->

                                                        <div
                                                            class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">

                                                            <div class="content-tile__media ">


                                                                <picture>


                                                                    <source data-srcset="images/SANTOS.jpg"
                                                                            class="picture--source-element">


                                                                    <img data-image-component="lazyload"
                                                                         src=images/SANTOS.jpg
                                                                         class="component-image content-tile__img object-fit--cover lazyload blur-up"
                                                                         title="" alt=""
                                                                         style="--focal-point-x: 50%; --focal-point-y:50%; ; "/>
                                                                </picture>


                                                            </div>

                                                        </div>


                                                        <a class="component-overlay component-overlay--low-index component-overlay--center "
                                                           href="https://www.cartier.com/en-ae/watches/collections/santos-de-cartier/"
                                                           aria-label="Discover">

                                                        <span class="sr-only">
                                                            Santos de Cartier​

                                                            Discover
                                                        </span>
                                                        </a>


                                                        <div class="
            content-tile__content-wrap
            set--w-100 flex

            set--text-after

            text-align--center

            component-h-align--center


            " style="">

                                                            <div class="content-tile__content">


                                                                <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                                    Santos de Cartier​
                                                                </h2>


                                                                <div class="component-actions content-tile__actions">


                                                                    <a href="https://www.cartier.com/en-ae/watches/collections/santos-de-cartier/"
                                                                       target=_blank
                                                                       class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                                       aria-label="Discover" tabindex=-1 style="">
                                                                        Discover
                                                                    </a>


                                                                </div>

                                                            </div>
                                                        </div>

                                                    </article>

                                                </div>
                                            </div>

                                        </div>

                                        <div
                                            class="page-designer__empty-container page-designer__empty-container--secondary">
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="module-grid__item col-12 col-md-12 col-lg-12">


                                <section
                                    class="max-width-- module-container__constraint--center gutter--normal module-container--has-outer-gutter">
                                    <div
                                        class="page-designer__empty-container page-designer__empty-container--secondary">
                                    </div>

                                    <div
                                        class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters">


                                        <div class="module-grid__item col-12 col-md-6 col-lg-6">
                                            <div class="flex flex-grow-1">

                                                <article class="
    set--w-100 flex flex-direction-col
    content-tile
    content-tile--size-regular
    content-tile--ratio-natural
    content-tile--style-default" data-content-component="content-tile"
                                                         data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}'>
                                                    <!-- dwMarker="content" dwContentID="null" -->

                                                    <div
                                                        class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">

                                                        <div class="content-tile__media ">

                                                            <picture>

                                                                <source data-srcset="images/4_NOA_1680x1377.jpg"
                                                                        class="picture--source-element">


                                                                <img data-image-component="lazyload"
                                                                     src=images/4_NOA_1680x1377.jpg?sw=40&amp;q=100
                                                                     class="component-image content-tile__img object-fit--cover lazyload blur-up"
                                                                     title="" alt=""
                                                                     style="--focal-point-x: 50%; --focal-point-y:50%; ; "/>
                                                            </picture>


                                                        </div>

                                                    </div>

                                                    <a class="component-overlay component-overlay--low-index component-overlay--center "
                                                       href="https://www.cartier.com/en-ae/art-of-living/writing-%26-stationery/writing-instruments/"
                                                       aria-label="Discover New Creations">

                                                    <span class="sr-only">
                                                        The Universe of a Grande Maison

                                                        Discover New Creations
                                                    </span>
                                                    </a>


                                                    <div class="
            content-tile__content-wrap
            set--w-100 flex

            set--text-after

            text-align--center

            component-h-align--center


            " style="">

                                                        <div class="content-tile__content">


                                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                                The Universe of a Grande Maison
                                                            </h2>

                                                            <div class="component-actions content-tile__actions">

                                                                <a href="https://www.cartier.com/en-ae/art-of-living/writing-%26-stationery/writing-instruments/"
                                                                   target=_blank
                                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                                   aria-label="Discover New Creations" tabindex=-1
                                                                   style="">
                                                                    Discover New Creations
                                                                </a>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>

                                            </div>
                                        </div>


                                        <div class="module-grid__item col-12 col-md-6 col-lg-6">
                                            <div class="flex flex-grow-1">


                                                <article class="
    set--w-100 flex flex-direction-col
    content-tile
    content-tile--size-regular
    content-tile--ratio-natural
    content-tile--style-default" data-content-component="content-tile"
                                                         data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}'>
                                                    <!-- dwMarker="content" dwContentID="null" -->

                                                    <div
                                                        class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">

                                                        <div class="content-tile__media ">


                                                            <picture>

                                                                <source data-srcset="images/NM_CYCADA_1680x1377.jpg"
                                                                        class="picture--source-element">


                                                                <img data-image-component="lazyload"
                                                                     src=images/NM_CYCADA_1680x1377.jpg?sw=40&amp;q=100
                                                                     class="component-image content-tile__img object-fit--cover lazyload blur-up"
                                                                     title="" alt=""
                                                                     style="--focal-point-x: 50%; --focal-point-y:50%; ; "/>
                                                            </picture>
                                                        </div>

                                                    </div>
                                                    <a class="component-overlay component-overlay--low-index component-overlay--center "
                                                       href="https://www.cartier.com/en-ae/high-jewellery/latest-collections/beautes-du-monde/"
                                                       aria-label="Discover the Collection">

                                                    <span class="sr-only">
                                                        Beautés du Monde

                                                        Discover the Collection
                                                    </span>
                                                    </a>


                                                    <div class="
            content-tile__content-wrap
            set--w-100 flex

            set--text-after

            text-align--center

            component-h-align--center">

                                                        <div class="content-tile__content">


                                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                                Beautés du Monde
                                                            </h2>

                                                            <div class="component-actions content-tile__actions">

                                                                <a href="https://www.cartier.com/en-ae/high-jewellery/latest-collections/beautes-du-monde/"
                                                                   target=_blank
                                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                                   aria-label="Discover the Collection" tabindex=-1
                                                                   style="">
                                                                    Discover the Collection
                                                                </a>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>

                                            </div>
                                        </div>

                                    </div>

                                    <div
                                        class="page-designer__empty-container page-designer__empty-container--secondary">
                                    </div>
                                </section>

                            </div>
                        </div>

                        <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
                    </section>
                </div>
            </div>
        </div>

    </main>

    <livewire:product-modal>

@endsection
