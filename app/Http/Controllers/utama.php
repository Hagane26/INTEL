<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\pengumuman;

class utama extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_Dosen = Dosen::get();
        $data_Pengumuman = pengumuman::get();

        if($data_Dosen && $data_Pengumuman){
            $data_respon = collect([
                (object)[
                    'stat' => 1,
                    'msg' => 'Data Telah Dimuat',
                ],
            ]);
        }else{
            $data_respon = collect([
                (object)[
                    'stat' => 0,
                    'msg' => 'Data Gagal Dimuat',
                ],
            ]);
        }

        return view('index',compact('data_Dosen','data_Pengumuman','data_respon'));
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
