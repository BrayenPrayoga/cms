<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\MasterPasal;

class MasterPasalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $no = 1;
        $master_pasal = MasterPasal::get();

        return view('admin.master_pasal',compact('no','master_pasal'));
    }

    public function store(Request $request)
    {
        try{
            $data = [
                'nama'          => $request->nama,
                'created_at'    => date('Y-m-d H:i:s')
            ];
            MasterHeader::insert($data);

            return redirect()->back()->with(['success'=>'Berhasil Simpan']);
        }catch(\Exception $e){
            return redirect()->back()->with(['success'=> $e]);
        }
    }

    public function update(Request $request)
    {
        try{
            $data = [
                'nama'          => $request->nama,
                'updated_at'    => date('Y-m-d H:i:s')
            ];
            MasterHeader::where('id', $request->id)->update($data);

            return redirect()->back()->with(['success'=>'Berhasil Update']);
        }catch(\Exception $e){
            return redirect()->back()->with(['success'=> $e]);
        } 
    }

    public function hapus($id)
    {
        try{
            MasterHeader::where('id', $id)->delete();

            return redirect()->back()->with(['success'=>'Berhasil Delete']);
        }catch(\Exception $e){
            return redirect()->back()->with(['success'=> $e]);
        } 
    }
}