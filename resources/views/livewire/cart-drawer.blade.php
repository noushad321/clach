@if($isToggle)
<div>
    <div class="header__minicart-overlay utility-overlay set--loaded toggle--active" data-minicart-component="overlay" tabindex="-1" role="dialog" aria-modal="true" id="toggleID-5389--target" aria-labelledby="toggleID-5389" data-focustrap-enabled="true">
        <div class="utility-overlay__header text-align--center gutter--normal">
            <h2 class="utility-overlay__header-title fluid-type--deka-hecto heading-type font-weight--semibold">
                Shopping Bag
            </h2>
            <button type="button" class="utility-overlay__header-close link flex flex-align-center" data-toggle-close="" aria-label="Close shopping bag panel">
                <svg aria-hidden="true" focusable="false" class="icon">
                    <use xlink:href="#icon--close"></use>
                </svg>
            </button>
        </div>
        <p class="flex flex-align-center flex-justify-center set--h-100">Your shopping bag is empty</p>
    </div>
</div>
@endif