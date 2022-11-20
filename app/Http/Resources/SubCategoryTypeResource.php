<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class SubCategoryTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    #[Pure] #[ArrayShape(['id' => "mixed", 'name' => "mixed", 'slug' => "mixed", 'sub_category' => "\App\Http\Resources\SubCategoryResource", 'description' => "mixed"])] public function toArray($request): array
    {
        return
            [
                'id' => $this->id,
                'name' => $this->name,
                'slug' => $this->slug,
                'sub_category' => new SubCategoryResource($this->subCategory),
                'description' => $this->description
            ];

    }
}
