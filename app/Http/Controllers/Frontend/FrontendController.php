<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kkl;
use App\Models\Skripsi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        
        return view('frontend2.index');
    }

    public function view()
    {
        $kkl = Kkl::where('status', '1')->get();
        return view('frontend2.kkl.hasilkkl', compact('kkl'));
    }

    public function history()
    {
        $kkl = Kkl::where('user_id', Auth::id())->get();
        return view('frontend2.kkl.history', compact('kkl'));
    }

    public function view_skripsi()
    {
        $skripsi = Skripsi::where('status', '1')->get();
        return view('frontend2.skripsi.hasilskripsi', compact('skripsi'));
    }

    public function history_skripsi()
    {
        $skripsi = Skripsi::where('user_id', Auth::id())->get();
        return view('frontend2.skripsi.history', compact('skripsi'));
    }
}
