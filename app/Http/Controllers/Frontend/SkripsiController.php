<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skripsi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SkripsiController extends Controller
{
    public function skripsi()
    {
    	return view('frontend2.skripsi.index');
    }

    public function submitskripsi(Request $request)
    {
    	$skripsi = new Skripsi();
    	$skripsi->user_id = Auth::id();
    	$skripsi->nama_mahasiswa = $request->input('nama_mahasiswa');
    	$skripsi->nomor_mahasiswa = $request->input('nomor_mahasiswa');
    	$skripsi->kelas = $request->input('kelas');
    	$skripsi->judul = $request->input('judul');
    	$skripsi->deskripsi = $request->input('deskripsi');
    	$skripsi->save();

    	if(Auth::user()->nomor_mahasiswa == NULL)
    	{
    		$user = User::where('id', Auth::id())->first();
    		$user->nama_mahasiswa = $request->input('nama_mahasiswa');
    		$user->nomor_mahasiswa = $request->input('nomor_mahasiswa');
    		$user->kelas = $request->input('kelas');
    		$user->update();
    	}

    	return redirect('/')->with('status', "Pengajuan Judul Skripsi Terkirim, Silahkan Tunggu Status Pengajuan");
    }
}
