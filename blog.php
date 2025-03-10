<?php
  require 'includes/funciones.php';
 
  incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Nuesto Blog</h1>
      <article class="entrada-blog">
        <div class="image">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="texto imagen blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion-meta">Escrito el: <span>17/02/2025</span> por: <span>Teddy Paulino</span></p>
            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorra dinero</p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="image">
          <picture>
            <source srcset="build/img/blog2.webp" type="image/webp">
            <source srcset="build/img/blog2.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/blog2.jpg" alt="texto imagen blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="informacion-meta">Escrito el: <span>17/02/2025</span> por: <span>Teddy Paulino</span></p>
            <p>Maximiza el espacio de tu hogar con esta guia, aprende a cambinar muebles y colores para darle via a tu espacio</p>
          </a>
        </div>
      </article> 
      <article class="entrada-blog">
        <div class="image">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp">
            <source srcset="build/img/blog3.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/blog3.jpg" alt="texto imagen blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion-meta">Escrito el: <span>17/02/2025</span> por: <span>Teddy Paulino</span></p>
            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorra dinero</p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="image">
          <picture>
            <source srcset="build/img/blog4.webp" type="image/webp">
            <source srcset="build/img/blog4.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/blog4.jpg" alt="texto imagen blog">
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="informacion-meta">Escrito el: <span>17/02/2025</span> por: <span>Teddy Paulino</span></p>
            <p>Maximiza el espacio de tu hogar con esta guia, aprende a cambinar muebles y colores para darle via a tu espacio</p>
          </a>
        </div>
      </article> 
      
    </main>
<?php
  incluirTemplate('footer');
?> 

