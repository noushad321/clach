<div class="max-w-4xl mx-auto mt-5">
    <div class="px-4 sm:px-6 lg:px-8">
        <form wire:submit.prevent="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sub Category Name</label>
                <input type="text"
                       wire:model="subCategory.name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="name"
                       required="">
                @error('subCategory.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sub Category Description</label>
                <input type="text"
                       wire:model="subCategory.description"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="desc">
                @error('subCategory.description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @if($categories)
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Category</label>
                    <select class="form-control mr-sm-2"  wire:model.defer="category" name="select-cat">
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" {{$subCategory->category->id == $cat->id ? 'selected' : ''}}> {{$cat->name}}</option>
                        @endforeach
                    </select>
                    @error('category') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            @endif
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Banner Image</label>
                @if($subCategory->multimedia()->count() > 0)
                    <div class="display: inline-block">
                        @foreach($subCategory->multimedia()->get() as $pic)
                            <img alt="{{ env('APP_NAME', '') }}"
                                 style="display: block; margin-left: 20px; max-width: 200px; max-height: 200px"
                                 src="data:image/jpeg;base64,{{ base64_encode(Storage::get($pic->getRawOriginal('source_path'))) }}"/>
                        @endforeach
                    </div>

                @endif
                <input type="file" wire:model.defer="bannerImage">
                @error('bannerImage') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex items-center justify-start space-x-4">
                <div class="ml-12 sm:flex-right">
                    <a href="/sub-categories"
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
