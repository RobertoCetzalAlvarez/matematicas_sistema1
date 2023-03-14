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

                    <div class="card-header text-center" background-color="white">Imágenes referentes a las preguntas de la categoría: Geometría Plana y Trigonometría
                        <form method="POST" action="{{ route('client.test.store') }}">

                            <div class="card mb-3">
                                <div class="card-header">Para poder responder solo estas preguntas del quiz en esta categoría 
                                    se presentan las imágenes correspondientes</div>

                                    <div class="card-body">

                                        <div class="card">
                                            <div class="card-header">Si las rectas horizontales de la gráfica son paralelas, 
                                                entonces la medida de los ángulos es:</div>

                                                <div class="card-body">
                                                    <img src="img/fig1.png" width="250" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <div class="card ">
                                            <div class="card-header">En la siguiente figura tenemos un ángulo recto dividido en dos ángulos, calcula el valor de los 2 ángulos x y 4x</div>

                                                <div class="card-body">
                                                    <img src="img/fig2.png" width="250" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <div class="card ">
                                            <div class="card-header">De acuerdo con la figura, determinar el lado $$\overline{AC}$$ del triángulo ∆ABC</div>

                                                <div class="card-body">
                                                    <img src="img/fig3.png" width="300" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-header">Calcular X si AB=BC=BD</div>
                                                
                                                <div class="card-body">
                                                    <img src="img/fig4.png" width="300" height="250">
                                                </div>
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-header">Determinar el perímetro del rectángulo ABED usando la información de la siguiente figura:</div>

                                                <div class="card-body">
                                                    <img src="img/fig5.png" width="300" height="250">
                                                </div>
                                        </div>
                                        <br>             
                                        <div class="card ">
                                            <div class="card-header">Si el arco AC=142°, determinar el valor del ángulo interior B</div>

                                                <div class="card-body">
                                                    <img src="img/fig6.png" width="250" height="250">
                                                </div>
                                            </div>
                                        <br>                         
                                        <!-- <div class="card ">
                                                <div class="card-header">Calcular el ángulo x interior a la circunferencia, tal como se muestra en la figura:</div>

                                                    <div class="card-body">
                                                        <img src="img/fig7.png" width="250" height="250">
                                                    </div>
                                        </div> -->
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