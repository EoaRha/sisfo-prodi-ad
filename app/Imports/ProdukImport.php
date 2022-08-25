<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            'kate_id' => $row['kate_id'],
            'name' => $row['name'],
            'slug' => $row['slug'],
            'small_deskripsi' => $row['small_deskripsi'],
            'deskripsi' => $row['deskripsi'],
            'original_price' => $row['original_price'],
            'selling_price' => $row['selling_price'],
            'image' => $row['image'],
            'qty' => $row['qty'],
            'weight' => $row['weight'],
            'status' => $row['status'],
            'trending' => $row['trending'],
            'meta_title' => $row['meta_title'],
            'meta_keywords' => $row['meta_keywords'],
            'meta_deskripsi' => $row['meta_deskripsi'],
        ]);
    }
}
