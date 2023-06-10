<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Dosen;
use App\Models\mahasiswa;
use App\Http\Controllers\utama;

class LoginController extends Controller
{

    public function login(){
        return view('login.index');
    }

    public static function checkLogin(){
        $d_stat = session('stat');

        if($d_stat == 1){
            return 1;
        }else{
            return 0;
        }
    }

    public static function actionLogin(Request $req){
        $cek_dosen = Dosen::where('nidn',$req->username)->first();
        if($cek_dosen){
            $data = [
                "stat" => 1,
                "kode" => $cek_dosen->nidn,
                "user" => $cek_dosen->nama_dosen,
                "role" => $cek_dosen->id_role,
                "msg" => "loggin",
            ];
            session($data);
        }else{
            $cek_mahasiswa = mahasiswa::where('npm',$req->username)->first();
            if($cek_mahasiswa){
                $data = [
                    "stat" => 1,
                    "kode" => $cek_mahasiswa->npm,
                    "user" => $cek_mahasiswa->nama_mahasiswa,
                    "role" => $cek_mahasiswa->id_role,
                    "msg" => "loggin",
                ];
                session($data);
            }
        }
    }

    public function actionLogout(){
        session::flush();
    }
}
