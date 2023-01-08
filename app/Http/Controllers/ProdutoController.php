<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprodutoRequest;
use App\Http\Requests\UpdateprodutoRequest;
use App\Models\produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("produtos", ["name" => "James"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprodutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprodutoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprodutoRequest  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprodutoRequest $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        //
    }
}