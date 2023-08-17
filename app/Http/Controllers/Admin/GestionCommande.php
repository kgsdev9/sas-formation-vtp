<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GestionCommande extends Controller
{


    public function __construct()
    {
        $this->middleware(['admin', 'auth']);
    }

    /**
     * Display a listing of the resource.
     */
    public function liste()
    {
        $orders = Order::all();
        return view('admin.commandes.liste', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
