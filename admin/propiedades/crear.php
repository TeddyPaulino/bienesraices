<?php
    // Conexion base de datros
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Consulta para tener los vendedore de la base de datos
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arregle
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    // Ejecuta el codigo después de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        if (!$titulo) {
            $errores[] = 'Debes añadir un titulo';
        }

        if (!$precio) {
            $errores[] = 'El precio es obligatorio';
        }

        if (!$descripcion) {
            $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        if (!$habitaciones) {
            $errores[] = 'El numero de habitaciones es obligatorio';
        }

        if (!$wc) {
            $errores[] = 'El numero de baño es obligatorio';
        }

        if (!$estacionamiento) {
            $errores[] = 'El numero de estacionamiento es obligatorio';
        }

        if (!$vendedorId) {
            $errores[] = 'Debes de elegir un vendedor';
        }

        // Revisar si el array de errores este vacio
        if (empty($errores)) {
            // Query de para isnsercion a la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('location:/bienesraices_inicio/admin');
            }

        }

    }
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/bienesraices_inicio/admin" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error) : ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" >
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" min="1" max="9" placeholder="Ej: 3" value="<?php echo $habitaciones; ?>">

            <legend>Información Propiedad</legend>
            <label for="wc">Baños:</label>
            <input type="number" name="wc" id="wc" min="1" max="9" placeholder="Ej: 3" value="<?php echo $wc?>">

            <legend>Información Propiedad</legend>
            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" id="estacionamiento" min="1" max="9" placeholder="Ej: 3" value="<?php echo $estacionamiento;?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado) ) : ?>
                    <option 
                        <?php 
                            if ($vendedorId === $vendedor['id']) {
                                echo 'selected';
                            } else {
                                echo '';
                            }
                        ?> 
                        value="<?php echo $vendedor['id'];?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Agregar Propiedad" class="boton boton-verde">
    </form>
</main>
<?php
    incluirTemplate('footer');
?>