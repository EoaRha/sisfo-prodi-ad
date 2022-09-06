<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kkl;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KklController extends Controller
{
    public function kkl()
    {
        
        return view('frontend2.kkl.index');
    }

    public function submitkkl(Request $request)
    {
    	$kkl = new Kkl();
    	$kkl->user_id = Auth::id();
    	$kkl->nama_mahasiswa = $request->input('nama_mahasiswa');
    	$kkl->nomor_mahasiswa = $request->input('nomor_mahasiswa');
    	$kkl->kelas = $request->input('kelas');
    	$kkl->judul = $request->input('judul');
    	$kkl->deskripsi = $request->input('deskripsi');
    	$kkl->save();

    	if(Auth::user()->nomor_mahasiswa == NULL)
    	{
    		$user = User::where('id', Auth::id())->first();
    		$user->nama_mahasiswa = $request->input('nama_mahasiswa');
    		$user->nomor_mahasiswa = $request->input('nomor_mahasiswa');
    		$user->kelas = $request->input('kelas');
    		$user->update();
    	}

    	return redirect('/')->with('status', "Pengajuan Judul KKL Terkirim, Silahkan Tunggu Status Pengajuan");
    }
    
}
