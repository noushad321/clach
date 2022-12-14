<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryType;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param Category $category
     * @param SubCategory $subCategory
     * @param SubCategoryType $subCategoryType
     * @return Response
     */
    public function index(Request $request, Category $category, SubCategory $subCategory, SubCategoryType $subCategoryType)
    {
        $products = (new Product)->where('sub_category_type_id', $subCategoryType->id)->get();
        $viewData = ProductsResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function addToCart(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }
        $sessoinId= rand(0,100000);
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $sessoinId => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->multimedia()->first()
                ]
            ];
            session()->put('cart', $cart);
            //return response()->json(['message' => 'first added', 'data' => $cart]);
        }
        // if cart not empty then check if this product exist then increment quantity
      else {
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$sessoinId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->multimedia()->first()
            ];
            session()->put('cart', $cart);
        }


        $div = '';
        $div = '<div class="utility-overlay__line-items" data-minicart-component="items" data-line-item-container="minicart">';




        $total = 0;

        foreach (session('cart') as $id => $details) {
            $total += $details['price'] * $details['quantity'];
            $image = $details['photo'] ? 'data:image/jpeg;base64,'.base64_encode(Storage::get(json_decode($details['photo'])->source_path)) : '';
            $div .= '<div class="utility-overlay__line-item product-line-item product-line-item--minicart" data-product-container="card" data-pid="CRB6067416" data-cart-line-item="be14c8d5b901190a7997ae7535">
 <div class="product-line-item__main">
     <div class="product-line-item__details row">
         <div class="col-6">
             <a href="#" class="product-line-item__image-wrap link" title="#LOVE# bracelet" tabindex="-1">
                 <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="'.$image.'" alt="#LOVE# bracelet" title="#LOVE# bracelet" data-line-item-component="image">
             </a>
         </div>

         <div class="col-6">
             <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                 <div class="product-line-item__header-main">
                     <!--Product Badges -->
                     <a href="" class="product-line-item__name link word-break--break-word hyphens--auto" title="#LOVE# bracelet">'
                . $details['name'] .
                '</a>
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
             <div class="product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto">                     <p class="product-line-item__attribute">Rose gold</p>
                     <p class="product-line-item__attribute" data-line-item-component="size">


                         <span class="product-line-item__attribute-key">Size:</span>


                     <span class="product-line-item__attribute-value">16</span></p>
                     <p class="product-line-item__attribute" data-line-item-component="size">


 <span class="product-line-item__attribute-key">Quantity:</span>


 <span class="product-line-item__attribute-value">' . $details['quantity'] . '</span></p>


                 <div class="product-line-item__options">

                 </div>

                     <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
                         <div class="product-line-item__total-price item-total-be14c8d5b901190a7997ae7535 price font-family--sans" data-line-item-component="price-total">


 <div class="price__sales pricing line-item-total-price-amount">$' . number_format($details['price']) . '</div>

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

     </div>';
        }
        $div .= '</div> <div class="utility-overlay__footer">


 <div class="utility-overlay__footer-section utility-overlay__footer-totals">
     <div class="row font-weight--semibold text-transform--uppercase" data-totals-component="subTotal">
         <div class="col-6">
             <p data-totals-component="label">Subtotal</p>
         </div>

         <div class="col-6">
             <p class="text-align--right" data-totals-component="value">$' . number_format($total) . '</p>
         </div>
     </div>

         <p class="utility-overlay__footer-message font-family--serif">Shipping and taxes calculated at checkout.</p>

     <div class="utility-overlay__footer-actions">
         <a href="/cart" class="button button--primary minicart__checkout-action checkout-btn set--w-100 " role="button" data-cart-component="checkout-action">
 Proceed to Checkout
</a>


     </div>
 </div>
</div>';

        return response()->json(['message' => 'updated', 'count' => count(session('cart')), 'data' => $div]);
    }

    public function searchProducts(Request $request)
    {
        $search = $request->get('search');

        $products = Product::with('attributeValues.attribute', 'tags', 'subCategoryType.subCategory.category', 'multimedia')->take(3)->get();
        if($search){
            $products = Product::with('subCategoryType.subCategory.category','tags')->where('name', 'LIKE', '%' .$search. '%')
                ->orWhere('short_description', 'like', '%'.$search.'%')
            ->orWhereHas('category', function($q) use ($search) {
                return $q->where('name', 'LIKE', '%' . $search . '%');
            })
                ->orWhereHas('subCategory', function($q) use ($search) {
                    return $q->where('name', 'LIKE', '%'. $search . '%');
                })
                ->orWhereHas('subCategoryType', function($q) use ($search) {
                    return $q->where('name', 'LIKE', '%'. $search . '%');
                })
                ->take(3)
                ->get();
        

        $div = '';
        $div = '<div class="site-search__suggestions-list"><div class="row"><div class="col-12 col-md site-search__suggestions-section"><ul class="site-search__suggestions-matches list--reset row">';
       
        foreach ($products as $key => $value) {
          
            $image1 = 'data:image/jpeg;base64,'.base64_encode(Storage::get($value->multimedia[0]->getRawOriginal('source_path')));
            $image2 = 'data:image/jpeg;base64,'.base64_encode(Storage::get($value->multimedia[1]->getRawOriginal('source_path')));
            $attributes="";
            foreach($value->attributeValues as $values){
            if($values->attribute->name=='metal'){
            $attributes.= $values->value.',';
        }
            }

            if($value->tags){
            foreach($value->tags as $tag){

                $attributes.= $tag->name;

            }
        
    }
            $div.='<li class="site-search__suggestions-item col-12 col-md-3" id='.$value["name"].'><div class="product flex flex-grow-1 flex-direction-col">
            <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center set--images-lazy-loaded" itemscope="" itemtype="" data-product-container="tile" data-product-tile="" data-pid="B6067517">
            <!-- dwMarker="product" dwContentID="5d390e3010d785d9f47e31534d" -->
            <a class="product-tile__anchor" href="#" data-product-url="productShow" itemprop="url">
                <!--Product Badges -->
                
                    <p class="product-badge--novelty">
                        MUST HAVE
                    </p>
                
        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
            <div class="product-tile__media-container component-overlay component-overlay--center">
                
                    <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain none-up set--has-secondary-image full-stretch-image ls-is-cached lazyloaded" data-product-component="image" data-src="'.$image1.'" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" src="'.$image1.'">
        
                        <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain none-up display--small-up  full-stretch-image ls-is-cached lazyloaded" data-product-component="image" data-src="'.$image2.'" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" src="'.$image2.'">
                
            </div>
        </div>
        
        
                <div class="product-tile__body">
                    <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                    '.$value->name.'
                    </p>
        
        
                    
                        <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
            
                
        </div>
        
                        <p class="product-tile__body-section product-tile__material font-family--serif">
            '.$attributes.'
        </p>
                    
                        <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            
                <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    
        <meta itemprop="priceCurrency" content="$">
        
            <span class="price__sales sales">
            
                <span class="value" itemprop="price" content="'.$value.'" id="'.$value.'">
            
            '.number_format($value["price"]).'
    
            </span>
        
        
                </span></div>
            
                        </div>
                </div>
            </a>
        
            
              
            
                <div class="product-tile__body-section">
            <div class="ratings flex">
            </div>
        </div>
        </div>
        
        </div></li>';
        }
        $div.='</ul></div></div></div>';

    }
        echo $div; 

    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            //session()->flash('success', 'Product removed successfully');
        }
    }




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
