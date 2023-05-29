<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;
use App\Models\Dosen;
use App\Http\Controllers\LoginController;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respon = Dosen::get();
        $count = Dosen::get()->count();
        if($count == 0){

            $data = collect([
                (object)[
                    'stat' => 0,
                    'msg' => 'Tidak Ada Data Dosen',
                ],
            ]);
            return view('dosen.index',compact('data','respon'));
            //dd(compact('respon','data'));
        }else{
            $data = collect([
                (object)[
                    'stat' => 1,
                    'msg' => 'Tidak Ada Data Dosen',
                ],
            ]);
            return view('dosen.index',compact('data','respon'));
            //dd(compact('respon','data'));
        }
    }

    public function indexData(){
        $data = Dosen::get();
        echo json_encode(array("result"=>$data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        LoginController::checkLogin();
        //return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDosenRequest $request)
    {
        $respon = [
            'nidn' => $request->nidn,
            'nama_dosen' => $request->nama,
            'jenis_k' => $request->jk,
            'in_prodi' => false,
        ];
        $result = Dosen::create($respon);
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
        $respon = Dosen::get();
        return redirect()->action([DosenController::class, 'index']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {

    }

    public function test(){
        $data = LoginController::actionLogin("67832","Pak Noval");
        echo $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDosenRequest $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
