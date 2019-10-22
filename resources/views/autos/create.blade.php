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
                

                <!--<div class="links">
                    <a href="/laravel/facepro/public/autos/mostrarautos">Mostrar Autos</a>
                    <a href="https://laracasts.com">Salir al DOS</a>
                    
                </div>   -->

                


                

                <table class="table table-dark center">
                    <thead>
                        <tr>
                            <td><h1>Agregar nuevo auto</h1></td>
                        <tr>
                    <thead>
                </table>

                <form method="GET" action="/laravel/carpro/public/altadeauto">

                <table class="table table-dark">
                    
                    <tbody>
                        <tr>
                            <td>Marca</td>
                            <td><input name="brand"></td>                        
                        </tr>

                        <tr>
                            <td>Modelo</td>
                            <td><input name="model"></td>                        
                        </tr>

                        <tr>
                            <td>Color</td>
                            <td><input name="color"></td>                        
                        </tr>

                        <tr>
                            <td>Año</td>
                            <td><input name="year"></td>                         
                        </tr>

                        <tr>
                            <td>Kilometraje</td>
                            <td><input name="kilometers"></td>
                        </tr>

                        <tr>
                            <td>AC</td>
                            <td><input type="checkbox" name="air" value=1> </td>
                        </tr>

                        <tr>
                            <td>Airbag</td>
                            <td><input type="checkbox" name="airbag" value=1> </td>
                        </tr>

                        <tr>
                            <td>Dirección Asistida</td>
                            <td><input type="checkbox" name="steering" value=1> </td>
                        </tr>

                        <tr>
                            <td>ABS</td>
                            <td><input type="checkbox" name="abs" value=1> </td>
                        </tr>

                        <tr>
                            <td>GPS</td>
                            <td><input type="checkbox" name="gps" value=1> </td>
                        </tr>

                        <tr>
                            <td><input type="submit" value="Agregar"></td>
                        </tr>
                        
                    </tbody>


                </table>

                </form>

                
                
                
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
