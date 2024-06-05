<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/codigo.js"></script>
    
    <!-- Incluir MathJax para renderizar fórmulas matemáticas -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.php">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcular la distancia donde la gravedad es 1 m/s²</h2>
        <p>Descripción:</p>
        <p>¿A qué distancia de la superficie de la Tierra la aceleración de la gravedad será igual a 1 m/s²?</p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <!-- Aquí se muestra la imagen del problema -->
          <img class="imgProblema" src="images/mundo.jpg" alt="Esquema de física">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        r = R_t * \sqrt{g / g_r}<br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        R<sub>t</sub> = 6.37 x 10<sup>3</sup> km<br>
        g = 9.81 m/s²<br>
        g<sub>r</sub> = 1 m/s²<br>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>La distancia desde la superficie de la Tierra donde la gravedad es igual a 1 m/s² se calcula como sigue:</p>
        <p>
          - Primero, necesitamos la constante de gravedad en la superficie de la Tierra, \( g = 9.81 \, \text{m/s}^2 \).<br>
          - Luego, definimos la constante de gravedad deseada, \( g_r = 1 \, \text{m/s}^2 \).<br>
          - Tomamos el radio de la Tierra, \( R_t = 6.37 \times 10^3 \times 1000 = 6.37 \times 10^6 \, \text{m} \).<br>
          - Para encontrar la distancia radial donde la gravedad es 1 m/s², usamos la fórmula:
            \[ r = R_t * \sqrt{g / g_r} \].<br>
          - Para calcular la distancia desde la superficie, restamos el radio de la Tierra del resultado anterior:
            \[ \text{distancia} = r - R_t \].
        </p>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"> <!-- Aquí se mostrará el resultado --> </div>
      </section>
    </section>
    <footer class="pie">
      Estrada Placido Eduardo 
    </footer>
  </section>
  <script>
    // Código JavaScript para calcular y mostrar el resultado automáticamente al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
      calcula_gravedad(); // Llama a la función para calcular y mostrar el resultado
    });

    // Función para calcular la gravedad
    function calcula_gravedad() {
        var Rt = 6.37e3 * 1e3; // Convertir km a m
        var g = 9.81; // Gravedad en la superficie de la Tierra
        var gr = 1; // Gravedad deseada
        var r = Rt * Math.sqrt(g / gr); // Calcular la distancia radial

        var distancia_superficie = r - Rt; // Distancia desde la superficie de la Tierra

        var resultado = document.getElementById("resultadoA");
        resultado.innerHTML = distancia_superficie.toFixed(2) + " metros";
    }
  </script>
</body>
</html>
