<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\TmDataArticle;
use App\Models\TmDataPendaftar;
use App\Helpers\ResponseFormatter;
use App\Models\TmRefCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{   

    public function updateViews($id)
    {
        try {
            DB::beginTransaction();
            
            // Find the record by ID
            $data = TmDataArticle::findOrFail($id);

            // Update the 'views' column
            $data->views += 1;
            $data->save();

            DB::commit();

            // Redirect back to the page or perform any other action
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();

            $data = [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ];

            return ResponseFormatter::error($data);
        }
    }
    public function index(){
    
    $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

    $data = TmDataArticle::with('categories')
    ->where('status', 1)
    ->where('categories_id', '!=', 1)
    ->orderBy('created_at', 'desc')
    ->offset(1)
    ->paginate(6);



    $inter = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->where('categories_id', 1)
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();

    $popular = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

    $kategori = TmRefCategory::where('status', 1)->get();



        return view('home.index',compact('data','trending','popular', 'kategori','inter'));
    }
    
    public function sandiambacana(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.index',compact('data','trending','popular', 'kategori','inter'));
    }

    public function logo(){

   $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

    $data = TmDataArticle::with('categories')
    ->where('status', 1)
    ->where('categories_id', '!=', 1)
    ->orderBy('created_at', 'desc')
    ->skip(1)
    ->take(PHP_INT_MAX)
    ->get();

    $inter = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->where('categories_id', 1)
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();

    $popular = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

    $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.logo',compact('data','trending','popular', 'kategori','inter'));
    }

    public function adart(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();


                    return view('home.adart',compact('data','trending','popular', 'kategori','inter'));
    }

    public function pramukars(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.pramukars',compact('data','trending','popular', 'kategori','inter'));
    }


    public function data(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.data',compact('data','trending','popular', 'kategori','inter'));
    }

    public function struktur(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();


                    return view('home.struktur',compact('data','trending','popular', 'kategori','inter'));
    } 

    public function gugusdepan(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();

                    return view('home.gugusdepan',compact('data','trending','popular', 'kategori','inter'));
    }

    public function dewanambalan(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.dewanambalan',compact('data','trending','popular', 'kategori','inter'));
    }

    public function dewanracana(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.dewanracana',compact('data','trending','popular', 'kategori','inter'));
    }

    public function unitprotokol(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();


                    return view('home.unitprotokol',compact('data','trending','popular', 'kategori','inter'));
    }

    public function unitsearchandrescue(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.unitsearchandrescue',compact('data','trending','popular', 'kategori','inter'));
    }
    
    public function programkerja(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.programkerja',compact('data','trending','popular', 'kategori','inter'));
    }

    public function prestasi(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();



                    return view('home.prestasi',compact('data','trending','popular', 'kategori','inter'));
    }

    public function unitmediapers(){

        $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', '!=', 1)->latest()->first();

        $data = TmDataArticle::with('categories')
        ->where('status', 1)
        ->where('categories_id', '!=', 1)
        ->orderBy('created_at', 'desc')
        ->skip(1)
        ->take(PHP_INT_MAX)
        ->get();
    
        $inter = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->where('categories_id', 1)
                        ->orderBy('created_at', 'desc')
                        ->limit(5)
                        ->get();
    
        $popular = TmDataArticle::with('categories')
                        ->where('status', 1)
                        ->inRandomOrder()
                        ->limit(5)
                        ->get();
    
        $kategori = TmRefCategory::where('status', 1)->get();


                    return view('home.unitmediapers',compact('data','trending','popular', 'kategori','inter'));
    }
    

    
    
    
    public function join(){

        return view('home.join');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'nim' => 'nullable|string',
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
                $imagePath = $image->store('images', 'public');
                $imageUrl = Storage::disk('public')->url($imagePath);
            }

            // Format the tanggal_lahir field using Carbon
            $tanggalLahir = Carbon::createFromFormat('d/m/Y', $valid['tanggal_lahir'])->format('Y-m-d');

            // CREATE TM DATA PANITIA
            $panitia = TmDataPendaftar::create([
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

    public function detail($id){

        $trending = TmDataArticle::with('categories')->where('status', 1)->latest()->first();
        $item = TmDataArticle::with('categories')->where('status', 1)->where('id',$id)->first();
        

    $inter = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->where('categories_id', 1)
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();

    $popular = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

    $kategori = TmRefCategory::where('status', 1)->get();




        return view('home.detail',compact('item','trending','popular','kategori','inter'));
    }

    public function detailKategori($id){

    $trending = TmDataArticle::with('categories')->where('status', 1)->where('categories_id', $id)->latest()->first();

    $data = TmDataArticle::with('categories')
    ->where('status', 1)
    ->where('categories_id',  $id)
    ->orderBy('created_at', 'desc')
    ->skip(1)
    ->take(PHP_INT_MAX)
    ->get();

    $inter = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->where('categories_id', 1)
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();

    $popular = TmDataArticle::with('categories')
                    ->where('status', 1)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

    $kategori = TmRefCategory::where('status', 1)->get();



        return view('home.kategori',compact('data','trending','popular','kategori','inter'));
    }
}