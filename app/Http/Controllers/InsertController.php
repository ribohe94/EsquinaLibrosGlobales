<?php

namespace App\Http\Controllers;

use App\oferta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

use DB;
use View;

class InsertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new oferta();
        $user->ofertaLib = Input::get("ofertaLib");
        $user->oferta = Input::get("oferta");
        $user->usuario = Input::get("usuario");
        $user->comentario = Input::get("comentario");
        $user->libro = Input::get("libro");
        $user->save();

        $idLibro = Input::get("libro");
        $libro = DB::table('libros')->where('idLibro', $idLibro)->first();
        $user = DB::table('users')->where('id','1')->first();

        return View::make('libro/pago',  ['libro' => $libro], ['user' => $user], ['idLibro' => $idLibro]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
