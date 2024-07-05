<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Projek;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //buat view ke halaman user
    public function view(){
        $data = Projek::all();

        $sertifikat = Certificate::all();

        return view('welcome', compact('data', 'sertifikat'));
    }
}
