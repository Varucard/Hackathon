<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hackathon</title>  

  <!-- Estilo CSS entre etiquetas <head> -->
  <style>
    .pregunta {
      margin-bottom: 10px;
    }
    .respuesta {
      margin-left: 20px;
    }
  </style>

</head>
<body>

  <h1>Hackathon</h1>

  <h3>Por favor seleccione la opción que crea correcta de las siguientes preguntas</h3>

  <form action="action.php" method="post" id="miFormulario">
    <!-- Dentro del HTML utilizando las etiquetas de apertura y cierre de PHP puedo utilizar su codigo para dibujar elementos en el HTML -->
    <?php
      // Incluye el archivo preguntas_respuestas.php
      include 'action.php';

      // Recorre las preguntas y respuestas traidas del archivo PHP y crea elementos input de radio dinámicamente
      foreach ($random as $indice => $pregunta_respuesta) {
        $nombrePregunta = 'pregunta' . ($indice + 1);
        $pregunta = $pregunta_respuesta["pregunta"];
        $respuestas = $pregunta_respuesta["respuestas"];

        echo '<div class="pregunta">';
        echo '<label for="' . $nombrePregunta . '">' . $pregunta . '</label>';

        // Mezcla las respuestas en PHP para que al Usuarios las respuestas se le muestra aleatoriamente
        shuffle($respuestas);
        
        // Crea elementos input de radio para las respuestas
        foreach ($respuestas as $indiceRespuesta => $respuesta) {
          echo '<div class="respuesta">';
          echo '<input type="radio" name="' . $nombrePregunta . '" value="' . $respuesta . '"> ' . $respuesta;
          echo '</div>';
        }

        echo '</div>';
      }
    ?>
    <!-- Utilizando la propiedad onclick puedo llamar a funciones en JavaScript -->
    <input style="margin-top: 15px;" type="button" value="Validar" onclick="marcarRespuestasCorrectas()">
    <input style="margin-top: 15px;" type="button" value="Reiniciar Juego" onclick="reiniciarJuego()">
  </form>

  <!-- Invoco al igual que con el include al archivo JS para poder utilizarlo -->
  <script src="action.js"></script>
</body>
</html>