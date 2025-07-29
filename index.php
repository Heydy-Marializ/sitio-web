<?php include("bd/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Oficina de Desarrollo Social - Putina</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(120deg, #fdfbfb, #ebedee);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    header {
      background: linear-gradient(to right, #1a2980, #26d0ce);
      color: #fff;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    header h1 {
      font-size: 3em;
      margin: 0;
      animation: float 3s infinite ease-in-out;
      text-shadow: 0 0 8px #fff, 0 0 12px #0ff;
    }

    nav {
      margin-top: 15px;
    }

    nav a {
      margin: 0 15px;
      padding: 10px 20px;
      background: rgba(255,255,255,0.2);
      color: #fff;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      background: #fff;
      color: #1a2980;
      box-shadow: 0 0 10px #fff;
    }

    main {
      padding: 50px 20px;
      text-align: center;
    }

    section {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      max-width: 1000px;
      margin: auto;
      padding: 40px;
    }

    h2 {
      color: #1a2980;
      margin-bottom: 15px;
      font-size: 2em;
      text-shadow: 1px 1px 3px #ddd;
    }

    p {
      font-size: 1.2em;
      color: #444;
      line-height: 1.7;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 30px 0;
    }

    li {
      background: linear-gradient(145deg, #cce5ff, #e6f2ff);
      padding: 12px 20px;
      margin: 10px auto;
      border-radius: 30px;
      max-width: 500px;
      font-weight: bold;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    li:hover {
      transform: scale(1.05);
      background: #d0f0ff;
    }

    .valores {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin: 30px 0;
    }

    .valor-btn {
      background: linear-gradient(145deg, #ffdd57, #ffc107);
      border: none;
      border-radius: 30px;
      padding: 15px 25px;
      font-size: 1.1em;
      cursor: pointer;
      color: #333;
      font-weight: bold;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    .valor-btn:hover {
      transform: scale(1.08);
      background: #ffe082;
    }

    .detalle {
      background: #fefefe;
      border-left: 5px solid #1a2980;
      padding: 20px;
      margin-top: 20px;
      text-align: left;
      font-size: 1.1em;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    footer {
      background: #1a2980;
      color: #fff;
      text-align: center;
      padding: 15px;
      margin-top: 60px;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @media (max-width: 768px) {
      header h1 { font-size: 2em; }
      .valor-btn { padding: 10px 15px; font-size: 1em; }
    }
  </style>
</head>
<body>

  <header>
    <h1>Oficina de Desarrollo Social</h1>
    <nav>
      <a href="index.php">Inicio</a>
      <a href="contacto.php">Contacto</a>
      <a href="registrar_beneficiario.php">registrar_beneficiario</a>
      <a href="oficinas.php">oficinas</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>¿Quiénes Somos?</h2>
      <p>Somos la oficina encargada de promover el bienestar integral de las poblaciones vulnerables en Putina, impulsando programas sociales y políticas inclusivas que transforman vidas.</p>

      <h2>🌟 Programas Sociales Activos</h2>
      <ul>
        <?php
        $res = $conn->query("SELECT nombre FROM programas");
        while($row = $res->fetch_assoc()){
          echo "<li>✔️ " . htmlspecialchars($row['nombre']) . "</li>";
        }
        ?>
      </ul>

      <h2>💖 Nuestros Valores</h2>
      <div class="valores">
        <button class="valor-btn" onclick="mostrar('solidaridad')">🤝 Solidaridad</button>
        <button class="valor-btn" onclick="mostrar('inclusion')">📣 Inclusión</button>
        <button class="valor-btn" onclick="mostrar('justicia')">⚖️ Justicia Social</button>
        <button class="valor-btn" onclick="mostrar('compromiso')">📈 Compromiso</button>
        <button class="valor-btn" onclick="mostrar('innovacion')">💡 Innovación</button>
      </div>
      <div id="detalle" class="detalle"></div>

      <h2>📰 Noticias y Comunicados</h2>
      <p>✅ Próximamente lanzaremos el Programa de Alimentación Escolar para zonas altoandinas.<br>
         ✅ Se abre nueva convocatoria para voluntarios comunitarios.<br>
         ✅ Resultados del último taller de liderazgo juvenil disponible.</p>
    </section>
  </main>

  <footer>
    <p>© <?php echo date("Y"); ?> Oficina de Desarrollo Social - Municipalidad Provincial de Putina</p>
  </footer>

  <script>
    function mostrar(valor) {
      const detalle = document.getElementById("detalle");
      let contenido = "";

      switch (valor) {
        case 'solidaridad':
          contenido = `<h3>🤝 Solidaridad</h3><p>Creemos en la unión y apoyo mutuo como pilares de una sociedad equitativa. Trabajamos mano a mano con la comunidad.</p>`;
          break;
        case 'inclusion':
          contenido = `<h3>📣 Inclusión</h3><p>Promovemos la participación de todos sin distinción, garantizando igualdad de oportunidades para cada ciudadano.</p>`;
          break;
        case 'justicia':
          contenido = `<h3>⚖️ Justicia Social</h3><p>Luchamos contra la desigualdad, defendemos los derechos y priorizamos el acceso a servicios para los más vulnerables.</p>`;
          break;
        case 'compromiso':
          contenido = `<h3>📈 Compromiso</h3><p>Estamos comprometidos con la transformación social de Putina, trabajando con vocación, ética y responsabilidad.</p>`;
          break;
        case 'innovacion':
          contenido = `<h3>💡 Innovación</h3><p>Aplicamos soluciones creativas y tecnologías sociales para lograr impacto real en nuestras comunidades.</p>`;
          break;
      }

      detalle.innerHTML = contenido;
    }
  </script>
</body>
</html>  