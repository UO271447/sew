<?php include 'Ejercicio6.php';
echo"
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'/>
    <title>Base de Datos</title>
    <link rel='stylesheet' href='Ejercicio6.css'/>

</head>
<body>
<header>
<h1>Modificar</h1>   
</header>
<nav >
        <a href='Indice.php' accesskey='i'>Inicio</a>
        <a href='InsertarDatos.php' accesskey='d'>Insertar Datos a la Tabla</a>   
        <a href='BuscarDatos.php' accesskey='b'>Buscar Datos</a>
        <a href='ModificarDatos.php' accesskey='m'>Modificar Datos</a>
        <a href='EliminarDatos.php' accesskey='e'>Eliminar Datos</a>
        <a href='ExportarDatos.php' accesskey='x'>Exportar Datos</a>
        <a href='ImportarDatos.php' accesskey='r'>Importar Datos</a>
        <a href='GenerarInforme.php' accesskey='g'>Generar Informe</a>
</nav>
    <form action='#' method='post' name='Ejercicio6.php'>
		<h2>Modificar Datos</h2>
		<fieldset>
		<legend>Modifica los datos segun la columna elegida</legend>
		<input type='radio' id='id' name='modificar' value='Id' checked>
		<label for='id'>Id</label>
		<input type='radio' id='dni' name='modificar' value='Dni'/>
		<label for='dni'>Dni</label>
		<input type='radio' id='nombre' name='modificar' value='Nombre' />
		<label for='nombre'>Nombre</label>
		<input type='radio' id='apellido' name='modificar' value='Apellidos'/>
		<label for='apellido'>Apellidos</label>
		<input type='radio' id='email' name='modificar' value='Email' />
		<label for='email'>Email</label>
		<input type='radio' id='telefono' name='modificar' value='Telefono'/>
		<label for='telefono'>Telefono</label>
		<input type='radio' id='edad' name='modificar' value='Edad' />
		<label for='edad'>Edad</label>
		<input type='radio' id='sex' name='modificar' value='Sexo'/>
		<label for='sex'>Sexo</label>
		<input type='radio' id='pericia' name='modificar' value='Pericia' />
		<label for='pericia'>Pericia</label>
		<input type='radio' id='tiempo' name='modificar' value='Tiempo'/>
		<label for='tiempo'>Tiempo</label>
		<input type='radio' id='correc' name='modificar' value='Correcto' />
		<label for='correc'>Correcto</label>
		<input type='radio' id='coment' name='modificar' value='Comentarios'/>
		<label for='coment'>Comentarios</label>
		<input type='radio' id='prop' name='modificar' value='Propuestas'/>
		<label for='prop'>Propuestas</label>
		<input type='radio' id='val' name='modificar' value='Valoracion'/>
		<label for='val'>Valoracion</label>
		</fieldset>
		<label for='modificarr'>Modificar:</label>
		<input type='text' id='modificarr' name='modificarr' value=''/>
    <label for='dnimodificar'>De la persona que tiene  Dni:</label>
    <input type='text' id='dnimodificar' name='dnimodificar' value=''/>
    <input type='submit' name='modificarD' value= 'Modificar Datos' />
	</form>
</body>
</html>";?>