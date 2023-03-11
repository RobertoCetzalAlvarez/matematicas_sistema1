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