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

  <!-- Meta Pixel Code (head) -->
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

 <!-- HERO PERSONALIZADO -->
<section class="hero-moderno">
  <div class="hero-inner">
    
    <!-- Titular y texto -->
    <h1 class="hero-title">Tomá el control total de tu dinero hoy</h1>
    <p class="hero-subtitle">
      Aprende a eliminar deudas, organizar tu presupuesto e invertir desde cero.  
      Incluye software exclusivo, garantía de 7 días y certificación.
    </p>
    <!-- Imagen principal -->
    <div class="hero-visual">
      <img src="img/img-2.png" alt="Laptop + App móvil">
    </div>
    <!-- Call to action -->
    <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
       target="_blank"
       rel="noopener noreferrer"
       class="hero-cta">
      ¡Accedé ahora por USD 75!<br>
      <small>Últimos días con precio promocional</small>
    </a>
    <!-- Rating -->
    <div class="hero-rating">
      <span class="stars">★★★★★</span>
      <span class="rating-text">+1.200 alumnos ya transformaron su economía</span>
    </div>
  </div>
</section> 

<!-- SECCIÓN “El Método RE-VI” MODERNA -->
<section class="metodo-revi-moderno">
  <div class="container">
    <!-- Título principal -->
    <h2 class="metodo-title">El Método <span>RE-VI</span></h2>
    <p class="metodo-subtitle">(Reeducación Financiera + <strong>Visión de Riqueza</strong>)</p>

    <!-- Pasos -->
    <div class="metodo-steps">
      <!-- Paso 1 -->
      <div class="step-item">
        <img src="img/img-3.png" alt="Paso 1: Reeducación Financiera">
        <h3>Paso 1</h3>
        <h4>Reeducación Financiera</h4>
        <p>Entendé por qué el sistema no te enseñó a manejar el dinero. Acá comenzás a reprogramar tu mentalidad.</p>
      </div>
      <div class="step-arrow">→</div>

      <!-- Paso 2 -->
      <div class="step-item">
        <img src="img/img-4.png" alt="Paso 2: Evaluación Personal">
        <h3>Paso 2</h3>
        <h4>Evaluación Personal</h4>
        <p>Diagnostica tu situación actual: ingresos, deudas y gastos.</p>
      </div>
      <div class="step-arrow">→</div>

      <!-- Paso 3 -->
      <div class="step-item">
        <img src="img/img-5.png" alt="Paso 3: Construcción de Riqueza">
        <h3>Paso 3</h3>
        <h4>Sistema de Construcción de Riqueza</h4>
        <p>Aplicás nuestro sistema validado: presupuesto, inversión y escalamiento.</p>
      </div>
      <div class="step-arrow">→</div>

      <!-- Paso 4 -->
      <div class="step-item">
        <img src="img/img-6.png" alt="Paso 4: Visión de Largo Plazo">
        <h3>Paso 4</h3>
        <h4>Visión de Largo Plazo</h4>
        <p>Creás un plan realista para multiplicar tu patrimonio y salir del ciclo de escasez.</p>
      </div>
    </div>
  </div>
</section> 

<!-- SECCIÓN “¿Qué lograste en los últimos 10 años…” -->
<section class="section-intro">
  <div class="container">
    <div class="intro-content">
      <!-- Texto principal -->
      <div class="intro-text">
        <h2 class="intro-title">¿Qué lograste en los últimos <span>10 años</span> con tu dinero?</h2>
        <p class="intro-subtitle">
          ¿Sentís que trabajás cada vez más, pero no ves progreso financiero?
          Es momento de dejar de improvisar y tomar el control.
        </p>
        <ul class="intro-list">
          <li>✔ Seguiste los consejos tradicionales… y no funcionaron</li>
          <li>✔ Aumentaste tus ingresos, pero también tus deudas</li>
          <li>✔ Te esforzaste, pero el dinero nunca alcanza</li>
          <li>✔ ¿Y si el problema no sos vos, sino el sistema?</li>
        </ul>
        <p class="intro-cta"><strong>No te faltó esfuerzo. Te faltó educación financiera.</strong></p>
      </div>

      <!-- Imagen ilustrativa -->
      <div class="intro-image">
        <img src="img/img-7.png"
             alt="Persona pensando en finanzas">
      </div>
    </div>
  </div>
</section> 

<!-- SECCIÓN “Más de 600 personas…” -->
<section class="testimonios-alt">
  <div class="container">
    <!-- Título + subtítulo -->
    <header class="testimonios-alt__header">
      <h2>Más de 600 personas ya comenzaron su camino hacia la libertad financiera</h2>
      <p>Ellos también empezaron sin saber nada de finanzas… y hoy están organizando sus números, eliminando deudas y aprendiendo a invertir.</p>
    </header>

    <!-- Lista de cards -->
    <div class="testimonios-alt__grid">
      <!-- Card 1: imagen izquierda -->
      <div class="ta-card">
        <div class="ta-card__img">
          <img src="img/img-test2.jpeg" alt="Lucía G.">
        </div>
        <div class="ta-card__body">
          <p class="ta-card__text">
            Con este curso entendí por primera vez cómo manejar mi plata. Ya terminé el Excel y pude recortar gastos que no veía.
          </p>
          <p class="ta-card__author">Lucía G., emprendedora – Argentina</p>
        </div>
      </div>

      <!-- Card 2: imagen derecha -->
      <div class="ta-card">
        <div class="ta-card__img">
          <img src="img/img-test-1.jpeg" alt="Carlos R.">
        </div>
        <div class="ta-card__body">
          <p class="ta-card__text">
            Me ayudó a ordenar mis ingresos, pagar deudas y hasta empecé a ahorrar e invertir. Súper claro y práctico.
          </p>
          <p class="ta-card__author">Carlos R., diseñador freelance – México</p>
        </div>
      </div>

      <!-- Card 3: imagen izquierda -->
      <div class="ta-card">
        <div class="ta-card__img">
          <img src="img/img-test-3.jpeg" alt=" Carlos V.">
        </div>
        <div class="ta-card__body">
          <p class="ta-card__text">
            No soy bueno con los números, pero el paso a paso del curso me hizo sentir seguro. Lo recomiendo totalmente.
          </p>
          <p class="ta-card__author"> Walter., Gerente de planta – Colombia</p>
        </div>
      </div>
    </div>
  </div>
</section> 



    <!-- SECCIÓN BENEFICIOS -->
<section class="beneficios">
  <div class="beneficios__inner container">
    <!-- Título y subtítulo -->
    <header class="beneficios__header">
      <h2 class="beneficios__titulo">
        Tomá el control total de tu dinero y construí tu libertad financiera
      </h2>
      <p class="beneficios__subtitulo">
        Aprendé a salir de deudas, organizar tu presupuesto, ahorrar, invertir desde cero y usar herramientas que trabajan por vos.
      </p>
    </header>

    <!-- Grid de iconos + texto -->
    <ul class="beneficios__grid">
      <li class="beneficio-item">
        <img class="beneficio-item__icon" src="img/img-8.png" alt="Eliminar deudas">
        <p class="beneficio-item__texto">Eliminar tus deudas sin estrés</p>
      </li>
      <li class="beneficio-item">
        <img class="beneficio-item__icon" src="img/img-9.png" alt="Ahorrar con objetivos">
        <p class="beneficio-item__texto">Ahorrar con objetivos claros</p>
      </li>
      <li class="beneficio-item">
        <img class="beneficio-item__icon" src="img/img-10.png" alt="Mentalidad financiera">
        <p class="beneficio-item__texto">Mentalidad financiera para toda la vida</p>
      </li>
      <li class="beneficio-item">
        <img class="beneficio-item__icon" src="img/img-11.png" alt="Organizar finanzas">
        <p class="beneficio-item__texto">Organizar tus finanzas en un solo lugar</p>
      </li>
      <li class="beneficio-item">
        <img class="beneficio-item__icon" src="img/img-12.png" alt="Invertir desde cero">
        <p class="beneficio-item__texto">Invertir desde cero con estrategias seguras</p>
      </li>
      <li class="beneficio-item">
  <img
    class="beneficio-item__icon"
    src="img/img-13.png"
    alt="Software exclusivo">
  <p class="beneficio-item__texto">
    Acceso a software exclusivo para automatizar todo
  </p>
</li>
    </ul>

    <!-- CTA -->
    <div class="beneficios__cta">
      <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
       target="_blank"
       rel="noopener noreferrer"
       class="btn-beneficios">
      
        Quiero cambiar mi realidad financiera
      </a>
    </div>
  </div>
</section>

<section class="llevar-section">
  <div class="container">
    <h2 class="llevar-title">
      Esto es lo que te llevás al inscribirte hoy:
    </h2>

    <ul class="llevar-list">
      <li class="llevar-item">
        <img
  class="llevar-icon"
  src="img/img-14.png"
  alt="Acceso inmediato al curso y software exclusivo">
        />
        <p class="llevar-text">
          Acceso inmediato al curso completo y al software exclusivo
        </p>
      </li>

      <li class="llevar-item">
        <img
  class="llevar-icon"
  src="img/img-15.png"
  alt="Método paso a paso">
        />
        <p class="llevar-text">
          Método paso a paso probado y fácil de aplicar
        </p>
      </li>

      <li class="llevar-item">
        <img
  class="llevar-icon"
  src="img/img-16.png"
  alt="Resultados desde el primer mes">
        />
        <p class="llevar-text">
          Resultados desde el primer mes con compromiso
        </p>
      </li>

      <li class="llevar-item">
        <img
          class="llevar-icon"
          src="img/img-17.png"
          alt="Certificación digital">
        
        <p class="llevar-text">
          Certificación digital al finalizar
        </p>
      </li>

      <li class="llevar-item">
        <img
          class="llevar-icon"
          src="img/img-18.png"
          alt="Garantía de 7 días">
        
        <p class="llevar-text">
          Garantía de satisfacción de 7 días
        </p>
      </li>

      <li class="llevar-item">
        <img
          class="llevar-icon"
          src="img/img-19.png"
          alt="Ideal para principiantes">
        
        <p class="llevar-text">
          Ideal para personas sin conocimientos
        </p>
      </li>
    </ul>

    <a
      href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
      class="btn-llevar"
      target="_blank"
      rel="noopener noreferrer"
    >
      ¡Quiero acceder a todos los beneficios ahora!
    </a>
  </div>
</section> 

<!-- Sección “Inscribite con total confianza”  -->

<section class="confianza-section">
  <div class="confianza-container">

    <h2 class="confianza-title">Inscribite con total confianza!</h2>

    <div class="confianza-grid">
      <div class="confianza-item">
        <img
          src="img/img-20.png"
          alt="Garantía 100% segura"
          class="confianza-icon">
        
        <h3 class="confianza-item__title">Garantía 100% segura</h3>
        <p class="confianza-item__text">
          Tu inversión está protegida con una garantía de 7 días.
        </p>
      </div>
      <div class="confianza-item">
        <img
          src="img/img-21.png"
          alt="Privacidad protegida"
          class="confianza-icon">
        
        <h3 class="confianza-item__title">Privacidad protegida</h3>
        <p class="confianza-item__text">
          Tu información personal y de pago está cifrada.
        </p>
      </div>
      <div class="confianza-item">
        <img
          src="img/img-22.png"
          alt="Entrega inmediata"
          class="confianza-icon">
        
        <h3 class="confianza-item__title">Entrega inmediata</h3>
        <p class="confianza-item__text">
          Accedé al curso + software apenas te inscribís.
        </p>
      </div>
      <div class="confianza-certificado">
        <img
          src="img/img-cert.png"
          alt="Certificado oficial"
          class="confianza-certificado__img">
        
      </div>
    </div>

    <div class="confianza-footer">
      <blockquote class="confianza-testimonio">
        “Con mi certificado conseguí +30 % más de credibilidad frente a mis clientes.”
        <footer>— Luciana R., Alumna 2024</footer>
      </blockquote>

      <a
        href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
        class="btn-confianza"
        target="_blank"
        rel="noopener noreferrer"
      >
        Accedé ahora al curso
      </a>
    </div>

  </div>
</section> 

<!-- SECCIÓN: Aprenderás paso a paso -->
<section class="paso-paso-section">
  <div class="container">
    <h2 class="paso-paso-title">Esto es lo que aprenderás paso a paso</h2>
    <div class="paso-paso-grid">
      <!-- Módulo 1 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-modulo1.png" alt="Presupuesto Inteligente">
        <div class="paso-text">
          <h3>Módulo 1: Las Finanzas no son tu enemigo</h3>
          <p class="paso-sub">Cultura Financiera ✔️</p>
        </div>
      </div>
      <!-- Módulo 2 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod2.png" alt="Deudas Bajo Control">
        <div class="paso-text">
          <h3>Módulo 2: Evalua tu situacion Financiera</h3>
          <p class="paso-sub">Salí del rojo rápido y sin culpa ✔️</p>
        </div>
      </div>
      <!-- Módulo 3 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod3.png" alt="Mentalidad Ganadora">
        <div class="paso-text">
          <h3>Módulo 3: Planeacion Financiera </h3>
          <p class="paso-sub">Planificá y alcanzá tus objetivos✔️</p>
        </div>
      </div>
      <!-- Módulo 4 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod4.png" alt="Metas de Ahorro">
        <div class="paso-text">
          <h3>Módulo 4: Conceptos finacieros fundamentales</h3>
          <p class="paso-sub"> Rentabilidad , riesgo , liquidez ✔️</p>
        </div>
      </div>
      <!-- Módulo 5 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod5.png" alt="Herramientas Estratégicas">
        <div class="paso-text">
          <h3>Módulo 5: Los numeros de tu inversion</h3>
          <p class="paso-sub">El riesgo viene de no saber lo que estas haciendo ✔️</p>
        </div>
      </div>
      <!-- Módulo 6 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod6.png" alt="Inversiones Inteligentes">
        <div class="paso-text">
          <h3>Módulo 6: Inversiones Inteligentes</h3>
          <p class="paso-sub">Hacé crecer tu plata desde cero ✔️</p>
        </div>
      </div>
      <!-- Módulo 7 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod7.png" alt="Módulo 7">
        <div class="paso-text">
          <h3>Impuestos</h3>
          <p class="paso-sub"> Conosca los impuestos que paga ✔️</p>
        </div>
      </div>
      <!-- Módulo 8 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod8.png" alt="Módulo 8">
        <div class="paso-text">
          <h3> Contabilidad </h3>
          <p class="paso-sub"> 12 principios basicos de la contabilidad ✔️</p>
        </div>
      </div>
      <!-- Módulo 9 -->
      <div class="paso-item">
        <img class="paso-icon" src="img/img-mod9.png" alt="Plan de Libertad">
        <div class="paso-text">
          <h3>Pensá como los que la construyen</h3>
          <p class="paso-sub">Descubrí por qué los caminos tradicionales no funcionan, cómo piensan los ricos y qué sistemas utilizan para multiplicar su dinero sin depender de un empleo. ✔️</p>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="paso-paso-cta">
      <p>¡Transformá tus finanzas desde hoy!<br>  
        Cupos limitados • Acceso inmediato • Garantía 7 días<br>
        Pago seguro + certificado oficial incluido
      </p> 
      <a href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
       target="_blank"
       rel="noopener noreferrer"
       class="btn-paso-cta">
     
        Inscribirme ahora por USD 75
      </a>
    </div>
  </div>
</section> 

<footer class="contacto-footer">
  <div class="container contacto-inner">
    <h2 class="contacto-title">
      ¿Dudas o consultas?<br>
      <span>Estamos para ayudarte</span>
    </h2>

    <a 
      href="https://wa.me/5493518185769?text=¡Hola!%20Quiero%20más%20info"
      class="btn-whatsapp"
      target="_blank" rel="noopener"
    >
      <img 
        src="img/img-whatsapp.png" 
        alt="WhatsApp" 
        class="whatsapp-icon">
      
      Contactar por WhatsApp
    </a>

    <div class="footer-redes">
  <a href="https://facebook.com/tu-perfil" target="_blank" rel="noopener">
    <img src="img/img-fb.png"
         alt="Facebook" width="32" height="32">
  </a>
  <a href="https://instagram.com/tu-perfil" target="_blank" rel="noopener">
    <img src="img/img-ig.png"
         alt="Instagram" width="32" height="32">
  </a>
</div>

    <p class="footer-follow">
      Seguínos para más contenido gratuito y novedades.
    </p>

    <p class="footer-copy">
      &copy; 2025 Educación Financiera Digital. Todos los derechos reservados.
    </p>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  if (typeof fbq !== 'function') return;

  // 1) Trackeamos sólo InitiateCheckout al hacer click en tu CTA de compra
  document.querySelectorAll(
    '.btn-hero, .btn-promo-card, .btn-dia, .btn-inscribite, .btn-cta, .btn-final-cta'
  ).forEach(btn => {
    btn.addEventListener('click', () => {
      fbq('track', 'InitiateCheckout');
    });
  });

  // 2) Sólo cuando la URL contenga "/thanks" disparamos el evento Purchase
  if ( window.location.href.indexOf('/thanks') !== -1 ) {
    // Las macros {{PROD_PRICE}} y {{PROD_CURRENCY}} Hotmart las sustituye en el thank-you
    fbq('track', 'Purchase', {
      value: {{PROD_PRICE}},
      currency: '{{PROD_CURRENCY}}'
    });
  }
});
</script>

<?php wp_footer(); ?>
<script>
  // esperamos a que todo el Pixel esté listo
  window.addEventListener('load', () => {
    // comprueba que fbq existe
    if (typeof fbq !== 'function') {
      console.warn('fbq no está definido – revisa tu Meta Pixel Code'); 
      return;
    }

    // debug: confirmamos que estamos aquí
    console.log('📦 Pixel listo, adjuntando listener de click…');

    // array de selectores de tus botones de checkout
    const selectors = [
      '.btn-hero',
      '.btn-promo-card',
      '.btn-dia',
      '.btn-inscribite',
      '.btn-cta',
      '.btn-final-cta'
    ];

    // buscamos todos los botones
    const botones = document.querySelectorAll(selectors.join(', '));

    if (!botones.length) {
      console.warn('⚠️ No encontré botones con esos selectores:', selectors);
      return;
    }
    console.log(`✅ Encontrados ${botones.length} botones de checkout`);

    botones.forEach(btn => {
      btn.addEventListener('click', () => {
        console.log('🔔 Click en checkout – disparo InitiateCheckout');
        fbq('track', 'InitiateCheckout');
      });
    });
  });
</script>
</body>
</html>








