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

                    <div class="card-header text-center" background-color="white">Imágenes referentes a las preguntas de la categoría: Cálculo Diferencial
                        <form method="POST" action="{{ route('client.test.store') }}">

                            <div class="card mb-3">
                                <div class="card-header">Para poder responder solo estas preguntas del quiz en esta categoría 
                                    se presentan las imágenes correspondientes</div>

                                    <div class="card-body">

                                        <div class="card">
                                                <div class="card-header">¿Cuál es el rango de la función representada en el siguiente diagrama?</div>

                                                <div class="card-body">
                                                    <img src="img/fig8.png" width="250" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <div class="card ">
                                                <div class="card-header">¿Cuál es el codominio de la función representada en el siguiente diagrama?</div>

                                                <div class="card-body">
                                                    <img src="img/fig9.png" width="250" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <!-- <div class="card ">
                                                <div class="card-header">En la siguiente tabla encuentre el $$\lim_{x\to 2}f(x)$$</div>

                                                <div class="card-body">
                                                    <img src="img/fig10.png" width="800" height="100">
                                                </div>
                                        </div>
                                        <br> -->
                </div>                             
        </div>
    </form>
</div> 
</div>      
</div>                                     
</div>
</div>
</body>
@endsection