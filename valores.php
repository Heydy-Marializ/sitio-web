<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Valores - Oficina de Desarrollo Social</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: radial-gradient(circle, #fceabb, #f8b500);
      margin: 0;
      padding: 0;
      text-align: center;
      color: #222;
    }
    h1 {
      margin-top: 20px;
      font-size: 2.8em;
      color: #fff;
      text-shadow: 2px 2px 5px #000;
    }
    .valores {
      margin: 30px auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }
    .valor-btn {
      background: linear-gradient(145deg, #ffda77, #ffc300);
      border: none;
      border-radius: 30px;
      padding: 15px 25px;
      font-size: 1.2em;
      font-weight: bold;
      cursor: pointer;
      color: #fff;
      text-shadow: 1px 1px 3px #000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      transition: transform 0.2s ease-in-out, background 0.3s;
    }
    .valor-btn:hover {
      transform: scale(1.1);
      background: linear-gradient(145deg, #fff176, #fbc02d);
    }
    .detalle {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      font-size: 1.1em;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background: #f06292;
      color: #fff;
      padding: 10px 20px;
      border-radius: 25px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      transition: background 0.3s;
    }
    a:hover {
      background: #ec407a;
    }
  </style>
</head>
<body>
  <h1>💖 Nuestros Valores</h1>

  <div class="valores">
    <button class="valor-btn" onclick="mostrar('solidaridad')">🤝 Solidaridad</button>
    <button class="valor-btn" onclick="mostrar('inclusion')">📣 Inclusión</button>
    <button class="valor-btn" onclick="mostrar('justicia')">⚖️ Justicia Social</button>
    <button class="valor-btn" onclick="mostrar('compromiso')">📈 Compromiso</button>
    <button class="valor-btn" onclick="mostrar('innovacion')">💡 Innovación</button>
  </div>

  <div id="detalle" class="detalle"></div>

  <a href="index.php">← Volver al inicio</a>

  <script>
    function mostrar(valor) {
      const detalle = document.getElementById("detalle");
      let contenido = "";

      switch (valor) {
        case 'solidaridad':
          contenido = `
            <h3>🤝 Solidaridad</h3>
            <p>Creemos firmemente que el progreso social solo es posible si trabajamos juntos. Fomentamos la colaboración, el apoyo mutuo y la construcción de redes de ayuda entre ciudadanos, autoridades y organizaciones.</p>
          `;
          break;
        case 'inclusion':
          contenido = `
            <h3>📣 Inclusión</h3>
            <p>Nos esforzamos por eliminar las barreras sociales, culturales y económicas que impiden la participación plena de todos. Nuestra oficina impulsa programas que garantizan la equidad y el acceso universal a oportunidades y servicios.</p>
          `;
          break;
        case 'justicia':
          contenido = `
            <h3>⚖️ Justicia Social</h3>
            <p>Promovemos un entorno donde cada persona pueda ejercer sus derechos de forma equitativa. Combatimos la desigualdad mediante políticas sociales que priorizan a los más vulnerables y fomentamos la responsabilidad ciudadana.</p>
          `;
          break;
        case 'compromiso':
          contenido = `
            <h3>📈 Compromiso</h3>
            <p>La dedicación y entrega de nuestro equipo se refleja en cada acción que realizamos. Actuamos con integridad, eficiencia y una fuerte vocación de servicio en favor del desarrollo integral de Putina.</p>
          `;
          break;
        case 'innovacion':
          contenido = `
            <h3>💡 Innovación</h3>
            <p>Adaptamos nuevas ideas, herramientas digitales y metodologías participativas para hacer más efectivas nuestras intervenciones. La innovación es clave para avanzar hacia una sociedad más justa, inclusiva y sostenible.</p>
          `;
          break;
      }

      detalle.innerHTML = contenido;
    }
  </script>
</body>
</html>
