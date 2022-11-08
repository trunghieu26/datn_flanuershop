<?php

namespace App\Services\Admin;

use App\Models\Product;
use Throwable;

class ProductService {
    public function create($data)
    {
        try {
            Product::create([
                'name' => $data->name,
                'price' => $data->price,
                'content' => $data->content,
                'image' => $data->image,
                'status' => $data->status,
                'discount' => $data->discount,
                'catalog_id' => $data->catalog_id
            ]);
        } catch (Throwable $e) {
            return ($e);
        }
    }
} 