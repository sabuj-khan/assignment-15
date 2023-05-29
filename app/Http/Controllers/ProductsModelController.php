<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use App\Http\Requests\StoreProductsModelRequest;
use App\Http\Requests\UpdateProductsModelRequest;

class ProductsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductsModel $productsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductsModel $productsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsModelRequest $request, ProductsModel $productsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductsModel $productsModel)
    {
        //
    }
}
