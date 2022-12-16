
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
    <h2>Eliminar datos</h2>
	<h3>Tipo de Juego</h3>
    <p>
    <label for='descripcion'>Descpripcion del Tipo a Eliminar</label>
    <input type='text' id='descripcion' name='descripcionEli' value=''/>
    </p>
	<input type='submit' name='eliminarT' value= 'Eliminar'/>
	<h3>Publico</h3>
    <p>
    <label for='publicoO'>Publico original a eliminar</label>
    <input type='text' id='publicoO' name='publicoO' value=''/>
    </p>
	<input type='submit' name='eliminarP' value= 'Eliminar'/>
	<h3>Juego</h3>
    <p>
    <label for='nombre'>Nombre del Juego a Eliminar</label>
    <input type='text' id='nombre' name='nombreJ' value=''/>
    </p>
	<input type='submit' name='eliminarJ' value= 'Eliminar'/>
	<h3>Creador</h3>
    <p>
    <label for='nombrec'>Nombre del Creador a Eliminar</label>
    <input type='text' id='nombrec' name='nombreC' value=''/>
    </p>
	<input type='submit' name='eliminarC' value= 'Eliminar'/>
	<h3>Empresa</h3>
    <p>
    <label for='nombree'>Nombre del Empresa a Eliminar</label>
    <input type='text' id='nombree' name='nombreE' value=''/>
    </p>
	<input type='submit' name='eliminarE' value= 'Eliminar'/>
    
</form>
</body>
</html>";
?>