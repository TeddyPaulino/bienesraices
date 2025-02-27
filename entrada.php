<?php
 require 'includes/funciones.php';
 
 incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en Venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="">
      </picture>
      <p class="informacion-meta">Escrito el: <span>21/02/2025</span> por: <span>Teddy Paulino</span></p>
      <div class="resumen-propiedad">
            <p class="prueba">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id justo nec turpis sodales semper id quis leo. In laoreet est eu erat tristique vulputate. Duis nec mi eu ante condimentum condimentum. Ut at mauris et dolor dignissim molestie ut ut mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere malesuada nulla non dapibus. Nullam non dolor mauris. Integer ornare libero id velit tempus, ut interdum sem tempus. Nullam id condimentum nunc. Vivamus nec augue diam. Sed eget dolor enim. Mauris aliquet eget risus nec interdum. Sed dolor erat, efficitur sit amet nibh at, dapibus pellentesque nisi. Proin suscipit diam vel nisi condimentum vestibulum. Quisque aliquet leo diam, sit amet egestas elit vulputate ut.</p> 
        </div>
    </main>
<?php
  incluirTemplate('footer');
?> 
