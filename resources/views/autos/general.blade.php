<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container text-center py">
    


                <table class="table table-dark center">
                    <thead>
                        <tr>
                            <td>
                                

                                @if ($vista == 'detail')
                                    <h1>Detalles del {{$auto['brand']. " ".$auto['model']}}</h1>
                                @endif
                                @if ($vista == 'create')
                                    <h1>Agregar nuevo auto</h1>
                                @endif

<!--<h1>{{ ($vista=='create') ? 'Agregar nuevo auto' : 'Detalles del '.$auto['brand']. " ".$auto['model'] }}</h1>-->

                            </td>
                        <tr>
                    <thead>
                </table>










                @if ($vista == 'detail')

                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div> <!-- end .flash-message -->

                @endif










                @if ($vista == 'detail')
                    <form method="GET" action="/laravel/carpro/public/actualizarauto/{{$auto['id']}}">
                @endif

                @if ($vista == 'create')
                    <form method="GET" action="/laravel/carpro/public/altadeauto">
                @endif


                

                <table class="table table-dark">
                    
                    <tbody>
                        

                        @if ($vista == 'create')
                            <tr>
                                <td>Marca</td>
                                <td><input name="brand" value="{{$auto['brand']}}"></td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td><input name="model" value="{{$auto['model']}}"></td>                        
                            </tr>
                        @endif

                            <tr>
                                <td>Color</td>              
                                <td><input name="color" {{ $vista == 'detail' ? "value=" . $auto['color'] : "" }}></td>
                            </tr>
                            <tr>
                            <td>Año</td>
                            <td><input name="year" {{ $vista == 'detail' ? "value=" . $auto['year'] : "" }}></td>                
                        </tr>

                        <tr>
                            <td>Kilometraje</td>
                            <td><input name="kilometers" {{ $vista == 'detail' ? "value=" . $auto['kilometers'] : "" }}></td>
                        </tr>

                        <tr>
                            <td>AC</td>
                            <td><input type="checkbox" name="air" value="1" {{ ($vista == 'detail' && $auto['air'] == 1) ? "checked" : "" }}></td>

                        </tr>

                        <tr>
                            <td>Airbag</td>
                            <td><input type="checkbox" name="airbag" value="1" {{ ($vista == 'detail' && $auto['airbag'] == 1) ? "checked" : "" }}></td>
                        </tr>

                        <tr>
                            <td>Dirección Asistida</td>
                            <td><input type="checkbox" name="steering" value="1" {{ ($vista == 'detail' && $auto['steering'] == 1) ? "checked" : "" }}></td>
                        </tr>

                        <tr>
                            <td>ABS</td>
                            <td><input type="checkbox" name="abs" value="1" {{ ($vista == 'detail' && $auto['abs'] == 1) ? "checked" : "" }}></td>
                        </tr>

                        <tr>
                            <td>GPS</td>
                            <td><input type="checkbox" name="gps" value="1" {{ ($vista == 'detail' && $auto['gps'] == 1) ? "checked" : "" }}></td>
                        </tr>
                        
                    </tbody>


                </table>

                <!-- Agregar lógica para que muestre botones de Volver y Guardar Cambios según se necesite-->

                

                <table class="table table-dark">
                    <tbody>
                        <tr>
                            <td><a href="/laravel/carpro/public/autos">Volver a la lista</a></td>
                        
                        
                        @if ($vista == 'create')
                        
                        
                            <td><p><input type="submit" value="Guardar Cambios"></p></td>
                        </tr>
                        @endif
                    <tbody>
                </table>

                </form>

                
                
                
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
