@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('Product.create') }}" class="btn" style="background-color: #c9f2ff">Input Product</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <style>
                .bg-light-blue {
                    background-color: #efefef;
                }
            </style>
            <table class="table table-bordered table-hover table-striped mb-0 bg-light-blue">
                <thead>
                    <tr>
                        <th>Kode Product</th>
                        <th>Nama Product</th>
                        <th>Harga Product</th>
                        <th>Deskripsi Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $product)
                        <tr>
                            <td>{{ $product->kode_product }}</td>
                            <td>{{ $product->nama_product }}</td>
                            <td>{{ $product->harga_product }}</td>
                            <td>{{ $product->deskripsi_product }}</td>
                            <td>{{ $product->satuan_name }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('Product.show', ['Product' => $product->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i
                                            class="bi-person-lines-fill"></i></a>


                                    <a href="{{ route('Product.edit', ['Product' => $product->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                    <div>
                                        <form
                                            action="{{ route('Product.destroy', ['Product' => $product->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
