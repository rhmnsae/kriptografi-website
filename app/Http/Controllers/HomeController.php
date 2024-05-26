<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.dashboard');
    }

    public function dekripsi()
    {
        return view('content.dekripsi');
    }

    public function enkripsi()
    {
        // Ambil nilai ciphertext dari session jika ada
        $ciphertext = Session::get('ciphertext');
        return view('content.enkripsi', compact('ciphertext'));
    }

    public function dekripsi_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'ciphertext' => 'required',
            'key' => 'required',
        ]);

        // Lakukan dekripsi
        $ciphertext = $request->ciphertext;
        $key = $request->key;
        
        // Enkripsi plaintext menggunakan Base64
        $decrypted = base64_decode($ciphertext);

        // Simpan hasil dekripsi dalam session
        Session::flash('plaintext', $decrypted);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil didekripsi.');
    }

    public function enkripsi_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'plaintext' => 'required',
            'key' => 'required',
        ]);

        // Lakukan enkripsi
        $plaintext = $request->plaintext;
        $key = $request->key;
        
        // Enkripsi plaintext menggunakan Base64
        $encrypted = base64_encode($plaintext);

        // Simpan hasil enkripsi dalam session
        Session::flash('ciphertext', $encrypted);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dienkripsi.');
    }
}
