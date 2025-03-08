<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelcomeEmail</title>
</head>
<body>
    <h1>Hola, {{ $user->name }} 👋</h1>
    <p>¡Gracias por registrarte en nuestra plataforma! Esperamos que disfrutes de tu experiencia.</p>
    <p>Saludos, <br> El equipo de {{ config('app.name') }}</p>
</body>
</html>