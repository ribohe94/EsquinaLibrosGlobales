@extends('layouts.master')

@section('content')
    <!--Page content goes here, fixed elements go above the all elements class-->
    <!--Page content goes here, fixed elements go above the all elements class-->
    <div class="header-clear-large"></div>

    <div class="container heading-style-5">
        <h4 class="heading-title">Libros Activos</h4>
        <i class="fa fa-camera-retro heading-icon"></i>
        <div class="line bg-black"></div>
    </div>

    <!--Static Columns-->

    <div class="portfolio-filter">
        <div class="clear"></div>
        <div class="portfolio-filter-wrapper">
            <table>
                @foreach($librosActive as $key=>$librosActive)
                    <tr>
                        <td>
                            <a class="show-gallery-1" href="bookView/{{$librosActive->idLibro}}">
                                <img src="{{$librosActive->libImage}}" height="150" width="150"
                                     alt="{{$librosActive->libNombre}}">
                            </a>
                            <a style="margin-left: 25px;" href="bookView/{{$librosActive->idLibro}}">
                                <img src="images/buttons/ir.png" height="30" width="30"></a>
                        </td>
                        <td>
                            <h1>
                                {{$librosActive->libNombre}}
                            </h1>
                            <p>
                                {{$librosActive->libDescripcion}}
                            </p>
                            <p>
                                {{$librosActive->libAutor}}
                            </p>
                            <p>
                                c {{$librosActive->libPrecioBase}}
                            </p>
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
