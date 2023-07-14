<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TmDataAbsensi;
use App\Models\TmDataAnggota;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AbsensiController extends Controller
{
    public function list(Request $request)
    {
        $data = TmDataAbsensi::all();

        return collect($data)->map->only(['id', 'name'])->all();

    }
    public function index()
    {

        $data = TmDataAbsensi::get();

        $dataVerif = $data->where('status', '1');

        
        
        $totalVerif = $dataVerif->count();
        $total = $data->count();

    

        

        return view('admin.absensi-index', compact('data','total','totalVerif') );
    }

    public function show($id)
    {
        $anggota = TmDataAbsensi::where('id', $id)->first();
        
        return view('absensi.absensi-show', compact('anggota'));
    }

    public function create()
    {
        return view('absensi.absensi-create');
    }

    public function store(Request $request)

    
    {

        $valid = $request->validate([
            'tanggal' => 'required|date',
            'anggota' => 'required|array',
            'anggota.*' => 'exists:tm_data_anggota,id', // Make sure the selected anggota IDs exist in the tm_data_anggota table
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
        ]);

        
        $anggotaNames = TmDataAnggota::whereIn('id', $valid['anggota'])->pluck('name')->toArray();


        

        try {
            DB::beginTransaction();

            // Handle file upload
            if ($request->hasFile('dokumentasi')) {
                $dokumentasi = $request->file('dokumentasi');
                $dokumentasiPath = $dokumentasi->store('public/images');
                $dokumentasiUrl = Storage::url($dokumentasiPath);
            }

            // CREATE TM DATA ABSENSI
            $absensi = TmDataAbsensi::create([
                'tanggal' => $valid['tanggal'],
                'anggota' => json_encode($anggotaNames),
                'dokumentasi' => $dokumentasiUrl ?? null,
                'keterangan' => $valid['keterangan'],
            ]);

            DB::commit();
            $response = ['success' => 'Sukses tambah data'];
        } catch (\Exception $e) {
            DB::rollBack();
            $data = [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ];
            $response = ['error' => 'Gagal tambah data'];
        }

        // Return the response as JSON
        return response()->json($response);
    }



    public function publish($id)
    {
        $anggota = TmDataAbsensi::where('id', $id)->first();
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
        $anggota = TmDataAbsensi::where('id', $id)->first();

            
        return view('absensi.absensi-edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $newdata = TmDataAbsensi::where('id', $id)->first();
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
