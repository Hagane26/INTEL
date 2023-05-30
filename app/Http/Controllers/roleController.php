<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Controllers\utama;

class roleController extends Controller
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
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $respon = [
            'nama_role' => $request->nama_role,
            'level' => $request->level,
        ];
        $result = Role::create($respon);
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
        $respon = Role::get();
        return redirect()->action([utama::class, 'index']);
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
