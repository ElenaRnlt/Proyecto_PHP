<form method="post" action= "<?php $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
    Nombre y Apellidos: 
        <input type="text" name="nombre" value="" size="20" maxlength="50" /><br />

    Nombre de usuario: 
        <input type="text" name="nombre_usu" value="" size="20" maxlength="50" /><br />
    
    Contraseña: 
        <input type="password" name="contraseña" value="" size="20" maxlength="20" /><br />

    Email: 
        <input type="text" name="email" value="" size="20" maxlength="20" /><br />

    Fecha de Nacimiento - Formato: dd/mm/aaaa:
        <input type="text" id="fecha" name="fecha_nac" placeholder="dd/mm/aaaa"><br />

    Sexo: 
      <input type="radio" name="sexo" value="Masculino" />Hombre 
      <input type="radio" name="sexo" value="Femenino" />Mujer 
      <input type="radio" name="sexo" value="Indefinido" 
                            checked="checked" />No quiero decirlo
                            <br />  

    ¿Eres Empresa?: 
      <input type="radio" name="empresa" value="No" checked="checked" />No 
      <input type="radio" name="empresa" value="Si" />Si <br />

    Idioma: 
        <select name="idioma"> 
            <option value="Francés">Francés</option> 
            <option value="Español" selected="selected" >Español</option> 
            <option value="Italiano">Italiano</option>
            <option value="Inglés">Inglés</option> 
        </select><br /> 

    Ciudad: 
        <input type="text" name="ciudad_residencia" value="" size="20" maxlength="50" /><br />

    Telefono: 
        <input type="number" name="telefono" value="" size="20" maxlength="9" /><br />

    DNI: 
        <input type="text" name="dni" value="" size="20" maxlength="9" /><br />
    
    Fotografía: 
      <input type="file" name="imagen" size="50" /><br />
    
    Tarjeta de Credito:
        <input type="text" name="tarjeta" value="" size="20" maxlength="16" /><br />
    

    <br /><input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="limpiar" value="Limpiar" /> 
</form>

<?php
const directorio = 'fotos/';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST['nombre'];
    $nombre_usuario = $_POST['nombre_usu'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nac'];
    $sexo = $_POST['sexo'];
    $empresa = $_POST['empresa'];
    $idioma = $_POST['idioma'];
    $ciudad_residencia = $_POST['ciudad_residencia'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
    $tarjeta = $_POST['tarjeta'];
    $fecha_creacion = date("d-m-Y");
    
    // Mover la foto y obtener su nombre
    $nombre_archivo = '';
    if(isset($_FILES['imagen'])) {
        $nombre_archivo = $_FILES['imagen']['name'];
        $archivo_temporal = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($archivo_temporal, directorio . $nombre_archivo); 
    }

    // Crear tabla
    echo "<table border='0'>";
    echo "<tr><td colspan='2'><img src='" . directorio . $nombre_archivo . "' width='300' height='300'></td></tr>";

    // Agregar filas con los datos
    echo "<tr><td><h1><strong>$nombre</strong></h2></td></tr>";
    echo "<tr><td><h2><strong>$nombre_usuario</strong></h2></td></tr>";
    echo "<tr><td>$dni</td></tr>";
    echo "<tr><td>$email</td></tr>";
    echo "<tr><td>$fecha_nacimiento</td></tr>";
    echo "<tr><td>$sexo</td></tr>";
    echo "<tr><td>$idioma</td></tr>";
    echo "<tr><td>$ciudad_residencia</td></tr>";
    echo "<tr><td>$telefono</td></tr>";
    echo "<tr><td>$tarjeta</td></tr>";
    echo "<tr><td colspan='2'>'Usuario creado en la siguiente fecha: $fecha_creacion'</td></tr>";
    echo "</table>";
}
?>