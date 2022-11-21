<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
   #[Pure] public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'in_stock' => $this->in_stock,
            'reference_number' => $this->reference_number,
            'price' => $this->price,
            'sub_category_type' => new SubCategoryTypeResource($this->subCategoryType),
            'tags' => $this->tags,
            'attributes' => $this->attributeValues
        ];
    }
}
