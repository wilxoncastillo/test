<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
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
        </style>
    </head>
    <body>
    <h3>Test de Prueba</h3>
    <h5>Parte A Compras</h5>
    @foreach($compras as $compra)
        <ul>
            <li>
                <p>Id:{{ $compra->id }}  Cantidad: {{ $compra->cantidad}}  Producto: {{ $compra->producto }}</p>
                <p><strong>Detalle de la Compra</strong></p>
                <ul>
                    <li>
                        @foreach($detalles as $detalle)    
                            @if($detalle->compra_id == $compra->id )
                                <p>Id: {{ $detalle->id }} Nombre: {{ $detalle->nombre }} Precio: {{ $detalle->precio }}</p>
                            @endif
                        @endforeach                    
                    </li>
                </ul>    
            </li>
                    
        </ul>
    @endforeach

    <h5>Parte B Sumatoria</h5>
     @foreach($data as $items)
        <ul>
            <li>
                {{ $items->categoria_id }}
            </li>    
        </ul>
    @endforeach

    </body>
</html>
