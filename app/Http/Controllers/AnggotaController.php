<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TmDataAnggota;

class AnggotaController extends Controller
{
    public function list(Request $request)
    {
        $data = TmDataAnggota::all();

        return collect($data)->map->only(['id', 'name'])->all();

    }
    public function index()
    {

        $data = TmDataAnggota::get();

        $dataVerif = $data->where('status', '1');

        
        
        $totalVerif = $dataVerif->count();
        $total = $data->count();

    

        

        return view('admin.anggota-index', compact('data','total','totalVerif') );
    }

    public function show($id)
    {
        $anggota = TmDataAnggota::where('id', $id)->first();
        
        return view('admin.anggota-show', compact('anggota'));
    }

    public function create()
    {
        return view('article.anggota-create');
    }


    public function publish($id)
    {
        $anggota = TmDataAnggota::where('id', $id)->first();
        $date = date('Y-m-d');
        $user = auth()->user();
        $update = [
            'status' => 1,
            'updated_at' => $date,
        ];

        $anggota->update($update);

        Session::flash('success', 'Sukses mengubah status');
        return redirect()->back();
    }

    public function edit($id){
        $anggota = TmDataAnggota::where('id', $id)->first();

            
        return view('admin.anggota-edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $newdata = TmDataAnggota::where('id', $id)->first();
        DB::beginTransaction();

        try {
            $data = $request->all();
            $newdata->update($data);
            DB::commit();
            
            Session::flash('success', 'Sukses Edit data');
            return response()->json(['success' => true, 'message' => 'Sukses edit data']);
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage() . $exception->getTraceAsString());
            
            Session::flash('error', 'Gagal Edit data');
            return redirect()->back();
        }
    }
}
