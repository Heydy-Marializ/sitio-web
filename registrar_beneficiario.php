<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "desarrollo_social");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];
    $programa = $_POST["programa"];
    
    $stmt = $conn->prepare("INSERT INTO beneficiarios (nombre, dni, programa) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $dni, $programa);
    if ($stmt->execute()) {
        $mensaje = "✔ Beneficiario registrado exitosamente.";
    } else {
        $mensaje = "❌ Error al registrar.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Beneficiario</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #001133, #003366);
      color: #fff;
      animation: fondo 15s infinite alternate;
      text-align: center;
    }
    @keyframes fondo {
      0% { background-position: 0% 50%; }
      100% { background-position: 100% 50%; }
    }
    h1 {
      font-size: 2.8em;
      text-shadow: 0 0 20px #0ff, 0 0 30px #0ff;
      margin-top: 40px;
      animation: flotar 3s ease-in-out infinite;
    }
    @keyframes flotar {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    form {
      background-color: rgba(0,0,0,0.3);
      padding: 30px;
      border-radius: 20px;
      width: 300px;
      margin: 30px auto;
      box-shadow: 0 0 20px #0ff;
    }
    input, select {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 15px;
      text-align: center;
      font-size: 1em;
    }
    button {
      background-color: #00ccff;
      border: none;
      padding: 10px 20px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      color: #000;
      box-shadow: 0 0 10px #0ff;
      transition: 0.3s ease;
    }
    button:hover {
      background-color: #00eeff;
      transform: scale(1.05);
    }
    .mensaje {
      margin-top: 20px;
      font-weight: bold;
      color: #0f0;
      text-shadow: 0 0 10px #0f0;
      animation: brillo 1.5s infinite alternate;
    }
    @keyframes brillo {
      from { opacity: 0.7; }
      to { opacity: 1; }
    }
    a {
      display: inline-block;
      margin-top: 20px;
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      background: rgba(255,255,255,0.1);
      border-radius: 10px;
      transition: 0.3s;
    }
    a:hover {
      background: rgba(255,255,255,0.3);
      transform: scale(1.1);
    }
    option {
      color: #000;
    }
  </style>
</head>
<body>
  <h1>Registrar Beneficiario</h1>

  <form method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo" required>
    <input type="text" name="dni" placeholder="DNI" required>
    <select name="programa" required>
      <option value="">Selecciona un programa</option>
      <?php
      $res = $conn->query("SELECT nombre FROM programas");
      while($row = $res->fetch_assoc()){
        echo "<option value='" . htmlspecialchars($row['nombre']) . "'>" . htmlspecialchars($row['nombre']) . "</option>";
      }
      ?>
    </select>
    <button type="submit">Registrar</button>
  </form>

  <?php if (!empty($mensaje)) echo "<div class='mensaje'>$mensaje</div>"; ?>

  <a href="index.php">← Volver al Inicio</a>
</body>
</html>
