<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
use App\Libro;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class LibrosController extends Controller
{

    public function getIndex()
    {
        //Get libros from database instanciando DB de laravel
        $libros = DB::table('libros')->get();
        $categorias = DB::table('categorias')->get();
        //pasa por url a la vista
        return view('libro.index', array('libros' => $libros, 'categorias' => $categorias));
    }

    public function getActivos()
    {
        //Get libros from database instanciando DB de laravel
        $libros = DB::table('libros')->get();
        $librosActive = DB::table('libros')->where('libActive', '1')->get();
        $categorias = DB::table('categorias')->get();
        //pasa por url a la vista
        return view('libro.activos', array('libros' => $libros, 'categorias' => $categorias, 'librosActive' => $librosActive));
    }

    public function getActivo($idLibro)
    {
        $libro = DB::table('libros')->where('idLibro', $idLibro)->first();
        //select * from users right join subasta on users.id = subasta.usuario;
        $users = DB::table('users')->rightJoin('oferta', 'oferta.usuario', '=', 'users.id')->select('users.name', 'users.email', 'oferta.comentario', 'oferta.oferta', 'oferta.ofertaLib')->get();
        $loggedusr = Auth::id();
        return view('libro.bookView', ['libro' => $libro], array('users' => $users, 'loggedusr' => $loggedusr));
    }

    public function getCompra($idLibro)
    {
        $libro = DB::table('libros')->where('idLibro', $idLibro)->first();
        $loggedusr = Auth::id();
        return view('libro.compra', ['libro' => $libro], ['loggedusr' => $loggedusr]);
    }
}
