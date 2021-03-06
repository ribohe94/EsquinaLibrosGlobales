@extends('layouts.master')

@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>

    <!--Page content goes here, fixed elements go above the all elements class-->
    <!--Page content goes here, fixed elements go above the all elements class-->
    <div class="header-clear-large"></div>

    <div class="container heading-style-5">
        <h4 class="heading-title">{{$libro->libNombre}}</h4>
        <i class="fa fa-camera-retro heading-icon"></i>
        <div class="line bg-black"></div>
    </div>

    <!--Static Columns-->

    <div class="portfolio-filter">
        <div class="clear"></div>
        <div class="portfolio-filter-wrapper">
            <table>
                <tr>
                    <td>
                        <img src="/{{$libro->libImage}}" height="150" width="150" alt="{{$libro->libNombre}}"/>
                        <h1>
                            {{$libro->libNombre}}
                        </h1>
                    </td>
                    <td>
                        <h1>
                            {{$libro->libNombre}}
                        </h1>
                        <p>
                            {{$libro->libAutor}}
                        </p>
                        <p>
                            {{$libro->libDescripcion}}
                        </p>
                        <p>
                            c {{$libro->libPrecioBase}}
                        </p>
                    </td>
                </tr>
            </table>
            <table>
                @foreach($users as $key=>$users)
                    <tr>
                        <td>
                            <p>{{$users->name}}</p>
                            <p>{{$users->email}}</p>
                        </td>
                        <td>
                            <i>
                                {{$users->comentario}}
                            </i>
                        </td>
                        <td>
                            <p>c {{$users->oferta}}</p>
                        </td>
                        <td>
						<a href="/pago/{{$libro->idLibro}}" class="btn green form_btn">Aceptar oferta</a>             
                        <a href="#" class="btn red form_btn">Rechazar oferta</a>
                        </td>
                    </tr>
                @endforeach
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
