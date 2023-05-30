<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTronRequest;
use App\Http\Requests\UpdateTronRequest;
use App\Models\Tron;

class TronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexData()
    {
        $data = Tron::get();
        echo json_encode(array("result"=>$data));
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
    public function store(StoreTronRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tron $tron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tron $tron)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTronRequest $request, Tron $tron)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tron $tron)
    {
        //
    }
}
