@extends('layouts.master')

@section('content')
<!--Page content goes here, fixed elements go above the all elements class-->
<!--Page content goes here, fixed elements go above the all elements class-->

    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>


                <div class="header-clear-large"></div>

                <div class="container heading-style-5">
                    <h4 class="heading-title">Pago</h4>
                    <i class="class="fa fa-book" aria-hidden="true""></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                      "Para viajar lejos, no hay mejor nave que un libro."
                      Emily Dickinson
                    </p>
                </div>

                <!--Static Columns-->

                <div class="portfolio-filter">
				<table border="0">
				<tr>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

				 <td width="50%">
                    <div style="float:center;padding:0" width="50%">
                        <img src="/{{$libro->libImage}}" height="100%" width="100%" alt="{{$libro->libNombre}}"></img>
                    </div>

					<div style="float:center;" >
                        <h1>{{$libro->libNombre}}</h1>
                          <p1>Descripción: {{$libro->libDescripcion}}</p1>
                    </div>
                </td>

				<td width="70%">
				<label class="information"> Nombre: {{$user->first_name}} {{$user->last_name}} </label></br>
				<label class="information"> Email: {{$user->email}} </label></br>
				<label class="information"> Ubicacion: {{$user->country}} </label></br>
				<label class="information"> Libro: {{$libro->libNombre}}  </label></br>
				<label class="information"> ID: {{$libro->idLibro}} </label></br>
				<label class="information"> Monto: {{$libro->libPrecioBase}} </label></br>

				<a href="https://www.paypal.com/signin" class="btn green form_btn">Pagar</a>
				<a href="pago" class="btn red form_btn">Cancelar</a>

                </td>
				</tr>

				</form>
                </table>
                </div>


                <div class="decoration"></div>

                <div class="footer">
                    <p class="center-text">Copyright 2015. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="#" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="scale-hover back-to-top bg-green-dark social-ball"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="scale-hover show-share-bottom bg-magenta-dark social-ball"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>

            <!-- End of entire page content-->
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>
@stop
