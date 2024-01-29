<?php

namespace App\Repositories\Products;

use App\Repositories\BaseEloquentRepository;

class ProductEloquentRepository extends BaseEloquentRepository implements ProductRepository
{
    public function createProduct(array $data)
    {
        $data['created_by'] = auth()->user()->name;

        $this->create($data);
    }

    public function getProductByName($productName, $sectionId)
    {
        return $this->model->select('name')->where('name', $productName)->where('section_id', $sectionId)->first();
    }
}
