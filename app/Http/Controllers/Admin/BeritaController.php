<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
    	$berita = Berita::all();
    	return view('admin2.berita.index', compact('berita'));
    }

    public function add()
    {
    	return view('admin2.berita.add');
    }

    public function insert(Request $request)
    {
    	$berita = new Berita();
    	if($request->hasFile('image'))
    	{
    		$file = $request->file('image');
    		$filename = $file->getClientOriginalName();
    		$file->move('uploads/berita/', $filename);
    		$berita->image = $filename;
    	}

    	$berita->judul = $request->input('judul');
    	$berita->slug = Str::slug($request->input('slug'));
    	$berita->penulis = $request->input('penulis');
    	$berita->deskripsi = $request->input('deskripsi');
    	$berita->meta_title = $request->input('meta_title');
    	$berita->meta_deskripsi = $request->input('meta_deskripsi');
    	$berita->meta_keywords = $request->input('meta_keywords');
        $berita->status = $request->input('status') == TRUE ? '1':'0';
        $berita->trending = $request->input('trending') == TRUE ? '1':'0';
    	$berita->save();
    	return redirect('adm-berita')->with('status', "Berita Berhasil Di Tambahkan");
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin2.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        if($request->hasFile('image'))
        {
            $path = 'uploads/berita/'.$berita->image;
            if (File::exists($path)) 
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/berita/', $filename);
            $berita->image = $filename;
        }
        $berita->judul = $request->input('judul');
        $berita->slug = Str::slug($request->input('slug'));
        $berita->penulis = $request->input('penulis');
        $berita->deskripsi = $request->input('deskripsi');
        $berita->meta_title = $request->input('meta_title');
        $berita->meta_deskripsi = $request->input('meta_deskripsi');
        $berita->meta_keywords = $request->input('meta_keywords');
        $berita->status = $request->input('status') == TRUE ? '1':'0';
        $berita->trending = $request->input('trending') == TRUE ? '1':'0';
        $berita->update();
        return redirect('adm-berita')->with('status', "Berita Berhasil Di Update");
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        if($berita->image)
        {
            $path = 'uploads/berita/'.$berita->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $berita->delete();
            return redirect('adm-berita')->with('status', "Berita Berhasil Di Hapus");
        }
    }
}
