<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje_usuario = $_POST["mensaje"];
  
  // Aquí puedes agregar lógica para guardar en la BD o enviar correo
  $mensaje = "Gracias por contactarnos, $nombre. Te responderemos pronto.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - Desarrollo Social</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #001f3f, #004080);
      color: #fff;
      animation: fondo 20s linear infinite alternate;
      text-align: center;
    }

    @keyframes fondo {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }

    h1 {
      margin-top: 40px;
      font-size: 2.8em;
      color: #00ffff;
      text-shadow: 0 0 15px #00ffff;
      animation: flotar 3s ease-in-out infinite;
    }

    @keyframes flotar {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    form {
      background: rgba(0,0,0,0.3);
      border-radius: 20px;
      padding: 30px;
      width: 320px;
      margin: 30px auto;
      box-shadow: 0 0 20px #00ffff;
    }

    input, textarea {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 15px;
      font-size: 1em;
      text-align: center;
    }

    textarea {
      resize: none;
      height: 100px;
    }

    button {
      background: #00ccff;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      color: #000;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 0 10px #00ffff;
    }

    button:hover {
      background: #00e0ff;
      transform: scale(1.05);
    }

    .mensaje {
      margin-top: 20px;
      font-weight: bold;
      color: #0f0;
      text-shadow: 0 0 10px #0f0;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      color: #fff;
      text-decoration: none;
      padding: 6px 12px;
      background: rgba(255,255,255,0.1);
      border-radius: 10px;
    }

    a:hover {
      background: rgba(255,255,255,0.3);
    }
  </style>
</head>
<body>
  <h1>Contáctanos</h1>

  <form method="POST">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="correo" placeholder="Tu correo electrónico" required>
    <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
    <button type="submit">Enviar Mensaje</button>
  </form>

  <?php if (!empty($mensaje)) echo "<div class='mensaje'>$mensaje</div>"; ?>

  <a href="index.php">← Volver al Inicio</a>
</body>
</html>
