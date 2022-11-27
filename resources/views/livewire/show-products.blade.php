
    <div class="items-center pt-6 sm:pt-0">

        <div class=" mt-6 p-6 bg-white shadow-md sm:rounded-lg">
            <div class="ml-12 mt-12 sm:flex-right">
                <a href="/actions"
                   class="underline mt-12 text-blue-700">
                    << Go Back To Navigation
                </a>
            </div>
            <div class="max-w-4xl mx-auto mt-5">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Products</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the Products.</p>
                        </div>
                        <div class="ml-12 sm:flex-right">
                            <a href="/product/add"
                               class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                                Add Product
                            </a>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th scope="col"
                                                class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Short Desc
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Long Desc
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Stock Quantity
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Reference Number
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">
                                                Price
                                            </th>
                                            <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $product)
                                            <tr>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ $product->name }}
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $product->short_description }}
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $product->long_description }}
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $product->in_stock }}
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $product->reference_number }}
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $product->price }}
                                                </td>
                                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="/product/edit/{{ $product->id }}"
                                                       class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       onclick="confirm('Are you sure you want to remove the product') || event.stopImmediatePropagation()"
                                                       wire:click="delete({{ $product->id }})"
                                                       class="text-red-600 hover:text-red-900">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
