<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kkl;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Auth;

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

    public function index_skripsi()
    {
        $skripsi = Skripsi::all();
        return view('admin2.skripsi.index', compact('skripsi'));
    }

    public function edit_skripsi($id)
    {
        $skripsi = Skripsi::find($id);
        return view('admin2.skripsi.edit', compact('skripsi'));
    }

    public function update_skripsi(Request $request, $id)
    {
        $skripsi = Skripsi::find($id);
        $skripsi->judul = $request->input('judul');
        $skripsi->deskripsi = $request->input('deskripsi');
        $skripsi->catatan = $request->input('catatan');
        $skripsi->penguji = $request->input('penguji');
        $skripsi->pembimbing = $request->input('pembimbing');
        $skripsi->status = $request->input('status');
        $skripsi->update();
        return redirect('adm-skripsi')->with('status', "Pengajuan Skripsi Berhasil diUpdate");
    }

    public function destroy_skripsi($id)
    {
        $skripsi = Skripsi::find($id);
        $skripsi->delete();

        return redirect('adm-skripsi')->with('status', "Pengajuan Skripsi Berhasil diHapus");
    }

}
