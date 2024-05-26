@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Enkripsi Image</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url('proses-enkripsi-image')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Upload Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" id="basic-default-teks" />
                                </div>
                            </div>
                            <div class="row justify-content-end mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Hasil Ciphertext</label>
                                <div class="col-sm-10">
                                    <textarea name="ciphertext" class="form-control" id="basic-default-teks" rows="5" readonly>{{ session('ciphertext') }}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end mb-3">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-secondary" onclick="copyCiphertext()">Salin</button>
                                </div>
                            </div>                            
                            @if ($errors->any())
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>

<script>
    function copyCiphertext() {
        var ciphertext = document.querySelector('textarea[name="ciphertext"]');
        ciphertext.select();
        document.execCommand('copy');
        alert('Hasil ciphertext telah disalin!');
    }
</script>

@endsection
