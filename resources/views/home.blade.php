@extends('layouts.user.guest')
@section('content')
<style>
     .product-tile__overlay {
        top:1rem;
     }
</style>

    <main id="main" class="main" role="main">
        <h1 class="sr-only">Clach&reg; Official Website</h1>
        <div class="experience-region experience-main">
            <div class="experience-component experience-accelerator_layouts-flexibleGrid">
                <div class="module-container" data-tracking-context="content-grid">

                    <section
                        class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
                        <div class="wrapper">
                            <div class="carousel">
                                @forelse($slider as $slide)
                               
                                <div><img src="data:image/jpeg;base64,{{ base64_encode(Storage::get($slide->multimedia()->first()->getRawOriginal('source_path'))) }}">
                                    <div class="
                                    content-tile__content-wrap
                                    set--w-100 flex

                                    set--text-after

                                    text-align--center

                                    component-h-align--center


                                    " style="">

                                        <div class="content-tile__content">


                                            <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                {{$slide->name}}
                                            </h2>


                                            <div class="component-actions content-tile__actions">


                                                <a href="#"
                                                   target="_blank"
                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                   aria-label="Discover" tabindex="0" style="">
                                                    Discover
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @empty
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


                                                <a href="#"
                                                   target="_blank"
                                                   class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                   aria-label="Discover" tabindex="0" style="">
                                                    Discover
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforelse

                               
                            </div>
                        </div>
                        <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>


                        <div class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters">

                            <div class="module-grid__item col-12 col-md-12 col-lg-12">

                            <div class="module-container set--motion-complete" style="" data-tracking-context="content-carousel">

                                <section class=" gutter--normal">
                                    <!--<div class="module-container__header">-->
                                        <div class="multiple-items">

                                            @foreach($products as $product)
                                                <livewire:product-item :product="$product" :keys="$loop->index">
                                            @endforeach
                                        </div>
                                    <!--</div>-->


                                    <div
                                        class="page-designer__empty-container page-designer__empty-container--secondary">
                                    </div>
                                </section>
 </div>
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
                                                           href="#"
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





    " style="    align-items: center;
    justify-content: center;" data-content-component="content-tile"
                                                             data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}'>
                                                        <!-- dwMarker="content" dwContentID="null" -->

                                                      

                                                        <a class="component-overlay component-overlay--low-index component-overlay--center "
                                                           href="#"
                                                           aria-label="Discover">

                                                        <span class="sr-only">
                                                            Santos de Clach

                                                            
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

        <div style="margin-bottom:20px">Love inspired collection
</div>
                                                                <h2 class="content-tile__title heading-type component-copy__title--regular">
                                                                Celebrate what values most collections that reveal the union of two people in love.

                                                                </h2>


                                                                <div class="component-actions content-tile__actions">


                                                                    <a href="{{url('/la-maison')}}"
                                                                       target=_blank
                                                                       class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary "
                                                                       aria-label="Discover" tabindex=-1 style="">
                                                                        Find out more
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

                                                

                                            </div>
                                        </div>


                                        <div class="module-grid__item col-12 col-md-6 col-lg-6">
                                            <div class="flex flex-grow-1">


                                              

                                            </div>
                                        </div>

                                    </div>

                                    <div
                                        class="page-designer__empty-container page-designer__empty-container--secondary">
                                    </div>
                                </section>

                            </div>
                        </div>

                        <div class="page-designer__empty-container page-designer__empty-container--secondary">
                            
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>

    <livewire:product-modal>

@endsection
