<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountRoleController extends Controller
{

    public function index()
    {
        $role = Role::all();
        return view('account/role/index', compact('role'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $role = DB::select(
            "SELECT
                ro.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
            FROM roles as ro
            LEFT JOIN users as u1 ON ro.dibuat_oleh = u1.id
            LEFT JOIN users as u2 ON ro.diperbarui_oleh = u2.id
            WHERE ro.id = ?;",
            [$id]
        );
        return view('account/role/detail', compact('role'));
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
