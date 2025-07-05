<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Media Maratón Entre Montañas</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="./styles/header.css" />
  <link rel="stylesheet" href="./styles/Main.css" />
  <link rel="stylesheet" href="./styles/contador.css" />
</head>

<body>
  <!-- Barra de alerta fija -->
  <div class="barra-alerta-fondo">
    <div class="barra-alerta-gradiente">
      <div class="shared-container contenido-alerta">
        
        <!-- Texto a la izquierda -->
        <div class="texto-alerta">
          <strong>¡LA CUENTA REGRESIVA HA COMENZADO!</strong>
          <p>No dejes pasar la oportunidad de vivir la Media Maratón Entre Montañas</p>
        </div>

        <!-- Contador al centro -->
        <div class="contenedor-contador">
          <p class="texto-contador">FALTAN SOLO</p>
          <div class="contador-alerta">
            <div>
              <span id="dias">00</span>
              <span class="etiqueta">DÍAS</span>
            </div>
            <div>
              <span id="horas">00</span>
              <span class="etiqueta">HORAS</span>
            </div>
            <div>
              <span id="minutos">00</span>
              <span class="etiqueta">MIN</span>
            </div>
            <div>
              <span id="segundos">00</span>
              <span class="etiqueta">SEG</span>
            </div>
          </div>
        </div>

        <!-- Botón -->
        <a href="index.php#section-inscribete" class="btn-alerta">INSCRÍBETE AHORA</a>

      </div>
    </div>
  </div>

  <script>
    function actualizarContador() {
      const fechaObjetivo = new Date("2025-08-01T00:00:00");
      const ahora = new Date();
      const diferencia = fechaObjetivo - ahora;

      if (diferencia <= 0) return;

      const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
      const horas = Math.floor((diferencia / (1000 * 60 * 60)) % 24);
      const minutos = Math.floor((diferencia / (1000 * 60)) % 60);
      const segundos = Math.floor((diferencia / 1000) % 60);

      document.getElementById("dias").textContent = dias.toString().padStart(2, "0");
      document.getElementById("horas").textContent = horas.toString().padStart(2, "0");
      document.getElementById("minutos").textContent = minutos.toString().padStart(2, "0");
      document.getElementById("segundos").textContent = segundos.toString().padStart(2, "0");
    }

    setInterval(actualizarContador, 1000);
    actualizarContador();
  </script>
</body>

</html>
