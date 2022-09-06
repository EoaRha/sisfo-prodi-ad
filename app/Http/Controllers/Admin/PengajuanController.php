<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kkl;

class PengajuanController extends Controller
{
    public function index_kkl()
    {
    	$kkl = Kkl::all();
    	return view('admin2.kkl.index', compact('kkl'));
    }
}
