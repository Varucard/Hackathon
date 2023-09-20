<?php

  // Matriz de arreglo que contiene la pregunta junto a sus respuestas
  $preguntas_respuestas = [
    [
      'pregunta' => '¿Cual es el multiplo de 2?',
      'respuestas' => ['1', '25', '2']
    ],
    [
      'pregunta' => '¿Cual es la Raiz cuadrada de 8?',
      'respuestas' => ['1.625', '2', '2.8284']
    ],
    [
      'pregunta' => '¿Que lenguaje de programación es considerado de bajo nivel?',
      'respuestas' => ['Java', 'PHP', 'C']
    ],
    [
      'pregunta' => '¿Cual de las siguientes opciones un Lenguaje de Tipado?',
      'respuestas' => ['COBOL', 'JavaScript', 'Mark Down']
    ],
    [
      'pregunta' => '¿Que lenguaje es el preferido para trabajar con numeros?',
      'respuestas' => ['Go', 'C++', 'COBOL']
    ],
    [
      'pregunta' => '¿Que número es par?',
      'respuestas' => ['5', '9', '0']
    ],
    [
      'pregunta' => '¿En que sistema Linux esta basado Ubuntu?',
      'respuestas' => ['Kali Linux', 'Arch Linux', 'Debian']
    ],
    [
      'pregunta' => 'El comando "ls" ¿Que función realiza?',
      'respuestas' => ['Reinicia el S.O', 'Elimina archivos', 'Lista el contenido dentro de una carpeta']
    ]
  ];

  // Obtengo indices de forma aleatoria para buscar en la matriz y traerme un dato de forma aleatoria
  $indiceRandom1 = rand(0, count($preguntas_respuestas) - 1);
  $indiceRandom2 = rand(0, count($preguntas_respuestas) - 1);

  // Creo un arreglo en donde guardo los datos que me traigo de la Matriz
  $random = [
    $preguntas_respuestas[$indiceRandom1],
    $preguntas_respuestas[$indiceRandom2]
  ];

  // Este proceso se realiza para poder llevar un dato de PHP a JS
  // Convierte el arreglo en JSON
  $json_data = json_encode($random);

  // Imprime la variable JavaScript para poder buscarla desde el archivo de JS
  echo '<script>';
  echo 'var preguntasAleatorias = ' . $json_data . ';';
  echo '</script>';

?>
