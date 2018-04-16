@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Ajedrez
            </div>
            <!--<div class="links">
                <a class="hvr-rectangle-out hvr-wobble-bottom" href="{{url('/servicios/xat')}}">Xat</a>
                <a class="hvr-rectangle-out hvr-wobble-bottom" href="{{url('/servicios/denuncias')}}">Denuncias</a>
                <a class="hvr-rectangle-out hvr-wobble-bottom" href="{{url('/servicios/debates')}}">Debates</a>
                <a class="hvr-rectangle-out hvr-wobble-bottom" href="{{url('/servicios/noticias')}}">Noticias</a>
            </div>-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-control panel panel-default offset-4 col-md-4 text-center">
                    <div class="panel-heading">Bienvenido {{ Auth::user()->name }}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        Has iniciado sesión!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td>&#9820;</td>
                        <td>&#9822;</td>
                        <td>&#9821;</td>
                        <td>&#9819;</td>
                        <td>&#9818;</td>
                        <td>&#9821;</td>
                        <td>&#9822;</td>
                        <td>&#9820;</td>
                    </tr>
                    <tr>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                        <td>&#9823;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                        <td>&#9817;</td>
                    </tr>
                    <tr>
                        <td>&#9814;</td>
                        <td>&#9816;</td>
                        <td>&#9815;</td>
                        <td>&#9813;</td>
                        <td>&#9812;</td>
                        <td>&#9815;</td>
                        <td>&#9816;</td>
                        <td>&#9814;</td>
                    </tr>
                </table>
            </div>
        </div>
        <style>
            table{
                width:500px;
                height: 500px;
                text-align: center;
                font-size: 30px;
                margin: 0 auto;
            }
            tr{
                border: 1px solid red;
            }
            td{
                border: 1px solid red;
            }

            tr:nth-child(1) > td:nth-child(even){
                background-color: grey;
            }

            tr:nth-child(1) > td:nth-child(odd){
                background-color: white;
            }

            tr:nth-child(2) > td:nth-child(odd){
                background-color: grey;
            }

            tr:nth-child(2) > td:nth-child(even){
                background-color: white;
            }

            tr:nth-child(3) > td:nth-child(even){
                background-color: grey;
            }

            tr:nth-child(3) > td:nth-child(odd){
                background-color: white;
            }

            tr:nth-child(4) > td:nth-child(odd){
                background-color: grey;
            }

            tr:nth-child(4) > td:nth-child(even){
                background-color: white;
            }

            tr:nth-child(5) > td:nth-child(even){
                background-color: grey;
            }

            tr:nth-child(5) > td:nth-child(odd){
                background-color: white;
            }

            tr:nth-child(6) > td:nth-child(odd){
                background-color: grey;
            }

            tr:nth-child(6) > td:nth-child(even){
                background-color: white;
            }

            tr:nth-child(7) > td:nth-child(even){
                background-color: grey;
            }

            tr:nth-child(7) > td:nth-child(odd){
                background-color: white;
            }

            tr:nth-child(8) > td:nth-child(odd){
                background-color: grey;
            }

            tr:nth-child(8) > td:nth-child(even){
                background-color: white;
            }

        </style>
    </div>

@endsection
