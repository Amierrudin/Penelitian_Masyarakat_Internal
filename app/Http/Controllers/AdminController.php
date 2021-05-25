<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data_admin = \App\Models\Admin::all();
        return view('admin.admin_index',['data_admin' => $data_admin]);
    }
}
