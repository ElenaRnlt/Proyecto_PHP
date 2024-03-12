<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
    Producto: 
    <input type="text" name="producto" value="" size="20" maxlength="50" /><br />  

    Categoría: 
    <select name="categoria"> 
        <option value="Ocio">Ocio</option> 
        <option value="Hogar" selected="selected">Hogar</option> 
        <option value="Antigüedades">Antigüedades</option>
        <option value="Vivienda">Vivienda</option> 
    </select><br />        

    Estado del Producto: 
    <select name="estado"> 
        <option value="nuevo">Nuevo</option> 
        <option value="bueno" selected="selected">Buen Estado</option> 
        <option value="usado">Usado</option>
    </select><br /> 

    Precio: 
    <input type="number" name="precio" value="" size="20" maxlength="50" /><br />

    Descripción del producto:<br /> 
    <textarea name="descripcion" rows="4" cols="50"></textarea> 
    <br />  
    
    Fotografía del producto: 
    <input type="file" name="imagen" size="50" /> 

    <br /><input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="limpiar" value="Limpiar" /> 
</form>

<?php
const directorio = 'fotos/';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["producto"];
        $categoria = $_POST["categoria"];
        $estado = $_POST["estado"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        
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
        echo "<tr><td><h2><strong>$nombre</strong></h2></td></tr>";
        echo "<tr><td><h2><strong>$precio €</strong></h3></td></tr>";
        echo "<tr><td><h3><strong>Categoría $categoria</strong></h2></td></tr>";
        echo "<tr><td colspan='2'>$descripcion</td></tr>";
        echo "</table>";
    }
    
}
?>
