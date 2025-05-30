<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Error 404 - Página no encontrada</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(-45deg, #ff6f61, #f44336, #e57373, #ff8a65);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      color: #fff;
      padding: 20px;
    }

    @keyframes gradient {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }

    .container {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
      max-width: 500px;
      width: 100%;
      animation: fadeIn 1.2s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    img {
      width: 100%;
      max-width: 300px;
      margin-bottom: 20px;
      border-radius: 10px;
    }

    h1 {
      font-size: 50px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    a {
      background-color: #fff;
      color: #f44336;
      padding: 12px 30px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    a:hover {
      background-color: #f44336;
      color: #fff;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 36px;
      }

      p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="https://www.dominion-global.com/templates/shaper_helixultimate/dominion-global/images/error-404.gif" alt="Error 404">
    <h1>¡Oops! Error 404</h1>
    <p>La página que estás buscando no existe o fue movida.</p>
    <a href="login.html">Volver al inicio</a>
  </div>

</body>
</html>

  
 