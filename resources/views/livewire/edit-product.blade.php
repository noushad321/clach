
<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
                <input type="text"
                       wire:model="product.name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="name"
                       required="">
                @error('product.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Short Desc</label>
                <input type="text"
                       wire:model="product.short_description"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="short desc" required="">
                @error('product.short_description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Long Desc</label>
                <input type="text"
                       wire:model="product.long_description"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="long desc">
                @error('product.long_description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Stock Quantity</label>
                <input type="text"
                       wire:model="product.in_stock"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="stock" required="">
                @error('product.in_stock') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Reference Number</label>
                <input type="text"
                       wire:model="product.reference_number"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="reference" required="">
                @error('product.reference_number') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                <input type="text"
                       wire:model="product.price"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="price" required="">
                @error('product.price') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            @if($categories)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Category</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="category" name="category" wire:change = "$emit('refreshComponent')">
                        <option value=''>Select Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" rel="{{$cat->id}}"> {{$cat->name}}</option>
                        @endforeach
                    </select>
                    @error('category') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($sub_categories)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Sub Category</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="sub_category" name="sub_category" wire:change = "$emit('refreshComponent')">
                        <option value=''>Select Sub Category</option>
                        @foreach ($sub_categories as $sub_cat)
                            <option value="{{$sub_cat->id}}" rel="{{$sub_cat->id}}" class="{{$sub_cat->fk_category_id}}"> {{$sub_cat->name}}</option>
                        @endforeach
                    </select>
                    @error('sub_category') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($sub_category_types)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Sub Category Type</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="sub_category_type" name="sub_cat_type">
                        <option value=''>Select Sub Category Type</option>
                        @foreach ($sub_category_types as $sub_cat_type)
                            <option value="{{$sub_cat_type->id}}"  rel="{{$sub_cat_type->id}}" class="{{$sub_cat_type->fk_sub_category_id}}" > {{$sub_cat_type->name}}</option>
                        @endforeach
                    </select>
                    @error('sub_category_type') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($attributes)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Attributes</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="attribute" wire:change = "$emit('refreshComponent')">
                        <option value=''>Select Attributes</option>
                        @foreach ($attributes as $attribute)
                            <option value="{{$attribute->id}}" > {{$attribute->name}}</option>
                        @endforeach
                    </select>
                    @error('attribute') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($attributeValues)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Attribute Value</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="attributeValue" multiple>
                        <option value=''>Select Attribute Value</option>
                        @foreach ($attributeValues as $attributeValue)
                            <option value="{{$attributeValue->id}}" {{in_array($attributeValue->id, $product->attributeValues->pluck('id')->toArray()) ? 'selected class=text-red-900' : ''}}> {{$attributeValue->value}}</option>
                        @endforeach
                    </select>
                    @error('attributeValue') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($tags)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tags</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="tag" multiple name="tags">
                        <option value=''>Select Tags</option>
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}" wire:key="{{ $tag->id }}" {{in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected class=text-red-900' : ''}}> {{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tag') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif


            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photos</label>
                @if($product->multimedia()->count() > 0)
                    <div class="display: inline-block">
                         @foreach($product->multimedia()->get() as $pic)
                            <img alt="{{ env('APP_NAME', '') }}"
                                 style="display: block; margin-left: 20px; max-width: 200px; max-height: 200px"
                                 src="data:image/jpeg;base64,{{ base64_encode(Storage::get($pic->getRawOriginal('source_path'))) }}"/>
                        @endforeach
                    </div>

                @endif
                <input class="mt-4" type="file" wire:model.defer="photos" multiple>
                @error('photos.*') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex items-center justify-start space-x-4">
                <div class="ml-12 sm:flex-right">
                    <a href="/products"
                       class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                        Back
                    </a>
                </div>
                <button type="submit"
                        class="ml-4 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    Save
                </button>
            </div>
        </form>

    </div>
</div>

