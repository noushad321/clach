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

            @if($category)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Category</label>
                <select class="form-control mr-sm-2"  wire:model.defer="category">
                    <option value=''>Select Category</option>
                    @foreach ($category as $cat)
                            <option value="{{$cat->id}}" > {{$cat->name}}</option>
                    @endforeach
                </select>
                @error('product.category') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endif

            @if($sub_category)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Sub Category</label>
                <select class="form-control mr-sm-2"  wire:model.defer="sub_category">
                    <option value=''>Select Sub Category</option>
                    @foreach ($sub_category as $sub_cat)
                        <option value="{{$sub_cat->id}}" > {{$sub_cat->name}}</option>
                    @endforeach
                </select>
                @error('product.sub_category') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endif

            @if($sub_category_type)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Sub Category Type</label>
                <select class="form-control mr-sm-2"  wire:model.defer="sub_category_type">
                    <option value=''>Select Sub Category Type</option>
                    @foreach ($sub_category_type as $sub_cat_type)
                        <option value="{{$sub_cat_type->id}}" > {{$sub_cat_type->name}}</option>
                    @endforeach
                </select>
                @error('product.sub_category_type') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endif

            @if($attributes)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Attributes</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="attributes">
                        <option value=''>Select Attributes</option>
                        @foreach ($attributes as $attribute)
                            <option value="{{$attribute->id}}" > {{$attribute->name}}</option>
                        @endforeach
                    </select>
                    @error('product.attribute') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($attributeValues)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Attribute Value</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="attributeValues">
                        <option value=''>Select Attribute Value</option>
                        @foreach ($attributeValues as $attributeValue)
                            <option value="{{$attributeValue->id}}" > {{$attributeValue->value}}</option>
                        @endforeach
                    </select>
                    @error('product.attributeValue') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif

            @if($tags)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tags</label>
                <select class="form-control mr-sm-2"  wire:model.defer="tags">
                    <option value=''>Select Tags</option>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" > {{$tag->name}}</option>
                    @endforeach
                </select>
                @error('sub_category_type') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endif


{{--            <div class="mb-6">--}}
{{--                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photos</label>--}}
{{--                <input type="file" wire:model.defer="photos" multiple>--}}
{{--                @error('photos.*') <span class="text-sm text-red-500">{{ $message }}</span> @enderror--}}
{{--            </div>--}}
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
