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
  <!-- Fixed Alert Bar -->
  <div class="alert-bar-wrapper">
    <div class="alert-bar-gradient">
      <div class="alert-content-container">

        <!-- Left Text -->
        <div class="alert-text">
          <strong>¡LA CUENTA REGRESIVA HA COMENZADO!</strong>
          <p>No dejes pasar la oportunidad de vivir la Media Maratón Entre Montañas</p>
        </div>

        <!-- Countdown Center -->
        <div class="countdown-container">
          <div class="countdown">
            <div>
              <span id="days">00</span>
              <span class="label">DÍAS</span>
            </div>
            <div>
              <span id="hours">00</span>
              <span class="label">HORAS</span>
            </div>
            <div>
              <span id="minutes">00</span>
              <span class="label">MIN</span>
            </div>
            <div>
              <span id="seconds">00</span>
              <span class="label">SEG</span>
            </div>
          </div>
        </div>

        <!-- Right Button -->
        <a href="index.php#section-inscribete" class="alert-button">INSCRÍBETE AHORA</a>

      </div>
    </div>
  </div>

  <script>
    function updateCountdown() {
      const targetDate = new Date("2025-08-01T00:00:00");
      const now = new Date();
      const diff = targetDate - now;

      if (diff <= 0) return;

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
      const minutes = Math.floor((diff / (1000 * 60)) % 60);
      const seconds = Math.floor((diff / 1000) % 60);

      document.getElementById("days").textContent = days.toString().padStart(2, "0");
      document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
      document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
      document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
  </script>
</body>

</html>
