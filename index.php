<?php
  require 'includes/funciones.php';
 
  incluirTemplate('header',  $inicio = true);
?>
    <main class="contenedor seccion">
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
    </main>
    <section class="seccion contenedor">
      <h2>Casas y Depas en Venta</h2>
      <div class="contenedor-anuncios">
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.jpg" type="image/jgp">
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en el Lago</h3>
            <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
            <p class="precio">3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>4</p>
              </li>
            </ul>
            <a href="" class="boton-amarillo-block ">
              Ver Propiedad
            </a>
          </div> <!--Cierre contenido de anuncio-->
        </div> <!--Cierre de anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp">
            <source srcset="build/img/anuncio2.jpg" type="image/jgp">
            <img class="icono" loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa terminados de lujo</h3>
            <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
            <p class="precio">3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>4</p>
              </li>
            </ul>
            <a href="" class="boton-amarillo-block ">
              Ver Propiedad
            </a>
          </div><!--Cierre contenido de anuncio-->
        </div> <!--Cierre de anuncio-->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp">
            <source srcset="build/img/anuncio3.jpg" type="image/jgp">
            <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa con alberca</h3>
            <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
            <p class="precio">3,000,000.00</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                <p>3</p>
              </li>
              <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                <p>4</p>
              </li>
            </ul>
            <a href="" class="boton-amarillo-block ">
              Ver Propiedad
            </a>
          </div> <!--Cierre contenido de anuncio-->
        </div> <!--Cierre de anuncio-->
      </div><!--Cierre contenedor de anuncio-->
      <div class="alinear-derecha">
        <a href="anuncios.html"class="boton-verde">Ver Todas</a>
      </div>
    </section>
    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la breverdad</p>
      <a href="contacto.html" class="boton-amarillo">Contatanos</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          <div class="image">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp">
              <source srcset="build/img/blog1.jpg" type="image/jpg">
              <img loading="lazy" src="build/img/blog1.jpg" alt="texto imagen blog">
            </picture>
          </div>
          <div class="texto-entrada">
            <a href="entrada.html">
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
            <a href="entrada.html">
              <h4>Guía para la decoración de tu hogar</h4>
              <p class="informacion-meta">Escrito el: <span>17/02/2025</span> por: <span>Teddy Paulino</span></p>
              <p>Maximiza el espacio de tu hogar con esta guia, aprende a cambinar muebles y colores para darle via a tu espacio</p>
            </a>
          </div>
        </article> 
      </section>
      <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
          </blockquote>
          <p>Teddy Paulino</p>
        </div>
      </section>
    </div>
<?php
  incluirTemplate('footer');
?>    
