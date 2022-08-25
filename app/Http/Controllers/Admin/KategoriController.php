<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;

use App\Http\Controllers\Controller;
use App\Imports\KategoriImport;
use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('searchkat')){
            $category = Category::where('name', 'LIKE', '%'.$request->searchkat.'%')->paginate(5);
        }
        else{
            $category = Category::paginate(5);
        }

        
        return view('admin.kategori.index', compact('category'));
    }

    public function add()
    {
        return view('admin.kategori.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName.'.'.$ext;
            $file->move('assets/uploads/kategori/',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->deskripsi = $request->input('deskripsi');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_deskripsi = $request->input('meta_deskripsi');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();
        return redirect('Kategori')->with('status', "Kategori Berhasil diTambahkan");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.kategori.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/kategori/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/kategori/',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->deskripsi = $request->input('deskripsi');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_deskripsi = $request->input('meta_deskripsi');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();
        return redirect('Kategori')->with('status', "Kategori TerUpdate");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path = 'assets/uploads/kategori/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $category->delete();
            return redirect('Kategori')->with('status',"Kategori TerHapus");
        }
    }

    public function import()
    {
        Excel::import(new KategoriImport, request()->file('imkate'));

        return back()->with('status', "Data Berhasil Di Import");
    }

    public function export()
    {
        return Excel::download(new KategoriExport, 'kategori.xlsx');
    }
}
