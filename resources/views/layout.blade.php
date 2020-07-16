<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ing Sw I')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about"></a>About</li>
            <li><a href="/portafolio"></a>Portafolio</li>
            <li><a href="/contact"></a>Contact</li>
        </ul>
    </nav>
        <!-- <h1>Home</h1>
        Practica de <?php echo $nombre ??"No ingreso nombre"?> -->
        <!-- Practica de <?php echo e($nombre ??"No ingreso nombre")?> -->
        <!-- Practica de <?php echo "<script>alert('Ingenieria')</script>"?> -->
        <!-- Practica de {{"<script>alert('Ingenieria')</script>"}} -->
        @yield('content')
</body>
</html>