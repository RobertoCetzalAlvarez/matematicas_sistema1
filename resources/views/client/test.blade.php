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

    //alert
    window.addEventListener("beforeunload", function (e) {
  var confirmationMessage = "¿Seguro que quieres salir de la página?";

  // Desactivar el botón de recarga
  var reloadButton = document.querySelector('button[type="submit"]');
  reloadButton.disabled = false;

  // Mostrar un mensaje de alerta
  alert("No puedes recargar la página mientras esta alerta esté activa.");

  // En algunos navegadores, es necesario devolver el mensaje de confirmación personalizado
  (e || window.event).returnValue = confirmationMessage;
  return confirmationMessage;
});

</script>

@endsection