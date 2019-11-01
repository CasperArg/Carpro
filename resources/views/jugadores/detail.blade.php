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
                            @if ($jugador['id'] != null)
                            <td><h1>Detalles de {{$jugador['firstname']. " ".$jugador['lastname']}}</h1></td>
                            @else
                            <td><h1>Agregar jugador nuevo</h1></td>
                            @endif
                        <tr>
                    <thead>
                </table>





                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div> <!-- end .flash-message -->
                @if ($jugador['id']==null)
                <form method="POST" action="/laravel/carpro/public/jugadores">
                @else
                <form method="POST" action="/laravel/carpro/public/jugadores/{{$jugador['id']}}">
                    @method('PUT')
                @endif
                @csrf

                <table class="table table-dark">
                    
                    <tbody>
                    
                        <tr>
                            <td>Nombre</td>
                            <td><input name="firstname" value="{{$jugador['firstname']}}"></td>                        
                        </tr>

                        <tr>
                            <td>Apellido</td>
                            <td><input name="lastname" value="{{$jugador['lastname']}}"></td>                        
                        </tr>
                     



                        <tr>
                            <td>Edad</td>
                            <td><input name="age" value="{{$jugador['age']}}"></td>                        
                        </tr>
                        <tr>
                            <td>Posicion</td>
                            <td><input name="position" value="{{$jugador['position']}}"></td>                         
                        </tr>

                        <tr>
                            <td>Pierna hábil</td>
                            <td><input name="leg" value="{{$jugador['leg']}}"></td>
                        </tr>
                    </tbody>
                </table>

                       
                     
                    </tbody>


                </table>

                <table class="table table-dark center">
                    <thead>
                        <tr>
                            <p><input type="submit" value="Guardar Cambios"></p></td>
                        </tr>
                        <tr>
                            <a href="/laravel/carpro/public/jugadores">Volver a la lista</a>
                        </tr>
                    <thead>
                </table>

                </form>

                
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
