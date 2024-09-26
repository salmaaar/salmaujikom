<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all(); 
        return view('cart.index', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:1',
            'price' => 'required|numeric|min:1',
            'address' => 'required|string|min:1',
        ], [
            'name' => 'Wajib diisi',
            'name.unique' => 'Nama barang sudah ada',
            'description' => 'Wajib diisi',
            'price' => 'Wajib diisi',
            'address' => 'Wajib diisi',
        ]);
    
        $cart = Cart::create($validatedData);

        return redirect()->route('cart.index')->with('success', 'Info produk berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = Cart::findOrFail($id); 
        return view('cart.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:1',
            'price' => 'required|numeric|min:1',
            'address' => 'required|string|min:1',
        ], [
            'name' => 'Wajib diisi',
            'description' => 'Wajib diisi',
            'price' => 'Wajib diisi',
            'address' => 'Wajib diisi',
        ]);
    
        $cart->update($validatedData);

        return redirect()->route('cart.index')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus');
    }
}
