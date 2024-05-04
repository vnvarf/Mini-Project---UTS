@extends('layouts.app')
@section('content')


    <div class="container-sm my-5 ">
        <div class="row justify-content-center">
            <div style="background-color: rgb(255, 184, 195);" class="p-5 rounded-3 col-xl-4 border">
                <div class="mb-3 text-center ">
                    <i class="bi bi-flower1 fs-1"></i>
                    <h4>Detail Product</h4>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-md-12 mb-3">
                        <label for="kode_product" class="form-label">Kode Product</label>
                        <h5>{{ $product->kode_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_product" class="form-label">Nama Product</label>
                        <h5>{{ $product->nama_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga_product" class="form-label">Harga Product</label>
                        <h5>{{ $product->harga_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi-product" class="form-label">Deskripsi Product</label>
                        <h5>{{ $product->deskripsi_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">satuan</label>
                        <h5>{{ $product->satuan->nama_satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('Product.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
