@extends('layouts.client')

@section('content')

<script type="text/javascript">
    function timeout() {

    }
</script>

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

                    <div class="card-header" backgroun-color="white">Quiz Matemático

                        <div id="timer" style="float:right">01:00:00</div>


                        <div class="card-body">
                            @if(session('status'))
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                            @endif

                            <form method="POST" action="{{ route('client.test.store') }}">
                                @csrf
                                @foreach($categories as $category)
                                <div class="card mb-3">
                                    <div class="card-header">{{ $category->name }}</div>

                                    <div class="card-body">
                                        @foreach($category->categoryQuestions as $question)
                                        <div class="card @if(!$loop->last)mb-3 @endif">
                                            <div class="card-header">{{ $question->question_text }}</div>

                                            <div class="card-body">
                                                <input type="hidden" name="questions[{{ $question->id }}]" value="">
                                                @foreach($question->questionOptions as $option)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="questions[{{ $question->id }}]" id="option-{{ $option->id }}" value="{{ $option->id }}" @if(old("questions.$question->id") == $option->id) checked @endif>
                                                    <label class="form-check-label" for="option-{{ $option->id }}">
                                                        @if(strpos($option->option_text, '$$') === 0)
                                                        {!! $option->option_text !!}
                                                        @else
                                                        {{ $option->option_text }}
                                                        @endif
                                                    </label>
                                                </div>
                                                @endforeach

                                                @if($errors->has("questions.$question->id"))
                                                <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                    <strong>{{ $errors->first("questions.$question->id") }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach

                                <div class="form-group row mb-0">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
    // Obtiene la etiqueta HTML donde se mostrará el tiempo restante
    var timerLabel = document.getElementById("timer");

    // Establece la duración del quiz en minutos
    var quizDuration = 60; // 1 hora

    // Guarda la hora actual en la sesión del usuario
    sessionStorage.setItem("startTime", new Date().getTime());

    // Función para actualizar el tiempo restante cada segundo
    setInterval(function() {
        // Obtiene la hora actual
        var now = new Date().getTime();

        // Calcula la diferencia entre la hora actual y la hora guardada en la sesión del usuario
        var elapsedTime = (now - sessionStorage.getItem("startTime")) / 1000; // en segundos
        var remainingTime = quizDuration * 60 - elapsedTime; // en segundos

        // Convierte el tiempo restante a minutos y segundos
        var minutes = Math.floor(remainingTime / 60);
        var seconds = Math.floor(remainingTime % 60);

        // Actualiza la etiqueta HTML con el tiempo restante
        timerLabel.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

        // Verifica si el tiempo límite ha sido alcanzado
        if (elapsedTime >= quizDuration * 60) {
            // Redirige al usuario a la página de resultados del quiz
            window.location.href = "/quiz/results";
        }
    }, 1000); // Actualiza cada segundo
</script>

@endsection