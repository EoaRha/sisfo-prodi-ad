<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('searchberita')){
            $berita = Berita::where('judul', 'LIKE', '%'.$request->searchberita.'%')->orderBy('updated_at', 'desc')->paginate(8);
        }
        else{
            $berita = Berita::paginate(8);
        }
        
        return view('frontend2.berita.index', compact('berita'));
    }

    public function view($slug)
    {
        if (Berita::where('slug', $slug)->exists()) 
        {
            $berita = Berita::where('status', '1')->get();
            return view('frontend2.berita.view', compact('berita'));
        }
        else{
            return redirect('berita')->with('status', "Alamat Ini Tidak Ada");
        }
    }
}
