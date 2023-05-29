<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;
use App\Models\Dosen;

class InProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $req = Dosen::where('id',$id)->first();
        $stat =  $req->in_prodi;
        if($stat == 0){
            $respon = Dosen::where('id',$id)->update(array('in_prodi'=>1));
        }else{
            $respon = Dosen::where('id',$id)->update(array('in_prodi'=>0));
        }
        if($respon){
            $data = collect(
                (object)[
                    'stat' => 1,
                    'msg' => "success update",
                ],
            );
        }else{
            $data = collect(
                (object)[
                    'stat' => 0,
                    'msg' => "failed update",
                ],
            );
        }
        echo json_encode($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
