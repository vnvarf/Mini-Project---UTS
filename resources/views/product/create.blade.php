@extends('layouts.app')
@section('content')

    <div class="container-sm mt-5 ">
        <form class="row g-3" action="{{ route('Product.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center ">
                <style>
                    .bg-pink {
                        background-color: #f6c0ed;
                    }
                </style>
                <div class="p-3 bg-pink rounded-3 border col-xl-6">
                    <div class="mb-3 text-center ">
                        <i class="bi bi-flower1 fs-1"></i>
                        <h4>Input Product</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="KodeProduct" class="form-label">Kode Product</label>
                            <input class="form-control @error('KodeProduct') is-invalid @enderror autofocus" type="text" name="KodeProduct" id="KodeProduct" value="{{ old('KodeProduct') }}" placeholder="Enter Kode Product">
                            @error('KodeProduct')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="NamaProduct" class="form-label">Nama Product</label>
                            <input class="form-control @error('NamaProduct') is-invalid @enderror autofocus" type="text" name="NamaProduct" id="NamaProduct" value="{{ old('NamaProduct') }}" placeholder="Enter Nama Product">
                            @error('Namaproduct')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="HargaProduct" class="form-label">Harga Product</label>
                            <input class="form-control @error('HargaProduct') is-invalid @enderror autofocus" type="text" name="HargaProduct" id="HargaProduct" value="{{ old('HargaProduct') }}" placeholder="Enter Harga Product">
                            @error('HargaProduct')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('Deskripsi') is-invalid @enderror autofocus" type="text" name="Deskripsi" id="Deskripsi" value="{{ old('Deskripsi') }}" placeholder="Enter Deskripsi">
                            @error('Deskripsi')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('Product.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
