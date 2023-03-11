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

                    <div class="card-header" backgroun-color="white">Imagenes referentes a las preguntas de geometria
                        <form method="POST" action="{{ route('client.test.store') }}">

                            <div class="card mb-3">
                                <div class="card-header">Aca empieza geometria (el inciso de la pregunta corresponde al numero de pregunta del quiz)</div>

                                <div class="card-body">

                                    <div class="card ">
                                        <div class="card-header">1. Si las rectas horizontales de la gráfica son paralelas, entonces la medida de los ángulos es:</div>

                                        <div class="card-body">
                                            <img src="img/fig1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card ">
                                    <div class="card-header">2. En la siguiente figura tenemos un ángulo recto divido en dos ángulos, calcula el valor de los 2 ángulos x y 4x.</div>

                                    <div class="card-body">
                                        <img src="img/fig3.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header">7. De acuerdo a la figura, determinar el lado  (AC) ̅ del triángulo ∆ABC</div>

                                <div class="card-body">
                                    <img src="img/fig4.png" alt="">
                                </div>
                            </div>
                    </div>
                    <div class="card ">
                        <div class="card-header">8. Calcular X si AB=BC=BD</div>

                        <div class="card-body">
                            <img src="img/fig5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header">9. Determinar el perímetro del rectángulo ABED usando la información de la siguiente figura:</div>

                    <div class="card-body">
                        <img src="img/fig6.png" alt="">
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header">10.Si el arco AC=142°, determinar el valor del ángulo interior B</div>

                    <div class="card-body">
                        <img src="img/fig7.png" alt="">
                    </div>
                </div>
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