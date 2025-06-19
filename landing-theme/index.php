<!DOCTYPE html>
<html lang="es">
<head>
  <!-- 1. Charset y viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 2. Tipografías externas -->
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
    rel="stylesheet"
  />

  <!-- 3. Hoja de estilos principal -->
  <link
    rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/style.css"
    type="text/css"
  />

  <!-- 4. Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s){
      if(f.fbq)return;
      n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)
    }(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1794185348172977');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1794185348172977&ev=PageView&noscript=1"/>
  </noscript>

  <!-- 5. Título y Meta SEO -->
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <meta name="description"
        content="Aprendé a controlar tu dinero, eliminar deudas e invertir inteligentemente con nuestro curso online práctico. ¡Inscribite hoy y construí tu futuro financiero!">

  <link rel="canonical" href="https://educacionfinanciera.digital/">

  <!-- 6. Open Graph -->
  <meta property="og:title"        content="<?php bloginfo('name'); ?>"/>
  <meta property="og:description"  content="<?php echo esc_attr( get_bloginfo('description') ); ?>"/>
  <meta property="og:image"        content="https://educacionfinanciera.digital/imagenes/og-image.jpg"/>
  <meta property="og:url"          content="<?php echo home_url(); ?>"/>
  <meta property="og:type"         content="website"/>
  <meta property="og:site_name"    content="<?php bloginfo('name'); ?>"/>

  <!-- 7. Twitter Cards -->
  <meta name="twitter:card"        content="summary_large_image"/>
  <meta name="twitter:title"       content="<?php bloginfo('name'); ?>"/>
  <meta name="twitter:description" content="<?php echo esc_attr( get_bloginfo('description') ); ?>"/>
  <meta name="twitter:image"       content="https://educacionfinanciera.digital/imagenes/twitter-card.jpg"/>

  <!-- 8. Favicons -->
  <link rel="icon" href="https://educacionfinanciera.digital/favicon.ico" type="image/x-icon"/>
  <link rel="apple-touch-icon" href="https://educacionfinanciera.digital/apple-touch-icon.png"/>

  <?php
    // Importante: permite inyectar scripts y estilos de plugins y WP en general.
    wp_head();
  ?>
</head>
<body <?php body_class(); ?>>

<main>

  <!-- HERO -->
  <section class="hero">
    <div class="contenedor-hero">
      <div class="texto-hero">
        <h1>Curso de Educación Financiera & Construcción de Riqueza</h1>
        <p>Vas a aprender a controlar tu dinero, eliminar deudas y empezar a invertir</p>
        <!-- Botón de checkout -->
        <a
          href="https://pay.hotmart.com/I39278939V?ref=W87801197P&bid=1749671326326"
          class="btn-hero"
          target="_blank"
          rel="noopener noreferrer"
        >
          ¡Últimos días a USD 75!<br>
          Accedé hoy al curso y al software EXCLUSIVO
        </a>
      </div>
      <div class="imagen-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-1.png" alt="Persona escribiendo sobre finanzas">
      </div>
    </div>
  </section>


    <!-- SECCIÓN PROMO CARD -->
<section class="promo-card-section">
  <div class="promo-card">
    <div class="promo-info">
      <h2>¡Aprendé a manejar tu dinero hoy!</h2>
      <p class="promo-sub">Últimos días a <strong>USD 75</strong> 🔥</p>
      <ul class="promo-benefits">
        <li>📊 Creá presupuestos efectivos</li>
        <li>💰 Eliminá tus deudas paso a paso</li>
        <li>🚀 Multiplicá tus ahorros e inversiones</li>
      </ul>
      <a 
        href="https://pay.hotmart.com/I39278939V?ref=W87801197P" 
        class="btn-promo-card" 
        target="_blank"
        rel="noopener noreferrer"
      >
        Inscribite HOY por USD 75
      </a>
    </div>
    <div class="promo-visual">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-lapto.png" alt="Persona con laptop">
    </div>
  </div>
</section>




    <!-- MÉTODO RE-VI -->
<section class="metodo-revi">
  <div class="contenedor">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-2.png" alt="Método RE-VI" class="imagen-metodo">
    <h2>Método RE-VI</h2>
    <p>
      <strong>Nuestro método exclusivo RE-VI</strong> te guía paso a paso para
      <em>reprogramar tu mente financiera, visualizar tus objetivos</em> y
      <strong>aplicar estrategias reales de inversión</strong>.
    </p>
  </div>
</section>

 <!-- SECCIÓN ¿Qué vas a lograr? -->
<section class="logros">
  <div class="contenedor-logros">
    <h2 class="logros-titulo">¿Qué vas a lograr?</h2>
    <div class="logros-grid">
      <div class="logro-item">
        📊 Control de finanzas personales
      </div>
      <div class="logro-item">
        💲 Eliminación de deudas
      </div>
      <div class="logro-item">
        📈 Inversión paso a paso
      </div>
      <div class="logro-item">
        📚 Claridad económica
      </div>
    </div>
  </div>
</section>




    <!-- SECCIÓN “Curso para quienes quieren dejar de vivir al día” -->
<section class="curso-dia">
  <div class="contenedor">
    <h2>Curso para quienes quieren dejar de vivir al día</h2>
    <p>Vas a aprender a controlar tu dinero, eliminar deudas y empezar a invertir.</p>
    <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P" class="btn-promo-card" target="_blank" rel="noopener noreferrer">
      Inscribite ahora
    </a>
  </div>
</section>


<!-- SECCIÓN Ventajas del curso -->
<section class="ventajas-curso">
  <div class="contenedor-ventajas">
    <!-- Lista de ventajas -->
    <div class="ventajas-lista">
      <h2>Ventajas del curso</h2>
      <ul>
        <li>Más de 45 horas de curso</li>
        <li>Programas financieros y plantillas en Excel para su aprendizaje</li>
        <li>9 Módulos</li>
        <li>Clases de máximo 45 minutos</li>
        <li>Simplicidad al explicar los conceptos más complejos de la economía</li>
        <li>Ejercicios y ejemplos de cada concepto financiero</li>
        <li>Casos de estudio que involucran todo lo aprendido</li>
        <li>Recomendaciones según el vehículo de inversión</li>
        <li>Resolución de dudas a través de la plataforma</li>
        <li>Construcción de tablas de amortización</li>
        <li>Resumen al final de cada clase</li>
        <li>Puedes realizar el curso desde donde quieras y las veces que quieras</li>
        <li>Recomendaciones y consejos basados en experiencias</li>
        <li>Acceso de por vida</li>
        <li>Te aseguramos que contiene todo lo que necesitas para tener éxito en tu vida financiera</li>
      </ul>
    </div> 

    <!-- Imágenes ilustrativas -->
    <div class="ventajas-imagenes">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-3.png" alt="App móvil">
    </div> 

    <!-- Botón abajo de todo -->
    <div class="ventajas-boton">
      <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P&bid=1749671326326"
         class="btn-inscribite"
         target="_blank"
         rel="noopener noreferrer">
        Inscribite ahora
      </a>
    </div>
  </div>
</section>


<!-- SECCIÓN PROGRAMA FINANCIERO ANALYTIQ -->
<section class="programa-analyt">
  <div class="contenedor-programa">
    <h2 class="titulo-programa">PROGRAMA FINANCIERO ANALYTIQ</h2>
    <p class="descripcion-programa">
      ANALYTIQ es un programa financiero automático diseñado por el equipo de
      Sociedaddecaballeros &amp; Comojugarmonopolio con el cual podrás analizar
      y entender mucho mejor los conceptos económicos &amp; financieros. Este
      programa es exclusivo para los suscriptores del curso y se enseñará a
      manejar en su totalidad a lo largo del curso. Tiene un alto nivel de
      programación incluyendo su panel de navegación y su rapidez para entregar
      cálculos financieros. Funciona con cualquier sistema operativo.
      Fundamental para cualquier inversor en general.
    </p>
    <div class="imagen-programa">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-5.png" alt="Captura Analytig en monitor">
    </div> 
  </div> 
  <!-- NUEVO: galería de capturas -->
  <div class="galeria-programa">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-6.png" alt="Interfaz de análisis de tasas">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-7.png" alt="Equivalencia de tasas">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-8.png" alt="Cálculo de TIR y VPN">
  </div>
</section>


<!-- SECCIÓN DE SELLOS GARANTÍA -->
<section class="sellos-garantia">
  <h2>Sellos de Garantía</h2>
  <div class="contenedor-sellos">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-14.png" alt="7 días de garantía">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-15.png" alt="100% seguro">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img-16.png" alt="Privacidad garantizada">
  </div>
</section>

<!-- SECCIÓN “Características” -->
<section class="features">
  <div class="features-container">
    <div class="feature-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-priv.png" alt="Privacidad">
      <div class="feature-text">
        <h3>Privacidad</h3>
        <p>Tu información está 100% segura</p>
      </div>
    </div>
    <div class="feature-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-seg.png" alt="Compra segura">
      <div class="feature-text">
        <h3>Compra segura</h3>
        <p>Ambiente seguro y autenticado</p>
      </div>
    </div>
    <div class="feature-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-ema.png" alt="Entrega por email">
      <div class="feature-text">
        <h3>Entrega por email</h3>
        <p>Acceso al producto entregado por email</p>
      </div>
    </div>
    <div class="feature-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-compr_seg.png" alt="Contenido aprobado">
      <div class="feature-text">
        <h3>Contenido aprobado</h3>
        <p>100% revisado y aprobado</p>
      </div>
    </div>
  </div>
</section>


<!-- SECCIÓN CERTIFICADO -->
<section class="certificado-section">
  <div class="contenedor-certificado">
    <h2>Al finalizar recibís un certificado con tu nombre. Reconocé tu avance.</h2>
    <div class="certificado-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-cert.png" alt="Certificado de finalización">
    </div>
  </div>
</section>






 <!-- SECCIÓN TESTIMONIOS AVANZADOS -->
<section class="testimonios-avanzados">
  <h2 class="titulo-testimonios">TESTIMONIOS</h2>
  <div class="contenedor">
    <!-- Testimonio 1 -->
    <div class="card-testimonio">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-test-1.jpeg" alt="Oscar Colombo">
      <h3>Oscar Colombo</h3>
      <div class="stars">★★★★★</div>
      <p>“Estoy haciendo el curso, voy por el segundo módulo, en la clase 16 y es demasiada información valiosa. Antes de este pagué un curso de $990 y no era ni la tercera parte de este. Con el curso de ustedes realmente estoy aprendiendo. Excelente curso.”</p>
      <span>Oscar, 32</span>
    </div>
    <!-- Testimonio 2 -->
    <div class="card-testimonio">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-test2.jpeg" alt="Gabriela Diaz">
      <h3>Gabriela Diaz</h3>
      <div class="stars">★★★★★</div>
      <p>“Buenos días. Primero quiero agradecerles por la educación financiera que brindan cada día. Quiero comentarles que ya adquirí mi regalo de año nuevo el cual consiste en el Curso de Mr. Monopoly. Gracias y feliz año nuevo!”</p>
      <span>Gabriela, 28</span>
    </div>
    <!-- Testimonio 3 -->
    <div class="card-testimonio">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-test-3.jpeg" alt="Félix Suarez">
      <h3>Félix Suarez</h3>
      <div class="stars">★★★★★</div>
      <p>“Acabo de adquirir su curso!! Me llegó toda la información a mi correo de inmediato. Estoy muy emocionado. ¡Mil gracias!”</p>
      <span>Félix, 30</span>
    </div>
  </div>
</section>


<!-- SECCIÓN MÓDULOS DEL CURSO -->
<section class="modulos-curso">
  <div class="contenedor-modulos">
    <h2>
      Nuestros módulos están diseñados para que entiendas desde cero, aunque nunca hayas leído un libro de finanzas. Aprendé a tu ritmo, desde donde estés.
    </h2>
    <div class="grid-modulos">
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-modulo1.png" alt="Módulo 1">
        <span>Módulo 1</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod2.png" alt="Módulo 2">
        <span>Módulo 2</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod3.png" alt="Módulo 3">
        <span>Módulo 3</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod4.png" alt="Módulo 4">
        <span>Módulo 4</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod5.png" alt="Módulo 5">
        <span>Módulo 5</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod5b.png" alt="Módulo 5 extra">
        <span>Módulo 5</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod6.png" alt="Módulo 6">
        <span>Módulo 6</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod7.png" alt="Módulo 7">
        <span>Módulo 7</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod8.png" alt="Módulo 8">
        <span>Módulo 8</span>
      </div>
      <div class="modulo-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-mod9.png" alt="Módulo 9">
        <span>Módulo 9</span>
      </div>
    </div>
  </div>
</section>


    <!-- CTA CON IMAGEN A LA DERECHA -->
<section class="cta-con-imagen">
  <div class="contenedor-cta">
    <div class="texto-cta">
      <h2>Tomá el control de tu dinero</h2>
      <p>Curso online práctico con todo lo que no te enseñó la escuela</p>
      <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P" class="btn-promo-card" target="_blank" rel="noopener">
        Inscribite ahora
      </a>
    </div>
    <div class="imagen-cta">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-9.png" alt="Curso de educación financiera">
    </div>
  </div>
</section>

<section class="cta-final" style="background: #104c2f; padding: 60px 20px; color: #fff; text-align: center;">
  <div style="max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 2rem; margin-bottom: 20px;">
      💥 ¡Tomá acción hoy!
    </h2>
    <p style="font-size: 1.1rem; margin-bottom: 30px;">
      El curso más completo de educación financiera + acceso exclusivo al software AnalytIQ. <br>
      <strong>Oferta limitada a USD 75</strong> – cupos exclusivos.
    </p>
    <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P" class="btn-promo-card" target="_blank" rel="noopener">
      🔥 Inscribite ahora – Quedan pocos lugares
    </a>
  </div>
</section>

  
 </main> 

 <footer class="site-footer">
  <div class="footer-contenedor">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/img-10.png" alt="Logo">
    </div>
    <div class="footer-links">
      <a href="https://wa.me/5493518185769?text=¡Hola!%20Quiero%20más%20info%20sobre%20el%20curso" class="btn-footer-contacto">Contacto</a>
    </div>
    <div class="footer-redes">
      <a href="https://www.facebook.com/profile.php?id=61552809742760" target="_blank" rel="noopener">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-11.png" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/finanzasinteligente7/" target="_blank" rel="noopener">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-13.png" alt="Instagram">
      </a>
    </div>
  </div>
  <div class="footer-copyright">
    &copy; 2025 — Todos los derechos reservados.
  </div>
</footer> 

<script>
  // 1. Aseguramos que el Pixel base ya cargó
  if (typeof fbq === 'function') {
    // 2. Página vista
    fbq('track', 'PageView');

    // 3. Opción: contamos un Lead en cada visita
    fbq('track', 'Lead');

    // 4. Inician el checkout al clicar cualquier CTA de compra
    document.querySelectorAll(
      '.btn-hero, .btn-promo-card, .btn-dia, .btn-inscribite, .btn-cta, .btn-final-cta'
    ).forEach(btn => {
      btn.addEventListener('click', () => {
        fbq('track', 'InitiateCheckout');
      });
    });

    // 5. Registra la compra cuando hacen click en el BOTÓN FINAL
    document.querySelectorAll('.btn-final-cta, .btn-promo-card').forEach(btn => {
      btn.addEventListener('click', () => {
        fbq('track', 'Purchase', {
          value: 75.00,    // ajustá al precio real si cambia
          currency: 'USD'
        });
      });
    });
  }
</script>

<?php wp_footer(); ?>


</body>
</html>


