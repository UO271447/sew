
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
	<h3>EMPRESA</h3>
    <p>
    <label for='nombreE'>NombreEmpresa</label>
    <input type='text' id='nombreE' name='nombreE' value=''/>
    </p>
    <p>
    <label for='inicioE'>Inicio</label>
    <input type='text' id='inicioE' name='inicioE' value=''/>
    </p>
    <p>
    <label for='fundador'>Fundador</label>
    <input type='text' id='fundador' name='fundadorE' value=''/>
    </p>
	<input type='submit' name='crearE' value= 'Insertar'/>
	<h3>CREADOR</h3>
    <p>
    <label for='nombreC'>Nombre</label>
    <input type='text' id='nombreC' name='nombreC' value=''/>
    </p>
	<p>
    <label for='apellidoC'>Apellidos</label>
    <input type='text' id='apellidoC' name='apellidoC' value=''/>
    </p>
    <p>
    <label for='fechaNaci'>FechaNacimiento</label>
    <input type='text' id='fechaNaci' name='fechaNaci' value=''/>
    </p>
    <p>
    <label for='idE'>Nombre de la Empresa</label>
    <input type='text' id='idE' name='empresa' value=''/>
    </p>
	<input type='submit' name='crearC' value= 'Insertar'/>
	<h3>JUEGO</h3>
    <p>
    <label for='nombreJ'>NombreJuego</label>
    <input type='text' id='nombreJ' name='nombreJu' value=''/>
    </p>
    <p>
    <label for='saga'>Saga</label>
    <input type='text' id='saga' name='saga' value=''/>
    </p>
    <p>
    <label for='fechaEstreno'>Fecha de lanzamiento</label>
    <input type='text' id='fechaEstreno' name='fechaEstreno' value=''/>
    </p>
    <p>
    <label for='trailer'>Nº de Trailers</label>
    <input type='number' id='trailer' name='trailer' value=''/>
    </p>
    <p>
    <label for='idCreador'>Creador</label>
    <input type='text' id='idCreador' name='nombreCre' value=''/>
    </p>
	<input type='submit' name='crearJ' value= 'Insertar'/>
	<h3>PUBLICO</h3>
    <p>
    <label for='publicoO'>Publico Objetivo</label>
    <input type='text' id='publicoO' name='publicoO' value=''/>
    </p>
	<p>
    <label for='publicoR'>Publico Real</label>
    <input type='text' id='publicoR' name='publicoR' value=''/>
    </p>
    <p>
    <label for='idJu'>Nombre del Juego</label>
    <input type='text' id='idJu' name='nombreJueg' value=''/>
    </p>
    <input type='submit' name='crearP' value= 'Insertar'/>
	<h3>TIPO</h3>
	<p>
    <label for='desc'>Descripcion</label>
    <input type='text' id='desc' name='descripcion' value=''/>
    </p>
    <p>
    <label for='idJue'>Nombre del Juego</label>
    <input type='text' id='idJue' name='nombreJuegoo' value=''/>
    </p>
    <input type='submit' name='crearT' value= 'Insertar'/>
    
</form>
</body>
</html>";
?>