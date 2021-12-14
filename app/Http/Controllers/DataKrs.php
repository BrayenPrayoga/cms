<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataKrs extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_user()
    {
        $no = 1;
        $krs = KRS::get();

        return view('users.data_krs',compact('no','krs'));
    }
}