
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
<h2>Insertar nuevos datos</h2>
	 <h3>Modificar Juego</h3>
            <label for='columnaJ'>Columna</label>
            <select id='columnaJ' name='columnaJ'>
            <option value='nombre'>Nombre del Juego</option>
            <option value='saga'>Saga</option>
            <option value='fechaestreno'>Fecha de Estreno</option>
            <option value='trailer'>Trailer</option>
            <option value='id_creador'>IDcreador</option>
        </select>
        <label for='mJ'>Introduzca valor</label>
        <input type='text' id='mJ' name='mJ' value=''/>
        <label for='nombreJueg'>Cuyo juego tiene de nombre:</label>
        <input type='text' id='nombreJueg' name='nombreJueg' value=''/>
        <input type='submit' name='modificarJ' value= 'Modificar Datos'/>
		<h3>Modificar Creador</h3>
            <label for='columnaC'>Columna</label>
            <select id='columnaC' name='columnaC'>
            <option value='nombre'>Nombre del Creador</option>
            <option value='apellidos'>Apellidos</option>
            <option value='fechaNacimiento'>Fecha de Nacimiento</option>
            <option value='id_empresa'>IDcreador</option>
        </select>
        <label for='mC'>Introduzca valor</label>
        <input type='text' id='mC' name='mC' value=''/>
        <label for='nombreC'>Cuya persona tiene de nombre:</label>
        <input type='text' id='nombreC' name='nombreC' value=''/>
        <input type='submit' name='modificarC' value= 'Modificar Datos'/>
		<h3>Modificar Empresa</h3>
            <label for='columnaE'>Columna</label>
            <select id='columnaE' name='columnaE'>
            <option value='nombre'>Nombre de la Empresa</option>
            <option value='inicio'>Inicio</option>
            <option value='fundador'>Fundador</option>
        </select>
        <label for='mE'>Introduzca valor</label>
        <input type='text' id='mE' name='mE' value=''/>
        <label for='nombreC'>Cuya empresa tiene de nombre:</label>
        <input type='text' id='nombreE' name='nombreE' value=''/>
        <input type='submit' name='modificarE' value= 'Modificar Datos'/>
		<h3>Modificar Tipo</h3>
            <label for='columnaT'>Columna</label>
            <select id='columnaT' name='columnaT'>
            <option value='descripcion'>Descripcion</option>
            <option value='id_juego'>IdJuego</option>
        </select>
        <label for='mT'>Introduzca valor</label>
        <input type='text' id='mT' name='mT' value=''/>
        <label for='nombreT'>Cuya Tipo tiene de descripcion:</label>
        <input type='text' id='nombreT' name='nombreT' value=''/>
        <input type='submit' name='modificarT' value= 'Modificar Datos'/>
    
</form>
</body>
</html>";
?>