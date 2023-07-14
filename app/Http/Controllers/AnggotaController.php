<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TmDataAnggota;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    public function list(Request $request)
    {
        $data = TmDataAnggota::all();

        return collect($data)->map->only(['id', 'name'])->all();

    }
    public function index()
    {
        $data = TmDataAnggota::latest()->get();

        $dataVerif = $data->where('status', '1');
            
        $totalVerif = $dataVerif->count();
        $total = $data->count();

        return view('admin.anggota-index', compact('data', 'total', 'totalVerif'));
    }


    public function show($id)
    {
        $anggota = TmDataAnggota::where('id', $id)->first();
        
        return view('admin.anggota-show', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.anggota-create');
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

    public function delete($id)
    {
        $anggota = TmDataAnggota::find($id);

        if ($anggota) {
            $anggota->delete();
            Session::flash('success', 'Sukses menghapus anggota');
        } else {
            Session::flash('error', 'Sukses tidak anggota');
        }

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'nim' => 'nullable',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'ukuran_baju' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            DB::beginTransaction();
            // Handle file upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('public/images');
                $imageUrl = Storage::url($imagePath);
            }

            // Format the tanggal_lahir field using Carbon
            $tanggalLahir = Carbon::createFromFormat('d/m/Y', $valid['tanggal_lahir'])->format('Y-m-d');

            // CREATE TM DATA PANITIA
            $panitia = TmDataAnggota::create([
                'name' => $valid['name'],
                'email' => $valid['email'],
                'nim' => $valid['nim'],
                'no_telepon' => $valid['no_telepon'],
                'jenis_kelamin' => $valid['jenis_kelamin'],
                'tanggal_lahir' => $tanggalLahir,
                'ukuran_baju' => $valid['ukuran_baju'],
                'alamat' => $valid['alamat'],
                'image_url' => $imageUrl ?? null,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Submit successful',
                'success' => true,
                'data' => $panitia,
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'success' => false,
            ], 500);
        }
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
