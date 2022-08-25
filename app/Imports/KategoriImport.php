<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KategoriImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            'name' => $row['name'],
            'slug' => $row['slug'],
            'deskripsi' => $row['deskripsi'],
            'status' => $row['status'],
            'popular' => $row['popular'],
            'image' => $row['image'],
            'meta_title' => $row['meta_title'],
            'meta_deskripsi' => $row['meta_deskripsi'],
            'meta_keywords' => $row['meta_keywords'],
        ]);
    }
}
