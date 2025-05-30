<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(to right, #74ebd5, #ACB6E5);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .contenedor {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 350px;
      text-align: center;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
      margin: 10px 0 5px;
      font-weight: 600;
      color: #555;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #74ebd5;
      outline: none;
      box-shadow: 0 0 5px #74ebd5aa;
    }

    input[type="submit"] {
      background-color: #00796b;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #004d40;
    }

    @media (max-width: 400px) {
      .contenedor {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="contenedor">
    <h2>Iniciar Sesión</h2>
    <form action="procesar_login.php" method="POST">
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Ingresar">
    </form>
  </div>

</body>
</html>