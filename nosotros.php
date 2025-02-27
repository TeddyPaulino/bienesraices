<?php
    require 'includes/funciones.php';
 
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
      <h1>Conoce Sobre Nosotros</h1>  
      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <source srcset="build/img/nosotros.jpg" type="image/jgp">
            <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
          </picture>
        </div>
        <div class="texto-nosotros">
          <blockquote>
            25 Años de experiencia
          </blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id justo nec turpis sodales semper id quis leo. In laoreet est eu erat tristique vulputate. Duis nec mi eu ante condimentum condimentum. Ut at mauris et dolor dignissim molestie ut ut mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere malesuada nulla non dapibus. Nullam non dolor mauris. Integer ornare libero id velit tempus, ut interdum sem tempus. 

            Morbi a efficitur eros. Aenean quis dapibus sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

            <p>Duis mollis lorem turpis, vel pellentesque ex scelerisque vel. Donec eu eros semper, luctus nisi a, lobortis neque. Aenean aliquam libero id eleifend finibus. Praesent nec tortor at odio blandit consequat. Pellentesque lobortis, quam in gravida egestas, nisl ipsum viverra erat, sit amet placerat quam leo ac dolor. Nulla facilisi. Morbi a efficitur eros. Aenean quis dapibus sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </main>
    <section class="contenedor seccion">
      <h1>Más Sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img src="build/img/icono1.svg" alt="icono seguridad" loading="lanzy">
          <h1>Seguridad</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis expedita nobis dolor facere? Laboriosam quidem nisi ducimus repudiandae id consectetur explicabo, beatae, error sapiente, assumenda mollitia! Eius corrupti repellat cum!</p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono seguridad" loading="lanzy">
          <h1>Precio</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis expedita nobis dolor facere? Laboriosam quidem nisi ducimus repudiandae id consectetur explicabo, beatae, error sapiente, assumenda mollitia! Eius corrupti repellat cum!</p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="icono seguridad" loading="lanzy">
          <h1>A Tiempo</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis expedita nobis dolor facere? Laboriosam quidem nisi ducimus repudiandae id consectetur explicabo, beatae, error sapiente, assumenda mollitia! Eius corrupti repellat cum!</p>
        </div>
      </div>
    </section>
<?php
  incluirTemplate('footer');
?> 