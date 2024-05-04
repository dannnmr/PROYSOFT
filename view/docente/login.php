<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    
    <form action="IniciarSesion.php" method="post">
        <h1><b>Iniciar Sesion</b></h1>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Nombre de Usuario">
        <i class="fa-solid fa-unlock"></i>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password">
        <hr>
        <button type="submit">Iniciar Sesion </button>
        <a href="CrearCuenta.php">CrearCuenta</a>
    </form>
</body>
</html>