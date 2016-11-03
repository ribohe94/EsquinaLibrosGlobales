<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Perfil;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index()
    {
        $loggedusr = Auth::id();
		    $user = DB::table('users')->where('id',$loggedusr)->first();
        // $user = DB::table('users')->get();
        //pasa por url a la vista
        return view('perfil.perfil', ['user' => $user]);
    }
}
