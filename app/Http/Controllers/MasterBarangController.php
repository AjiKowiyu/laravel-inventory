<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use Illuminate\Support\Facades\Auth;

class MasterBarangController extends Controller
{
    public function index()
    {
        //proses ambil data dari mysql
        $barang = MasterBarangModel::all();
        return view('master/barang/index', compact('barang'));
    }


    public function create()
    {
        return view('master/barang/form-tambah');
    }


    public function store(Request $request)
    {
        try {
            $insert = MasterBarangModel::create([
                'kode'              => $request->html_kode,
                'nama'              => $request->html_nama,
                'deskripsi'         => $request->html_deskripsi,
                'id_kategori'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => Auth::user()->id,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ]);
            //jika proses insert berhasil
            if ($insert) {
                return redirect()
                ->route('master-barang')
                ->with('success', 'Berhasil menambahkan barang baru!');
            }
        }
        catch (\Throwable $th) {
            // return redirect()
            // ->route('master-barang-tambah')
            // ->with('error', $th->getMessage());
            echo $th->getMessage();
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
