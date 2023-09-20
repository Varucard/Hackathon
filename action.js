// Obtengo desde el lado del PHP el arreglo original con el que dibujo la vista
let respuestasOriginales = preguntasAleatorias;

/**
 * Obtiene el Formulario para buscar en el las preguntas y los inputs para verificar cual es la respuesta correcta y marcarla
 */
function marcarRespuestasCorrectas() {
  const form = document.getElementById('miFormulario');
  const preguntas = form.querySelectorAll('.pregunta');

  preguntas.forEach((pregunta, indice) => {
    const respuestas = pregunta.querySelectorAll('input[type="radio"]');
    
    // Obtén la última respuesta en el arreglo de respuestas originales
    const respuestaCorrecta = respuestasOriginales[indice].respuestas.slice(-1)[0];

    // Cuando el valor obtenido es igual que la respuesta correcta deja marcado el input
    respuestas.forEach((respuesta) => {
      respuesta.checked = respuesta.value === respuestaCorrecta;
    });
  });
}


/**
 * Obtiene todos los inputs creados de forma aleatoria y los deselecciona
 */
function reiniciarJuego() {
  // Deselecciona todas las respuestas
  const respuestas = document.querySelectorAll('input[type="radio"]:checked');
  respuestas.forEach((respuesta) => {
    respuesta.checked = false;
  });

  // Recarga la página para obtener nuevas preguntas aleatorias
  location.reload();
}

