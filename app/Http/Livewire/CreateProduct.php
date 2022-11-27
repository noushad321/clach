<?php

namespace App\Http\Livewire;

use App\Models\Attributes;
use App\Models\AttributeValues;
use App\Models\Category;
use App\Models\Multimedia;
use App\Models\Product;
use App\Models\ProductAttributes;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use App\Models\Tag;
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
    public ProductAttributes $productAttributes;
   // public $photos = [];
    public $category;
    public $sub_category;
    public $sub_category_type;
    public $tags;
    public $attributes;
    public $attributeValues;

    protected $rules = [
        'product.name' => 'required|string',
        'product.short_description' => 'required|string',
        'product.long_description' => 'string|nullable',
        'product.in_stock' => 'required|string|numeric',
        'product.reference_number' => 'required|string|min:6',
        'product.price' => 'required|numeric',
        'category' => 'required|numeric',
        'sub_category' => 'required|numeric',
        'sub_category_type' => 'required|numeric',
        'tags' => 'required|numeric',
        'attributes' => 'sometimes | numeric',
        'attributeValues' => 'sometimes | numeric',
       // 'photos.*' => 'image|max:1024',
    ];

    public function mount()
    {
        $this->product = new Product();
        $this->productAttributes = new ProductAttributes();
        $this->category = Category::all();
        $this->sub_category = SubCategory::all();
        $this->sub_category_type = SubCategoryType::all();
        $this->tags = Tag::all();
        $this->attributes = Attributes::all();
        $this->attributeValues = AttributeValues::all();

    }

    public function save()
    {
        $this->validate();
        $this->product->slug = Str::slug($this->product->name, '-');
        //TODO: must be substituted for the actual category type.
        $this->product->fk_sub_category_type_id = $this->sub_category_type;
        $this->product->save();

        $this->productAttributes->fk_product_id = $this->product->id;
        $this->productAttributes->fk_attribute_values_id = $this->attributeValues;
        $this->productAttributes->save();

//        foreach ($this->photos as $key => $photo) {
//            $filePath = ( 'uploads/') . date('Y/m');
//            $file = $photo;
//            $extension = $file->getClientOriginalExtension();
//            $fileName = uniqid() . '.' . $extension;
//            $uploadPath = $file->storeAs($filePath, $fileName);
//            $originalName = $file->getClientOriginalName();
//            $media = new Multimedia();
//            $media->name = $originalName;
//            $media->source_path= $uploadPath;
//            $media->order = $key++;
//            $this->product->multimedia()->save($media);
//
//        }

        return redirect()->to('/products');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.create-product');

    }
    }
