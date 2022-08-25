<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProdukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('kate_id', 'name', 'slug', 'small_deskripsi', 'deskripsi', 'original_price', 'selling_price', 'qty', 'weight', 'status', 'trending', 'meta_title', 'meta_keywords', 'meta_deskripsi')->get();
    }

    public function headings():array
    {
    	return ["Kategori Id", "Nama", "Slug", "Deskripsi Singkat", "Deskripsi", "Harga Coret", "Harga Jual", "Stock", "Berat", "Status", "Trending", "Meta_Title", "Meta_Keywords", "Meta_Deskripsi"];
    }
}
