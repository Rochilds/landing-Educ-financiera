<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- 1. Charset y viewport -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- 2. Título y descripción SEO -->
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">

  <!-- 3. URL canónica -->
  <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>">

  <!-- 4. Open Graph -->
  <meta property="og:title"       content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>">
  <meta property="og:description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
  <meta property="og:image"       content="<?php echo esc_url( get_template_directory_uri() . '/imagenes/og-image.jpg' ); ?>">
  <meta property="og:url"         content="<?php echo esc_url( home_url( '/' ) ); ?>">
  <meta property="og:type"        content="website">
  <meta property="og:site_name"   content="<?php bloginfo( 'name' ); ?>">

  <!-- 5. Twitter Cards -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
  <meta name="twitter:image"       content="<?php echo esc_url( get_template_directory_uri() . '/imagenes/twitter-card.jpg' ); ?>">

  <!-- 6. Favicons -->
  <link rel="icon"             href="<?php echo esc_url( home_url( '/favicon.ico' ) ); ?>" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/apple-touch-icon.png' ); ?>">

  <!-- 7. Tipografías externas -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <!-- 8. Hoja de estilos principal -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/style.css' ); ?>">

  <!-- 9. Meta Pixel (head) -->
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
    }(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1794185348172977');
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1794185348172977&ev=PageView&noscript=1"/>
  </noscript>

  <?php
    // Permite a WP y plugins inyectar sus propios scripts/estilos.
    wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <?php get_header(); ?>

<main>

  <!-- HERO PERSONALIZADO -->
  <section class="hero-moderno">
    <div class="hero-inner">
      <h1 class="hero-title">Tomá el control total de tu dinero hoy</h1>
      <p class="hero-subtitle">
        Aprende a eliminar deudas, organizar tu presupuesto e invertir desde cero.
        Incluye software exclusivo, garantía de 7 días y certificación.
      </p>
      <div class="hero-visual">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/img-2.png"
          alt="Laptop + App móvil"
          loading="lazy"
        >
      </div>
      <a
        href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
        class="hero-cta"
        target="_blank"
        rel="noopener noreferrer"
      >
        ¡Accedé ahora por USD 75!<br>
        <small>Últimos días con precio promocional</small>
      </a>
      <div class="hero-rating">
        <span class="stars">★★★★★</span>
        <span class="rating-text">+1.200 alumnos ya transformaron su economía</span>
      </div>
    </div>
  </section>


  <!-- MÉTODO RE-VI MODERNO -->
  <section class="metodo-revi-moderno">
    <div class="container">
      <h2 class="metodo-title">El Método <span>RE-VI</span></h2>
      <p class="metodo-subtitle">(Reeducación Financiera + <strong>Visión de Riqueza</strong>)</p>
      <div class="metodo-steps">
        <div class="step-item">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-3.png"
            alt="Paso 1: Reeducación Financiera"
            loading="lazy"
          >
          <h3>Paso 1</h3>
          <h4>Reeducación Financiera</h4>
          <p>Entendé por qué el sistema no te enseñó a manejar el dinero. Acá comenzás a reprogramar tu mentalidad.</p>
        </div>
        <div class="step-arrow">→</div>
        <div class="step-item">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-4.png"
            alt="Paso 2: Evaluación Personal"
            loading="lazy"
          >
          <h3>Paso 2</h3>
          <h4>Evaluación Personal</h4>
          <p>Diagnostica tu situación actual: ingresos, deudas y gastos.</p>
        </div>
        <div class="step-arrow">→</div>
        <div class="step-item">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-5.png"
            alt="Paso 3: Construcción de Riqueza"
            loading="lazy"
          >
          <h3>Paso 3</h3>
          <h4>Sistema de Construcción de Riqueza</h4>
          <p>Aplicás nuestro sistema validado: presupuesto, inversión y escalamiento.</p>
        </div>
        <div class="step-arrow">→</div>
        <div class="step-item">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-6.png"
            alt="Paso 4: Visión de Largo Plazo"
            loading="lazy"
          >
          <h3>Paso 4</h3>
          <h4>Visión de Largo Plazo</h4>
          <p>Creás un plan realista para multiplicar tu patrimonio y salir del ciclo de escasez.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- TESTIMONIOS -->
  <section class="testimonios-alt">
    <div class="container">
      <header class="testimonios-alt__header">
        <h2>Más de 600 personas ya comenzaron su camino hacia la libertad financiera</h2>
        <p>Ellos también empezaron sin saber nada de finanzas… y hoy están organizando sus números, eliminando deudas y aprendiendo a invertir.</p>
      </header>
      <div class="testimonios-alt__grid">
        <div class="ta-card">
          <div class="ta-card__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img-test2.jpeg" alt="Lucía G." loading="lazy">
          </div>
          <div class="ta-card__body">
            <p class="ta-card__text">Con este curso entendí por primera vez cómo manejar mi plata. Ya terminé el Excel y pude recortar gastos que no veía.</p>
            <p class="ta-card__author">Lucía G., emprendedora – Argentina</p>
          </div>
        </div>
        <div class="ta-card">
          <div class="ta-card__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img-test-1.jpeg" alt="Carlos R." loading="lazy">
          </div>
          <div class="ta-card__body">
            <p class="ta-card__text">Me ayudó a ordenar mis ingresos, pagar deudas y hasta empecé a ahorrar e invertir. Súper claro y práctico.</p>
            <p class="ta-card__author">Carlos R., diseñador freelance – México</p>
          </div>
        </div>
        <div class="ta-card">
          <div class="ta-card__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img-test-3.jpeg" alt="Walter V." loading="lazy">
          </div>
          <div class="ta-card__body">
            <p class="ta-card__text">No soy bueno con los números, pero el paso a paso del curso me hizo sentir seguro. Lo recomiendo totalmente.</p>
            <p class="ta-card__author">Walter V., gerente de planta – Colombia</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- BENEFICIOS -->
  <section class="beneficios">
    <div class="beneficios__inner container">
      <header class="beneficios__header">
        <h2 class="beneficios__titulo">Tomá el control total de tu dinero y construí tu libertad financiera</h2>
        <p class="beneficios__subtitulo">Aprendé a salir de deudas, organizar tu presupuesto, ahorrar, invertir desde cero y usar herramientas que trabajan por vos.</p>
      </header>
      <ul class="beneficios__grid">
        <?php 
          $items = [
            ['icon'=>'img-8.png','text'=>'Eliminar tus deudas sin estrés'],
            ['icon'=>'img-9.png','text'=>'Ahorrar con objetivos claros'],
            ['icon'=>'img-10.png','text'=>'Mentalidad financiera para toda la vida'],
            ['icon'=>'img-11.png','text'=>'Organizar tus finanzas en un solo lugar'],
            ['icon'=>'img-12.png','text'=>'Invertir desde cero con estrategias seguras'],
            ['icon'=>'img-13.png','text'=>'Acceso a software exclusivo para automatizar todo'],
          ];
          foreach($items as $item): ?>
          <li class="beneficio-item">
            <img
              class="beneficio-item__icon"
              src="<?php echo get_template_directory_uri() . '/img/' . $item['icon']; ?>"
              alt="<?php echo esc_attr($item['text']); ?>"
              loading="lazy"
            >
            <p class="beneficio-item__texto"><?php echo esc_html($item['text']); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="beneficios__cta">
        <a
          href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
          class="btn-beneficios"
          target="_blank"
          rel="noopener noreferrer"
        >
          Quiero cambiar mi realidad financiera
        </a>
      </div>
    </div>
  </section>


  <!-- LO QUE TE LLEVAS -->
  <section class="llevar-section">
    <div class="container">
      <h2 class="llevar-title">Esto es lo que te llevás al inscribirte hoy:</h2>
      <ul class="llevar-list">
        <?php 
          $leads = [
            ['img'=>'img-14.png','text'=>'Acceso inmediato al curso completo y al software exclusivo'],
            ['img'=>'img-15.png','text'=>'Método paso a paso probado y fácil de aplicar'],
            ['img'=>'img-16.png','text'=>'Resultados desde el primer mes con compromiso'],
            ['img'=>'img-17.png','text'=>'Certificación digital al finalizar'],
            ['img'=>'img-18.png','text'=>'Garantía de satisfacción de 7 días'],
            ['img'=>'img-19.png','text'=>'Ideal para personas sin conocimientos'],
          ];
          foreach($leads as $lead): ?>
          <li class="llevar-item">
            <img
              class="llevar-icon"
              src="<?php echo get_template_directory_uri() . '/img/' . $lead['img']; ?>"
              alt="<?php echo esc_attr($lead['text']); ?>"
              loading="lazy"
            >
            <p class="llevar-text"><?php echo esc_html($lead['text']); ?></p>
          </li>
        <?php endforeach; ?>
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


  <!-- INSCRIBITE CON CONFIANZA -->
  <section class="confianza-section">
    <div class="confianza-container">
      <h2 class="confianza-title">Inscribite con total confianza!</h2>
      <div class="confianza-grid">
        <?php 
          $certs = [
            ['img'=>'img-20.png','title'=>'Garantía 100% segura','text'=>'Tu inversión está protegida con una garantía de 7 días.'],
            ['img'=>'img-21.png','title'=>'Privacidad protegida','text'=>'Tu información personal y de pago está cifrada.'],
            ['img'=>'img-22.png','title'=>'Entrega inmediata','text'=>'Accedé al curso + software apenas te inscribís.'],
          ];
          foreach($certs as $c): ?>
          <div class="confianza-item">
            <img
              src="<?php echo get_template_directory_uri() . '/img/' . $c['img']; ?>"
              alt="<?php echo esc_attr($c['title']); ?>"
              class="confianza-icon"
              loading="lazy"
            >
            <h3 class="confianza-item__title"><?php echo esc_html($c['title']); ?></h3>
            <p class="confianza-item__text"><?php echo esc_html($c['text']); ?></p>
          </div>
        <?php endforeach; ?>
        <div class="confianza-certificado">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-cert.png"
            alt="Certificado oficial"
            class="confianza-certificado__img"
            loading="lazy"
          >
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


  <!-- APRENDERÁS PASO A PASO -->
  <section class="paso-paso-section">
    <div class="container">
      <h2 class="paso-paso-title">Esto es lo que aprenderás paso a paso</h2>
      <div class="paso-paso-grid">
        <?php 
          $modules = [
            ['img'=>'img-modulo1.png','title'=>'Módulo 1: Las Finanzas no son tu enemigo','sub'=>'Cultura Financiera ✔️'],
            ['img'=>'img-mod2.png','title'=>'Módulo 2: Evalúa tu situación financiera','sub'=>'Salí del rojo rápido y sin culpa ✔️'],
            ['img'=>'img-mod3.png','title'=>'Módulo 3: Planeación Financiera','sub'=>'Planificá y alcanzá tus objetivos ✔️'],
            ['img'=>'img-mod4.png','title'=>'Módulo 4: Conceptos financieros fundamentales','sub'=>'Rentabilidad, riesgo, liquidez ✔️'],
            ['img'=>'img-mod5.png','title'=>'Módulo 5: Los números de tu inversión','sub'=>'El riesgo viene de no saber lo que estás haciendo ✔️'],
            ['img'=>'img-mod6.png','title'=>'Módulo 6: Inversiones Inteligentes','sub'=>'Hacé crecer tu plata desde cero ✔️'],
            ['img'=>'img-mod7.png','title'=>'Módulo 7: Impuestos','sub'=>'Conocé los impuestos que pagas ✔️'],
            ['img'=>'img-mod8.png','title'=>'Módulo 8: Contabilidad','sub'=>'12 principios básicos de la contabilidad ✔️'],
            ['img'=>'img-mod9.png','title'=>'Módulo 9: Pensá como los que la construyen','sub'=>'Descubrí por qué los caminos tradicionales no funcionan… ✔️'],
          ];
          foreach($modules as $m): ?>
          <div class="paso-item">
            <img
              class="paso-icon"
              src="<?php echo get_template_directory_uri() . '/img/' . $m['img']; ?>"
              alt="<?php echo esc_attr($m['sub']); ?>"
              loading="lazy"
            >
            <div class="paso-text">
              <h3><?php echo esc_html($m['title']); ?></h3>
              <p class="paso-sub"><?php echo esc_html($m['sub']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="paso-paso-cta">
        <p>
          ¡Transformá tus finanzas desde hoy!<br>
          Cupos limitados • Acceso inmediato • Garantía 7 días<br>
          Pago seguro + certificado oficial incluido
        </p>
        <a
          href="https://pay.hotmart.com/I39278939V?ref=W87801197P"
          class="btn-paso-cta"
          target="_blank"
          rel="noopener noreferrer"
        >
          Inscribirme ahora por USD 75
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>


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








