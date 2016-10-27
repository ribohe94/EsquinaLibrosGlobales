@extends('layouts.master')

@section('content')
<!--Page content goes here, fixed elements go above the all elements class-->
<!--Page content goes here, fixed elements go above the all elements class-->
                <div class="header-clear-large"></div>

                <div class="container heading-style-5">
                    <h4 class="heading-title">Esquina de Los Libros</h4>
                    <i class="class="fa fa-book" aria-hidden="true""></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                      "Un libro abierto es un cerebro que habla; cerrado un amigo que espera;<br>
                      olvidado, un alma que perdona; destruido, un corazón que llora."
                      proverbio hindú
                    </p>
                </div>

                <!--Static Columns-->

                <div class="portfolio-filter">
                <div style="float:left">
                  <img src="{{$libro->libImage}}" height="150" width="150" alt="{{$libro->libNombre}}" align="middle"></img>
                </div>
                  <div style="float:right;background:green;margin-left: 10px;" >
                    <h1>{{$libro->libNombre}}</h1>
                    <p1>Descripción: {{$libro->libDescripcion}}</p1>
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
@stop
