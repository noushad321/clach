<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                <input type="text"
                       wire:model="product.name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="name"
                       required="">
                @error('product.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Short Desc</label>
                <input type="text"
                       wire:model="product.short_description"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="short desc" required="">
                @error('product.short_description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Long Desc</label>
                <input type="text"
                       wire:model="product.long_description"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="long desc">
                @error('product.long_description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock Quantity</label>
                <input type="text"
                       wire:model="product.in_stock"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="stock" required="">
                @error('product.in_stock') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reference Number</label>
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

            @if($tags)
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tags</label>
                <select class="form-control mr-sm-2"  wire:model="tags">
                    <option value=''>Select Tags</option>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" > {{$tag->name}}</option>
                    @endforeach
                </select>
                @error('sub_category_type') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endif


            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Photos</label>
                <input type="file" wire:model="photos" multiple>
                @error('photos.*') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex items-center justify-start space-x-4">
                <a href="/products" class="text-gray-900  font-medium  text-sm ">Back</a>
                <button type="submit"
                        class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                </button>
            </div>
        </form>

    </div>
</div>
