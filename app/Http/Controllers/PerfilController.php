<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perfil;
use App\Http\Requests;

class PerfilController extends Controller
{
    public function index()
    {
		$user = DB::table('users')->where('id','1')->first();
       // $user = DB::table('users')->get();
        //pasa por url a la vista
        return view('perfil.perfil', ['user' => $user]);
    }
}



