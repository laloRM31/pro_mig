<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos, Profesores y Materias</title>
    <link rel="stylesheet" href="e.css">
</head>
<body class="cuerpo">
    <div class="letras">
        <form class="formulario" action="proces_llenado.php" method="post" enctype="multipart/form-data">
            <h1 class="title">Registro de Alumnos</h1>
            <br>
            <br>
            <label class="foto" for="foto_alumno">Foto:</label>
            <input type="file" id="foto_alumno" name="foto_alumno">
            <br>
             <br>
            <label for="universidad_alumno">Universidad:</label>
            <input class="relleno" type="text" id="universidad_alumno" name="universidad_alumno" required>
            
            <label for="id_alumno">ID:</label>
            <input  class="relleno"type="text" id="id_alumno" name="id_alumno" required>
            
            <label for="direccion_alumno">Dirección:</label>
            <input class="relleno"type="text" id="direccion_alumno" name="direccion_alumno" required>
            
            <label for="carrera">Carrera:</label>
            <input class="relleno"type="text" id="carrera" name="carrera" required>
           
            
            <label for="telefono_alumno">Teléfono:</label>
            <input class="relleno"type="tel" id="telefono_alumno" name="telefono_alumno" required>
            
            <label for="cuatrimestre">Cuatrimestre:</label>
            <input class="relleno"type="number" id="cuatrimestre" name="cuatrimestre" required>
            
            <label for="nombre_alumno">Nombre(s):</label>
            <input class="relleno" type="text" id="nombre_alumno" name="nombre_alumno" required>
            
            <label for="apellido_paterno_alumno">Apellido Paterno:</label>
            <input class="relleno" type="text" id="apellido_paterno_alumno" name="apellido_paterno_alumno" required>
            
            <label for="apellido_materno_alumno">Apellido Materno:</label>
            <input class="relleno" type="text" id="apellido_materno_alumno" name="apellido_materno_alumno" required>
            <br>
            <br>
            <input class="btn" type="submit" name="tipo" value="Registrar Alumno">
        </form>
        <br>
        <br>

        <form class="formulario" action="proces_llenado.php" method="post" enctype="multipart/form-data">
            <h1 class="title">Registro de Profesores</h1>
            <br><br>
            <label class="foto" for="foto_profesor">Foto:</label>
            <input type="file" id="foto_profesor" name="foto_profesor">
            <br>
            <br>
            <label for="universidad_profesor">Universidad:</label>
            <input class="relleno" type="text" id="universidad_profesor" name="universidad_profesor" required>
            
            <label for="id_profesor">ID Docente:</label>
            <input class="relleno" type="text" id="id_profesor" name="id_profesor" required>
            
            <label for="direccion_profesor">Dirección:</label>
            <input class="relleno" type="text" id="direccion_profesor" name="direccion_profesor" required>
            
            <label for="telefono_profesor">Teléfono:</label>
            <input class="relleno" type="tel" id="telefono_profesor" name="telefono_profesor" required>
            
            <label for="nombre_profesor">Nombre(s):</label>
            <input class="relleno" type="text" id="nombre_profesor" name="nombre_profesor" required>
            
            <label for="apellido_paterno_profesor">Apellido Paterno:</label>
            <input class="relleno" type="text" id="apellido_paterno_profesor" name="apellido_paterno_profesor" required>
            
            <label for="apellido_materno_profesor">Apellido Materno:</label>
            <input class="relleno" type="text" id="apellido_materno_profesor" name="apellido_materno_profesor" required>
            
            <label for="formacion_academica">Formación Académica:</label>
            <input class="relleno" type="text" id="formacion_academica" name="formacion_academica" required>
            
            <label for="experiencia">Experiencia:</label>
            <input class="relleno" type="text" id="experiencia" name="experiencia" required>
            <br>
            <br>
            <input class="btn" type="submit" name="tipo" value="Registrar Profesor">
        </form>
        <br>
        <br>
        <form class="formulario" action="proces_llenado.php" method="post">
            <h1 class="title">Registro de Materias</h1>
            <br><br>
            <label for="ingles">Inglés:</label>
            <input class="relleno" type="text" id="ingles" name="ingles" required>
            
            <label for="matematicas">Matemáticas:</label>
            <input class="relleno" type="text" id="matematicas" name="matematicas" required>
            
            <label for="espanol">Español:</label>
            <input class="relleno" type="text" id="espanol" name="espanol" required>
            
            <label for="geografia">Geografía:</label>
            <input class="relleno" type="text" id="geografia" name="geografia" required>
            
            <label for="ciencias">Ciencias:</label>
            <input class="relleno" type="text" id="ciencias" name="ciencias" required>
            <br>
            <br>
            <input class="btn" type="submit" name="tipo" value="Registrar Materias"> 
            <br>
            <br>
        </form>
        <br>
        
        <a class="regis" href="ver_registros.php">Ver todos los registros</a>
    </div>
</body>
</html>