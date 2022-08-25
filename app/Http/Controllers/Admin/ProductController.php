<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Imports\ProdukImport;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(Request $request)
    {  
        if($request->has('searchprod')){
            $products = Product::where('name', 'LIKE', '%'.$request->searchprod.'%')->paginate(10);
        }else{
            $products = Product::paginate(10);
        }
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.product.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $products = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $products->image = $filename;
        }

        $products->kate_id = $request->input('kate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_deskripsi = $request->input('small_deskripsi');
        $products->deskripsi = $request->input('deskripsi');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->weight = $request->input('weight');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_deskripsi = $request->input('meta_deskripsi');
        $products->save();
        return redirect('products')->with('status', "Produk Berhasil diTambahkan");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/products/'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/products/',$filename);
            $products->image = $filename;
        }
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_deskripsi = $request->input('small_deskripsi');
        $products->deskripsi = $request->input('deskripsi');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->weight = $request->input('weight');
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_deskripsi = $request->input('meta_deskripsi');
        $products->update();
        return redirect('products')->with('status', "Produk Berhasil diUpdate");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $path = 'assets/uploads/products/'.$products->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $products->delete();
        return redirect('products')->with('status', "Produk Berhasil diHapus");
    }

    public function import()
    {
        Excel::import(new ProdukImport, request()->file('improd'));

        return back()->with('status', "Data Berhasil Di Import");
    }

    public function export()
    {
        return Excel::download(new ProdukExport, 'produk.xlsx');
    }
}
