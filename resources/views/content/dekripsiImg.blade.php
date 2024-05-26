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
                        <h5 class="mb-0">Dekripsi Image</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('proses-dekripsi-image') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Ciphertext</label>
                              <div class="col-sm-10">
                                  <textarea type="text" class="form-control" name="ciphertext" id="basic-default-key" placeholder="Masukkan Ciphertext" rows="5"></textarea>
                              </div>
                          </div>
                          <div class="row justify-content-end mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Dekripsi</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Hasil Gambar</label>
                            <div class="col-sm-10">
                                @if(session('decrypted_image_data'))
                                    <img src="data:image/png;base64,{{ base64_encode(session('decrypted_image_data')) }}" class="img-fluid" alt="Decrypted Image">
                                @endif
                            </div>
                        </div>                        
                        </form>                                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
@endsection
