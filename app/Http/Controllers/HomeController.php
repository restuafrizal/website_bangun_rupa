<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desains;

class HomeController extends Controller
{
    public function index(Request $request)
    {

    $title = 'Beranda';
    $query = $request->q;

    $desainsTerbaru = Desains::latest()
        ->when($query, function ($q) use ($query) {
            $q->where('nama_produk', 'like', "%$query%")
              ->orWhere('nama_desainer', 'like', "%$query%");
        })
        ->take(8)
        ->get();

    $desainsRatingTerbaik = Desains::withAvg('ratings', 'rating')
        ->when($query, function ($q) use ($query) {
            $q->where('nama_produk', 'like', "%$query%")
              ->orWhere('nama_desainer', 'like', "%$query%");
        })
        ->orderByDesc('ratings_avg_rating')
        ->take(8)
        ->get();

    return view('home/index', compact('title','desainsTerbaru', 'desainsRatingTerbaik'));
    }


    public function kebijakan_privasi(){
        $title = 'Kebijakan Privasi';

        return view ('home/kebijakan_privasi', compact('title'));
    }

    public function syarat_ketentuan(){
        $title = 'Syarat dan Ketentuan';

        return view ('home/syarat_ketentuan', compact('title'));
    }

    public function form_faq(){
        $title = 'FAQ';

        return view ('home/form_faq', compact('title'));
    }

    public function kontak(){
        $title = 'Kontak Kami';

        return view ('home/kontak', compact('title'));
    }

    public function tentang_kami(){
        $title = 'Tentang Kami';

        return view ('home/tentang_kami', compact('title'));
    }

}
