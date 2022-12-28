@if($showSearch)
<form    class="site-search__form flex flex-grow-1 flex-direction-col flex-align-center gutter--normal" >
    <div class="site-search__form-group set--w-100">
        <label for="siteSearch" class="form-control-label sr-only">Search</label>

        <div class="row flex-no-gutters">
          
            <div class="col">
            <input type='text' placeholder="Search products" autocomplete="off"  class="form-control "  >

            </div>

            <div class="site-search__button-col col">
                <button type="submit" class="button button--primary button--fluid set--w-100" data-search-component="button" title="Submit search" aria-label="Submit search">
                    Search
                </button>
            </div>
        </div>






        <input type="hidden" value="en_AE" name="lang" aria-describedby="lang-1341774084129">
        <div id="lang-1341774084129" class="invalid-feedback"></div>
    </div>

    <div class="site-search__suggestions-container max-width--xmedium flex flex-direction-col set--w-100" data-search-component="suggestions-container" data-suggestions-url="#" data-scrollable=""></div>
</form>
@endif