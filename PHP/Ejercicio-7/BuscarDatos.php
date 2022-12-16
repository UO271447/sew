
<?php include 'Ejercicio7.php';
echo"
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'/>
    <title>Base de Datos</title>
    <link rel='stylesheet' href='Ejercicio7.css'/>
    <meta name='viewport' content='width=device-width, innital-scale=1'/>
    
</head>
<body>
<header>
<h1>Base de Datos</h1>   
</header>
<nav >
    <a href='Indice.php' accesskey='i'>Inicio</a>
    <a href='InsertarDatos.php' accesskey='d'>Insertar Datos</a>
    <a href='ModificarDatos.php' accesskey='m'>Modificar Datos</a>
    <a href='BuscarDatos.php' accesskey='b'>Buscar Datos De un Juego</a>
    <a href='EliminarDatos.php' accesskey='e'>Eliminar Datos</a>
    <a href='ExportarDatos.php' accesskey='x'>Exportar Datos</a>
    <a href='ImportarDatos.php' accesskey='r'>Importar Datos</a>
</nav>
<form action='#' method='post' name='Ejercicio7.php'>
    
<h2>Buscar datos en la tabla Juego</h2>
<p>Buscar Datos de la tabla Juego</p>
<label for='columnaJuego'>Columna</label>
<select id='columnaJuego' name='columnaJuego'>
    <option value='nombre'>Nombre del juego</option>
    <option value='saga'>Saga</option>
    <option value='fechaestreno'>Fecha estreno</option>
    <option value='trailer'>Nº de Trailers</option>
    <option value='id_creador'>Creador</option>
</select>
<label for='buscJ'>Insertar Valor a Buscar</label>
<input type='text' id='buscJ' name='buscJ' value=''/>
<input type='submit' name='buscarJ' value= 'Buscar Datos'/>
<p> ".$baseDatos->getDatosConsulta()."</p>
</form>
</body>
</html>";
?>