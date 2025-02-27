<?php
    require '../../includes/config/database.php';
    conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/bienesraices_inicio/admin" class="boton boton-verde">Volver</a>

    <form class="formulario">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" min="1" max="9" placeholder="Ej: 3">

            <legend>Información Propiedad</legend>
            <label for="baños">Baños:</label>
            <input type="number" name="baños" id="baños" min="1" max="9" placeholder="Ej: 3">

            <legend>Información Propiedad</legend>
            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" id="estacionamiento" min="1" max="9" placeholder="Ej: 3">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="1">Teddy Paulino</option>
                <option value="2">Ithan Paulino</option>
            </select>
        </fieldset>
        <input type="submit" value="Agregar Propiedad" class="boton boton-verde">
    </form>
</main>
<?php
    incluirTemplate('footer');
?>