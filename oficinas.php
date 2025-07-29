<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Oficinas - Desarrollo Social Putina</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f5f7fa, #c3cfe2);
      color: #333;
    }
    header {
      background: linear-gradient(to right, #1a2980, #26d0ce);
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    nav {
      display: flex;
      justify-content: center;
      background: #fff;
      padding: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #1a2980;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #26d0ce;
    }
    main {
      padding: 40px 20px;
      text-align: center;
    }
    h1 {
      color: #1a2980;
      margin-bottom: 30px;
    }
    .oficinas {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }
    .card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 250px;
      padding: 25px;
      transition: transform 0.3s, box-shadow 0.3s;
      animation: flotar 4s infinite ease-in-out;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    .card h3 {
      margin-top: 0;
      color: #1a2980;
    }
    .card p {
      color: #555;
    }
    @keyframes flotar {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-4px); }
    }
    footer {
      margin-top: 40px;
      padding: 20px;
      background: #1a2980;
      color: white;
      text-align: center;
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Oficinas Complementarias</h1>
    <p>Trabajamos en beneficio de todos los sectores de Putina</p>
  </header>

  <nav>
    <a href="index.php">Inicio</a>
    <a href="contacto.php">Contacto</a>
    <a href="registrar_beneficiario.php">Inscripción</a>
  </nav>

  <main>
    <div class="oficinas">
      <div class="card">
        <h3>👵 Adulto Mayor</h3>
        <p>Programas de apoyo, actividades sociales, asistencia médica y protección para adultos mayores.</p>
      </div>
      <div class="card">
        <h3>♿ Discapacidad e Inclusión</h3>
        <p>Fomentamos la igualdad de oportunidades para personas con discapacidad mediante programas integrales.</p>
      </div>
      <div class="card">
        <h3>👩‍🍼 Apoyo a la Mujer</h3>
        <p>Impulsamos el empoderamiento de mujeres con programas sociales, formación y protección de derechos.</p>
      </div>
      <div class="card">
        <h3>👶 Desarrollo Infantil</h3>
        <p>Mejoramos la calidad de vida de niños y niñas en situación vulnerable con atención integral.</p>
      </div>
      <div class="card">
        <h3>🍲 Asistencia Alimentaria</h3>
        <p>Gestionamos comedores populares y entrega de alimentos para familias en riesgo social.</p>
      </div>
      <div class="card">
        <h3>🧠 Salud Mental</h3>
        <p>Ofrecemos orientación psicológica, campañas y talleres para el bienestar emocional.</p>
      </div>
    </div>
  </main>

  <footer>
    Oficina de Desarrollo Social - San Antonio de Putina &copy; 2025
  </footer>
</body>
</html>
