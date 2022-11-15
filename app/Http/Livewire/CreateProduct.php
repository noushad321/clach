<?php

namespace App\Http\Livewire;

use App\Models\Multimedia;
use App\Models\Product;
use App\Models\SubCategoryType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateProduct extends Component
{
    use WithFileUploads;
    public Product $product;
    public $photos = [];

    protected $rules = [
        'product.name' => 'required|string',
        'product.short_description' => 'required|string',
        'product.long_description' => 'string|nullable',
        'product.in_stock' => 'required|string|numeric',
        'product.reference_number' => 'required|string|min:6',
        'product.price' => 'required|numeric',
        'photos.*' => 'image|max:1024',
    ];

    public function mount()
    {
        $this->product = new Product();
    }

    public function save()
    {
        $this->validate();
        $this->product->slug = Str::slug($this->product->name, '-');
        //TODO: must be substituted for the actual category type.
        $this->product->fk_sub_category_type_id = 1;
        $this->product->save();

        foreach ($this->photos as $key => $photo) {
            $filePath = ( 'uploads/') . date('Y/m');
            $file = $photo;
            $extension = $file->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            $uploadPath = $file->storeAs($filePath, $fileName);
            $originalName = $file->getClientOriginalName();
            $media = new Multimedia();
            $media->name = $originalName;
            $media->source_path= $uploadPath;
            $media->order = $key++;
            $this->product->multimedia()->save($media);

        }

        return redirect()->to('/products');
    }

    public function render(): Factory|View|Application
    {
        $subCategoryTypes = SubCategoryType::all();
        return view('livewire.create-product', [[
            'category_types' => $subCategoryTypes,
        ]]);
    }
}
