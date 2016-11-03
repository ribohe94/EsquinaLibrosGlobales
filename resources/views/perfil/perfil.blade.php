@extends('layouts.master')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>

    <!--Page content goes here, fixed elements go above the all elements class-->
    <!--Page content goes here, fixed elements go above the all elements class-->
    <div class="header-clear-large"></div>

    <div class="container heading-style-5">
        <h4 class="heading-title">Perfil del Usuario</h4>
		<i class="class="fa fa-book" aria-hidden="true""></i>
        <div class="line bg-black"></div>
		<p class="heading-subtitle">
                      “No es hasta que estamos perdidos que comenzamos a comprendernos a nosotros mismos”
                      Henry David Thoreau
                    </p>
    </div>

    <!--Static Columns-->

    <div class="portfolio-filter">
        <div class="clear"></div>
        <div class="portfolio-filter-wrapper">
            <table>
                <tr>
                    <td>
                      <img src="{{$user->avatar_url}}" height="150" width="150" alt="{{$user->name}}"/>
                        <h1>
                           Nickname:{{$user->name}}
                        </h1>
                    </td>
					
                    <td>
                        <h1>Nombre: {{$user->first_name}} {{$user->last_name}}</h1>
                        <h1>Correo: {{$user->email}}</h1>
						<h1>Ubicacion: {{$user->country}}</h1>
                    </td>
                </tr>
            </table>

        </div>
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


    <!--Fly up share box and notifications go here -->
    <!--These are the only features that should be placed outside the all-elements class-->




@stop
