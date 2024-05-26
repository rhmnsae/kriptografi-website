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
                        <h5 class="mb-0">Dekripsi Text</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('proses-dekripsi') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Ciphertext</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ciphertext" id="basic-default-key" placeholder="Masukkan Ciphertext"/>
                              </div>
                          </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Key</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="key" id="basic-default-key"
                                        placeholder="Masukkan Key" />
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Plaintext</label>
                              <div class="col-sm-10">
                                <input type="text" name="plaintext" class="form-control" id="basic-default-teks" value="{{ session('plaintext') }}" readonly />
                              </div>
                          </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
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
