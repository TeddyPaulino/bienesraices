<?php
  require 'includes/funciones.php';
 
  incluirTemplate('header');
?>
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpg">
        <img loading="lazy" src="img/destacada3.jpg" alt="Imagen Contacto">
      </picture>
      <h2>Llenar el formulario de Contacto</h2>
      <form class="formulario">
        <fieldset>
          <legend>Información Personal</legend>
         
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">
           
            <label for="email">E-Mail</label>
            <input type="email" name="email" placeholder="Tu Nombre" id="Tu Correo Electronico">
              
            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Tu Teléfono" id="Tu Teléfono">    
          
            <label for="menaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje"></textarea>
               
        </fieldset>
        <fieldset>
          <legend>Información sobre Propiedad</legend>
          
            <label for="vendecompra">Vende o Compra</label>
            <select name="vendecompra" id="vendecompra">
              <option disabled selected value="Seleccione">--Seleccione--</option>
              <option value="compra">Compra</option>
              <option value="venta">Vende</option>
            </select>
        
            <label for="preciopresupuesto">Precio o Presupuesto</label>
            <input type="number" name="preciopresupuesto" id="preciopresupuesto">
          </div>
        </fieldset>
        <fieldset>
          <legend>Contacto</legend>
          <p>Como desea ser contactado:</p>
          <div class="forma-contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input type="radio" value="Teléfono" name="contactar" id="contactar-telefono">

            <label for="emailContacto">Email</label>
            <input type="radio" value="E-Mail" name="contactar" id="contactar-email">
          </div> 
          <p>Si eligió Teléfono, elija la fecha y la hora</p>
          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha">
          
          <label for="hora">Hora:</label>
          <input type="time" id="hora" min="9:00" max="18:00">
        </fieldset>
        <input type="submit" class="boton-verde" value="Enviar">
      </form>
    </main>
<?php
  incluirTemplate('footer');
?> 
