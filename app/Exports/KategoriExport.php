<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KategoriExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Category::select('id', 'name', 'slug', 'deskripsi', 'status', 'popular', 'meta_title', 'meta_deskripsi', 'meta_keywords')->get();
    }

    public function headings():array
    {
    	return ["Id", "Nama", "Slug", "Deskripsi", "Status", "Popular", "Meta_Title", "Meta_Deskripsi", "Meta_Keywords"];
    }
}
