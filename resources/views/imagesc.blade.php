@extends('layouts.client')

@section('content')

<body class="background-radial-gradient">
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: 100px;
            left: 50px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: 50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-3 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            height: 250px;
            width: 250px;
            top: 850px;
            left: 80px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-4 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -950px;
            right: 50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-5 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            height: 250px;
            width: 250px;
            top: 1650px;
            left: 80px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-6 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -1650px;
            right: 50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        img {
            width: 160px;
            height: 160px;
        }
        .imagen10{
            width: 860px;
            height: 130px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                <div id="radius-shape-3" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-4" class="position-absolute shadow-5-strong"></div>
                <div id="radius-shape-5" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-6" class="position-absolute shadow-5-strong"></div>

                <div class="card" sty>

                    <div class="card-header" backgroun-color="white">Imagenes referentes a las preguntas de Calculo diferencial
                        <form method="POST" action="{{ route('client.test.store') }}">

                            <div class="card mb-3">
                                <div class="card-header">Aca empieza Calculo (el inciso de la pregunta corresponde al numero de pregunta del quiz)</div>

                                <div class="card-body">

                                    <div class="card ">
                                        <div class="card-header">2.	¿Cuál es el rango de la función representada en el siguiente diagrama?</div>

                                        <div class="card-body">
                                            <img src="img/fig8.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card ">
                                    <div class="card-header">3.	¿Cuál es el codominio de la función representada en el siguiente diagrama?</div>

                                    <div class="card-body">
                                        <img src="img/fig9.png" alt="">
                                    </div>
                                </div>
                                <div class="card ">
                                    <div class="card-header">7. En la siguiente tabla encuentre el  $$lim┬(x→2)⁡〖f(x)〗$$</div>

                                    <div class="card-body">
                                        <img class="imagen10" src="img/fig10.png" alt="">
                                    </div>
                                </div>
                            </div>
                         </form>         
                    </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
@endsection