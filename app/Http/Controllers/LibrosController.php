<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
use App\Libro;
use App\Http\Requests;

class LibrosController extends Controller
{

  public function getIndex(){
    //Get libros from database instanciando DB de laravel
      $libros = DB::table('libros')->get();
      $categorias = DB::table('categorias')->get();
      //pasa por url a la vista
      return view('libro.index',array('libros'=>$libros,'categorias'=>$categorias));
    }

    public function getCompra($idLibro){
      $libro = DB::table('libros')->where('idLibro',$idLibro)->first();
      return view('libro.compra',['libro'=>$libro]);
    }
}
