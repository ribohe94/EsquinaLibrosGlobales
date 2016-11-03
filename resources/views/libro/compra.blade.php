@extends('layouts.master')

@section('content')
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <script src="/js/form.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/form.css">
        <link rel="stylesheet" type="text/css" href="/css/compra.css">
    </head>



    <div class="container heading-style-5">
        <h4 class="heading-title">Esquina de Los Libros</h4>
        <i class="fa fa-book" aria-hidden="true"></i>
        <div class="line bg-black"></div>
        <p class="heading-subtitle">
            "Un libro abierto es un cerebro que habla; cerrado un amigo que espera;
            olvidado, un alma que perdona; destruido, un corazón que llora."
            proverbio hindú
        </p>
    </div>

    <!--Static Columns-->

    <div class="portfolio-filter">
        <table border="0">
            <td width="50%">
                <div style="float:center;padding:0" width="50%">
                    <img src="/{{$libro->libImage}}" class="bookIcon" height="100%" width="100%"
                         alt="{{$libro->libNombre}}"/>
                </div>
            </td>
            <td style="padding: 20px;">
                <div style="float: center;">
                    <h1>{{$libro->libNombre}}</h1>
                    <p1 style="text-align: justify; text-justify: distribute;">{{$libro->libDescripcion}}</p1>
                </div>
            </td>
        </table>
    </div>

    <div class="offer" onload="adjust_textarea(h)">
        <form action="store" method="post" class="form-style-7">
            <ul>
                <li>
                    <label class="fieldbox" for="bio">Comentario</label>
                    <textarea id="comentario"  name="comentario" onkeyup="adjust_textarea(this)"></textarea>
                    <span>Escribe un comentario para el vendedor</span>
                </li>
                <table>
                    <tr>
                        <td>
                            <label id="pagoCompra" type="radio" name="payment" value="currency"> Pago</label>
                        </td>
                        <td>
                            <label id="interCompra" type="radio" name="payment" value="exchange">
                            Intercambio</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <li>
                                <input id="oferta" name="oferta" type="text" placeholder="Cuanto ofreces?" name="bio"
                                          onkeyup="adjust_textarea(this)">
                                <span>Escribe cuanto ofreces</span>
                            </li>
                        </td>
                        <td>
                            <li>
                                <input id="ofertaLib" name="ofertaLib" type="text" class="typehead form-control" onload="typeahead()">
                                <span>Escribe el libro que vas a intercambiar</span>
                            </li>
                        </td>
                    </tr>
                </table>
                <li>
                    <input type="hidden" id="usuario" name="usuario" value="{{$loggedusr}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="submit" id="submit" value="Enviar Oferta">
                </li>
            </ul>
        </form>
    </div>

    <script rel="script" type="text/javascript">
        var path = "{{route('autocomplete')}}";
        $('input.typehead').typeahead({
            source: function (query, process) {
                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        });

    </script>
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
