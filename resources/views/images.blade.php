@extends('layouts.client')

@section('content')

<body class="regular-progression">
    <style>
        .regular-progression {
  background: linear-gradient(to top, yellow, purple, red, yellow);
}
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">

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