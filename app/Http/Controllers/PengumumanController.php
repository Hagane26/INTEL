<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepengumumanRequest;
use App\Http\Requests\UpdatepengumumanRequest;
use App\Models\pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respon = pengumuman::get();
        var_dump($respon);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepengumumanRequest $request)
    {
        $sender = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kadaluarsa' => $request->kadaluarsa,
        ];
        $result = pengumuman::create($sender);
        if ($result){
            $data = collect([
                (object)[
                    'stat' => 1,
                    'msg' => 'Data Telah Ditambah',
                ],
            ]);
        }else{
            $data = collect([
                (object)[
                    'stat' => 0,
                    'msg' => 'Data Gagal Ditambah',
                ],
            ]);
        }
        $respon = pengumuman::get();
        return redirect()->action([PengumumanController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepengumumanRequest $request, pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengumuman $pengumuman)
    {
        //
    }
}
