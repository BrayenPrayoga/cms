<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MasterHeader extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Start Controller User
    public function index()
    {
        $no = 1;
        $id_user = Auth::guard('admin')->user()->id;
        $user = User::where('id', $id_user)->get();

        return view('admin.data_mahasiswa',compact('no','user'));
    }

}
