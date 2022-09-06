<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kkl;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(15)->get();
        $trending_kategori = Category::where('popular', '1')->take(15)->get();
        $sprod = Product::paginate(20);
        return view('frontend2.index', compact('featured_products', 'trending_kategori', 'sprod'));
    }

    public function view()
    {
        $kkl = Kkl::where('status', '0')->get();
        return view('frontend2.kkl.hasilkkl', compact('kkl'));
    }

    public function shop(Request $request)
    {
        if($request->has('searchshop')){
            $shop = Product::where('name', 'LIKE', '%'.$request->searchshop.'%')->paginate(20);
        }else{
            $shop = Product::paginate(20);
        }
        return view('frontend.shop', compact('shop'));
    }


    public function viewkategori($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $kategori = Category::where('slug', $slug)->first();
            $produk = Product::where('kate_id', $kategori->id)->where('status', '1')->get();
            return view('frontend.produk.index', compact('kategori', 'produk'));
        }
        else{
            return redirect('/')->with('status', "Slug Doesn't Exist");
        }
    }


    public function produkview($kate_slug, $prod_slug)
    {
        if (Category::where('slug', $kate_slug)->exists())
        {
            if (Product::where('slug', $prod_slug)->exists())
            {
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.produk.view', compact('products'));
            }
            else{
                return redirect('/')->with('status', "The Link Was Broken");
            }
        }
        else{
            return redirect('/')->with('status', "No Such Category Found");
        }
    }

    public function productlistAjax()
    {
        $products = Product::select('name')->where('status', '1')->get();
        $data = [];

        foreach($products as $item) {
            $data[] = $item['name'];
        }

        return $data;
    }

    public function searchProduct(Request $request)
    {
        $searched_product = $request->product_name;

        if($searched_product != "")
        {
            $produk = Product::where("name", "LIKE", "%$searched_product%")->first();
            if($produk)
            {
                return redirect('kategori/'.$produk->kategori->slug.'/'.$produk->slug);
            }
            else
            {
                return redirect()->back()->with("status", "Tidak Ada Produk Yang diCari");
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
