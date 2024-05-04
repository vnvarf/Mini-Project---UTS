<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Product List';
    
        $products = Product::all();

        return view('Product.index', [
            'pageTitle' => $pageTitle,
            'product' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Product';
        // ELOQUENT
        $satuans = Satuan::all();
        return view('product.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka.',
            'unique' => 'Kode Product sudah dipakai',
        ];

        $validator = Validator::make($request->all(), [
            'KodeProduct' => 'required|unique:products,kode_product',
            'NamaProduct' => 'required',
            'HargaProduct' => 'required|numeric',
            'Deskripsi' => 'required',

        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $product = new Product;
        $product->kode_product = $request->KodeProduct;
        $product->nama_product = $request->NamaProduct;
        $product->harga_product = $request->HargaProduct;
        $product->deskripsi_product = $request->Deskripsi;
        $product->satuan_id = $request->satuan;
        $product->save();
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Produk';
        // ELOQUENT
        $product = product::find($id);
        return view('Product.show', compact('pageTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Product';

        // ELOQUENT
        $satuans = satuan::all();
        $product = product::find($id);
        return view('Product.edit', compact('pageTitle', 'satuans', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka.',
            'unique' => 'Kode Product sudah dipakai',
        ];

        $validator = Validator::make($request->all(), [
            'KodeProduct' => 'required',
            'NamaProduct' => 'required',
            'HargaProduct' => 'required|numeric',
            'Deskripsi' => 'required',

        ], $messages);

        $validator->after(function ($validator) use ($request, $id) {
            $value = $request->input('KodeProduct');
            $count = DB::table('products')
                ->where('kode_product', $value)
                ->where('id', '<>', $id)
                ->count();

            if ($count > 0) {
                $validator->errors()->add('KodeProduct', 'Kode Barang ini sudah dipakai.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $product = Product::find($id);
        $product->kode_product = $request->KodeProduct;
        $product->nama_product = $request->NamaProduct;
        $product->harga_product = $request->HargaProduct;
        $product->deskripsi_product = $request->Deskripsi;
        $product->satuan_id = $request->satuan;
        $product->save();
        return redirect()->route('Product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        product::find($id)->delete();
        return redirect()->route('Product.index');
    }
}
