@extends('layout.master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h1>KRIPTOGRAFI</h1>
    <p>Secara etimologis, kriptografi adalah istilah yang berasal dari bahasa Yunani, yaitu crypto dan graphia. Crypto diartikan sebagai “rahasia”, sedangkan Graphia berarti “tulisan”. Sehingga, kriptografi dapat diartikan sebagai tulisan yang bersifat rahasia.
    Dalam hal ini, pengertian lain dari kriptografi, yaitu ilmu yang mempelajari atau berfokus pada berbagai teknik matematika yang berhubungan dengan keamanan informasi (otentikasi dan kerahasiaan).
    Cara melakukan teknik kriptografi adalah sebagai berikut.
    Pengirim pesan akan mengatur sandi pada pesan awal yang nantinya menjadi kode dan hanya bisa dibaca oleh penerima pesan tersebut. Kemudian, penerima pesan akan mengembalikan kode-kode yang didapatkan menjadi pesan asli.</p>

    <h3>Istilah-Istilah dalam Kriptografi</h3>
    <p>Menurut Abidin, dkk (2016), beberapa istilah dalam kriptografi yang sering digunakan adalah sebagai berikut.
        <ol>
            <li>Plaintext [p] = pesan awal atau informasi sebelum dienkripsi.</li>
            <li>Enkripsi [E[p]] = proses kriptografi dari p menjadi c.</li>
            <li>Ciphertext [c] = pesan yang telah dienkripsi, tidak bisa dibaca karena karakter tidak memiliki makna.</li>
            <li>Key [k] = proses dekripsi kunci yang diperoleh penerima.</li>
            <li>Deskripsi [D[c]] = mengubah c ke p.</li>
        </ol>      
    </p>
    <h3>Sejarah Kriptografi</h3>
    <p>Kriptografi telah mulai digunakan sekitar 4000 abad yang lalu oleh bangsa Mesir. Mereka menggunakan kriptografi untuk mengirim pesan kepada pasukan yang sedang berada di medan perang. Tujuan utamanya sederhana, yaitu agar pesan yang dikirimkan tidak bisa diketahui oleh pihak musuh apabila pembawa pesan yang bersangkutan ditangkap sekalipun.
    Awal dari kriptografi adalah ketika Julius Caesar yang menggunakan teknik kriptografi untuk mengirim pesan rahasia pada anggota militernya. Sesuai nama penciptanya, teknik kriptografi tersebut dinamai Caesar Cipher.
    Awalnya kriptografi hanya digunakan untuk keperluan militer dan intelijen. Namun, seiring berkembangnya sistem komunikasi dan komputer pada tahun 60-an, terjadi peningkatan permintaan dari berbagai sektor untuk menyediakan layanan keamanan dan untuk melindungi informasi dalam bentuk digital.</p>
</div>
@endsection