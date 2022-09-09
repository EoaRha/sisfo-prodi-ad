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

    public function edit($id)
    {
    	$kkl = Kkl::find($id);
    	return view('admin2.kkl.edit', compact('kkl'));
    }

    public function update(Request $request, $id)
    {
    	$kkl = Kkl::find($id);
    	$kkl->judul = $request->input('judul');
    	$kkl->deskripsi = $request->input('deskripsi');
    	$kkl->catatan = $request->input('catatan');
    	$kkl->penguji = $request->input('penguji');
    	$kkl->pembimbing = $request->input('pembimbing');
    	$kkl->status = $request->input('status');
    	$kkl->update();
    	return redirect('adm-kkl')->with('status', "Pengajuan KKL Berhasil diUpdate");
    }

    public function destroy($id)
    {
    	$kkl = Kkl::find($id);
    	$kkl->delete();

    	return redirect('adm-kkl')->with('status', "Pengajuan KKL Berhasil diHapus");
    }
}
