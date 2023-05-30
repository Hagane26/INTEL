<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Dosen;
use App\Http\Controllers\utama;

class LoginController extends Controller
{

    public function login(){
        return $this->actionLogout();
    }

    public static function checkLogin(){
        $d_stat = session('stat');

        if($d_stat == 1){
            return 1;
        }else{
            return 0;
        }
    }

    public static function actionLogin($username,$password){
        $cek_dosen = Dosen::where('nidn',$username)->first();
        if($cek_dosen){
            $data = [
                "stat" => 1,
                "kode" => $cek_dosen->nidn,
                "user" => $cek_dosen->nama_dosen,
                "role" => "dosen",
                "msg" => "loggin",
            ];
            session($data);
        }
    }

    public function actionLogout(){
        session::flush();
    }
}
