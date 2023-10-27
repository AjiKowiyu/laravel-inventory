<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;

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
        //
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
