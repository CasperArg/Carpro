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

            

                <!--<div class="links">
                    <a href="/laravel/facepro/public/autos/mostrarautos">Mostrar Autos</a>
                    <a href="https://laracasts.com">Salir al DOS</a>
                    
                </div>   -->

                


                <div>

                <div class="container text-center py">
                
                
                
            



                
                <table class="table table-dark center">
                    <thead>
                        <tr>
                            <td><input type="text" id="busqueda" placeholder="Realize una búsqueda"></td>
                            <td>Buscar por:
                            
                                <select name="que" id="que">
                                    <option value="type">Tipo de vivienda</option>
                                    <option value="rooms">Nº de ambientes</option>
                                </select>
                            <td>

                            <input type="button" value="Buscar" id="buscar">
                            
                        </tr>

                        <tr>
                            <td>
                            <a href="/laravel/carpro/public/crearcasa">Agregar nueva casa</a>
                            </td>

                            
                            
                            
                        </tr>
                    <thead>
                </table>

                



                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div> <!-- end .flash-message -->
                
                

                

                <table class="table table-success thead-success center">
                    <thead>
                        <tr>
                            <td><h1>Viviendas disponibles</h1></td>
                        <tr>
                    <thead>
                </table>

                
                
                
                
                
                
                
                
                
                
                
                
                
                <table table class="table table-success thead-success center">
                    <tr>
                        <th>Tipo</th>
                        <th>Dirección</th>



                    </tr>

                
                    @foreach ($casas as $key => $casa)
                    
                    <tr>
                        <td>{{$casa['type']}}</td>
                        <td>{{$casa['address']}}</td>
                        <td><a href="/laravel/carpro/public/casas/detail/{{$casa['id']}}">Mostrar detalle</a></td>
                        
                        <td><button data-house_id="{{$casa['id']}}" data-house_type="{{$casa['type']}}" class="btn delete-button" value="Eliminar"></td>
                        
                       
                    </tr>

                    @endforeach

                </table>








               <div class="col-3 mx-auto">

                {{ $casas->links() }}

                </div>








                @if ($botonvolver) 

                <table class="table table-dark">
                    <tbody>
                        <tr>
                            <td><a href="/laravel/carpro/public/autos">Volver a lista completa</a></td>
                        
                        </tr>
                    
                    <tbody>
                </table>
                @endif
                <table class="table table-dark">
                    <tbody>
                        <tr>
                            <td><a href="/laravel/carpro/public">Home</a></td>
                        </tr>
                        
                    <tbody>
                </table>

                

                </div>
                </div>

                
                
                
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>







<script>
$("#buscar").click(function () {
    var filtro = document.getElementById("busqueda").value;
    var que = document.getElementById("que").value;
    window.location.href = '/laravel/carpro/public/casas/'+ filtro + '/' + que;
});




// El Jquery de abajo llama al botón con la clase delete-button. La función se ejecutará al hacer click en la etiqueta HTML.

// $(this).data('car_id') >>>  Trae el valor car_id asignado a la etiqueta HTML por medio del atributo "data".

// $(this).parent().parent().children('td:first').text()  >>> Con esto se puede "navegar" entre las etiquetas HTML hasta pararse en una específica y traer un valor sin necesidad de usar el atributo "data".

// if(confirm("¿Estas seguro... >>> Confirm muestra un cartel para elegir "Aceptar" o "Cancelar". La condición del if se cumple si se pone Aceptar.

// window.location.href = '/laravel/carpro... >>> Redirecciona a ese enlace.






$(".delete-button").click(function(){

    var id = $(this).data('house_id');
    var type = $(this).parent().parent().children('td:first').text();
    

    var id = $(this).data('house_id');
    var type = $(this).data('house_type');
    

    if(confirm("¿Estas seguro que desea eliminar el registro del " + type + "?")){
        window.location.href = '/laravel/carpro/public/casas/delete/'+id;
    }
    else{
        return false;
    }
});    
</script>

</html>
