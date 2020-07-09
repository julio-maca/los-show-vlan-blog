<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@300&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA;?>../css/estilos.ccs">
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">Mi primer blog</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?> /buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
            </div>
        </div>
    </header>
    
</body>
</html>