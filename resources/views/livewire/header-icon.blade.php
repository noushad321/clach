<div class="header__minicart header__utility-item--reverse-spacing header__utility-item--badged flex " data-minicart-component="container">
    <a class="header__utility-anchor flex flex-align-center link body-type--milli" title="View Cart" wire:click="toggleCartDrawer" role="button">
        <svg aria-hidden="true" focusable="false" class="header__minicart-icon icon fluid-type--deka-base">
            <use xlink:href="#nav--cart" />
        </svg>
        <span class="header__utility-badge header__utility-badge--has-items flex flex-align-center flex-justify-center" data-minicart-component="qty">0</span>
    </a>

    <div class="header__minicart-overlay utility-overlay" data-minicart-component="overlay" tabindex="-1" role="dialog" aria-modal="true"></div>
</div>