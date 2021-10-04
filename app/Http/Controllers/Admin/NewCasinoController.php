<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class NewCasinoController extends Controller
{
    public function index()
    {
        return view('admin.new-casino');
    }
}
