<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function dekripsiImg()
    {
        return view('content.dekripsiImg');
    }

    public function enkripsiImg()
    {
        return view('content.enkripsiImg');
    }

    public function dekripsiImg_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'ciphertext' => 'required',
        ]);
    
        // Mendapatkan ciphertext dari input
        $ciphertext = $request->ciphertext;
    
        // Dekripsi ciphertext menjadi binary data gambar
        $decryptedImageData = base64_decode($ciphertext);
    
        // Simpan binary data gambar ke dalam session untuk ditampilkan di tampilan
        session(['decrypted_image_data' => $decryptedImageData]);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Gambar berhasil didekripsi.');
    }
    
    public function enkripsiImg_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Lakukan enkripsi
        $image = $request->file('image');
    
        // Baca file gambar sebagai binary
        $imageData = file_get_contents($image->getRealPath());
    
        // Enkripsi gambar
        $ciphertext = base64_encode($imageData);
    
        // Simpan gambar ke dalam direktori public/img dengan nama yang unik
        $imageName = 'encrypted_image_' . time() . '.' . $image->extension();
        $image->move(public_path('img'), $imageName);
    
        // Hapus data sesi decrypted_image_data setelah digunakan
        $request->session()->forget('decrypted_image_data');
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dienkripsi.')
            ->with('ciphertext', $ciphertext)
            ->with('imageName', $imageName);
    }
        

}


