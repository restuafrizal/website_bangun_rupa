<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PurchaseHistory;
use App\Models\Rating;
use Illuminate\Http\Exceptions\HttpResponseException;


class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil';
        return view ('profil/index', compact('title'));
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Hapus file lama jika bukan default
        if ($user->image !== 'default.jpg' && file_exists(public_path('img/profil/' . $user->image))) {
            unlink(public_path('img/profil/' . $user->image));
        }

        // Simpan file baru
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img/profil'), $filename);

        // Update user
        $user->image = $filename;
        $user->save();

        return back()->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'no_hp' => 'nullable|string|max:20',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'city' => 'nullable|string|max:255',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->no_hp = $request->input('no_hp');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }

   public function history()
   {
    $title = 'History';

    $userId = Auth::id();

    $histories = PurchaseHistory::with('desain')->where('user_id', $userId)->latest()->get();

    foreach ($histories as $history) {
        $history->desain->already_rated = Rating::where('user_id', $userId)
            ->where('desain_id', $history->desain->id)
            ->exists();
    }

    return view('profil.history', compact('histories', 'title'));
    }


    public function storeRating(Request $request)
    {
    $request->validate([
        'desain_id' => 'required|exists:desains,id',
        'rating' => 'required|integer|min:1|max:5',
        'komentar' => 'nullable|string|max:1000',
    ]);

    Rating::create([
        'user_id' => Auth::id(),
        'desain_id' => $request->desain_id,
        'rating' => $request->rating,
        'komentar' => $request->komentar,
    ]);

    return redirect()->back()->with('success', 'Rating berhasil dikirim!');
    }


}