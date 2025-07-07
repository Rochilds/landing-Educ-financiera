

 <?php
/* index.php */
get_header(); 
?>

<main>

  <!-- HERO PERSONALIZADO -->
  <section class="hero-moderno">
    <div class="hero-inner">
      <h1 class="hero-title">¿Vivís endeudado y no sabés cómo salir?</h1>
      <p class="hero-subtitle">
        Aprendé paso a paso a eliminar tus deudas, organizar tu presupuesto y empezar a invertir desde cero, incluso si nunca estudiaste finanzas.
Incluye software exclusivo, garantía de 7 días y acceso inmediato.
      </p>
      <div class="hero-visual">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/img-prueba.png"
          alt="Laptop + App móvil"
          loading="lazy"
        >
      </div>
      <a
        href="https://pay.hotmart.com/I39278939V?checkoutMode=10&checkoutCustomMode=1&bid=1599428231631&hideBillet=1&offDiscount=MONOPOLY"
        class="hero-cta"
        target="_blank"
        rel="noopener noreferrer"
      >
        Inscribite ahora con 50% OFF – tiempo limitado<br>
        <small>Cupos limitados – Oferta por tiempo limitado</small>
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
          href="https://pay.hotmart.com/I39278939V?checkoutMode=10&checkoutCustomMode=1&bid=1599428231631&hideBillet=1&offDiscount=MONOPOLY"
          class="btn-beneficios"
          target="_blank"
          rel="noopener noreferrer"
        >
          Inscribite ahora con 50% OFF – tiempo limitado
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
        href="https://pay.hotmart.com/I39278939V?checkoutMode=10&checkoutCustomMode=1&bid=1599428231631&hideBillet=1&offDiscount=MONOPOLY"
        class="btn-llevar"
        target="_blank"
        rel="noopener noreferrer"
      >
        Inscribite ahora con 50% OFF – tiempo limitado
      </a>
    </div>
  </section>


  <!-- INSCRIBITE CON CONFIANZA -->
  <section class="confianza-section">
    <div class="confianza-container">
      <h2 class="confianza-title">Inscribite ahora con 50% OFF – tiempo limitado</h2>
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
          href="https://pay.hotmart.com/I39278939V?checkoutMode=10&checkoutCustomMode=1&bid=1599428231631&hideBillet=1&offDiscount=MONOPOLY"
          class="btn-confianza"
          target="_blank"
          rel="noopener noreferrer"
        >
          Inscribite ahora con 50% OFF – tiempo limitado
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
          href="https://pay.hotmart.com/I39278939V?checkoutMode=10&checkoutCustomMode=1&bid=1599428231631&hideBillet=1&offDiscount=MONOPOLY"
          class="btn-paso-cta"
          target="_blank"
          rel="noopener noreferrer"
        >
          Inscribite ahora con 50% OFF – tiempo limitado
        </a>
      </div>
    </div>
  </section> 

  <section class="faq-section">
  <div class="container">
    <h2 class="faq-title">Preguntas frecuentes</h2>

    <div class="faq-item">
      <h3 class="faq-question">¿Tienen una política de devoluciones?</h3>
      <p class="faq-answer">
        ¡Sí! Si sientes que nuestro curso no cumplió tus expectativas o que no has aprendido nada diferente puedes hacer uso de tu garantía de los primeros 7 días y te reintegraremos el 100 % de tu dinero.
      </p>
    </div>

    <div class="faq-item">
      <h3 class="faq-question">¿Necesito tener dólares para comprar el curso?</h3>
      <p class="faq-answer">
        No. En el momento de pago te sale el equivalente de tu moneda local y eso es lo que se te cobra.
      </p>
    </div>

     <!-- Item 3 -->
    <div class="faq-item">
      <h3 class="faq-question">Me sale que el precio es superior al que había leído. ¿Por qué?</h3>
      <p class="faq-answer">
        En algunos países, como Argentina, el gobierno te cobra un impuesto por las compras online. En muchos países tal impuesto no existe de momento, por lo que el precio es el mencionado anteriormente, pero si vives en uno de esos pocos países donde este impuesto sí existe, está es la razón por la que el precio es superior al que mencionamos.
      </p>
    </div>

    <!-- Item 4 -->
    <div class="faq-item">
      <h3 class="faq-question">¿Cómo se paga?</h3>
      <p class="faq-answer">
        Se paga a través de Hotmart, una empresa internacional de educación. Hotmart brinda varias formas de pago dependiendo tu país. Estas son las formas de pago para estos países:<br>
        <strong>Colombia:</strong> Tarjeta de crédito, Baloto, Cuenta de Hotmart, PayPal y PSE.<br>
        <strong>Argentina:</strong> Tarjeta de crédito, Cupón de pago, Cuenta de Hotmart y PayPal.<br>
        <strong>México:</strong> Tarjeta de crédito, Tarjeta de débito, Oxxo, Cuenta de Hotmart y PayPal.<br>
        <strong>Estados Unidos:</strong> Tarjeta de crédito, Cuenta de Hotmart, PayPal, PayPal Credit, Samsung Pay y Google Pay.<br>
        <strong>Chile:</strong> Tarjeta de crédito, Sencillito, Cuenta de Hotmart y PayPal.<br>
        <strong>España:</strong> Tarjeta de crédito, Cuenta de Hotmart, PayPal, Samsung Pay, Google Pay y Transferencia bancaria online.<br>
        <strong>Paraguay:</strong> Tarjeta de crédito, Cuenta de Hotmart, PayPal, Samsung Pay y Google Pay.<br>
        <strong>Perú:</strong> Tarjeta de crédito, Pago Efectivo, Cuenta de Hotmart y PayPal.
      </p>
    </div>

     <!-- Item “¿El pago es seguro?” -->
    <div class="faq-item">
      <h3 class="faq-question">¿El pago es seguro?</h3>
      <p class="faq-answer">
        Sí. Las formas de pago disponibles que brinda Hotmart son las más seguras y utilizadas por las tiendas online.
      </p>
    </div>

    <!-- Item “¿Mis datos están protegidos?” -->
    <div class="faq-item">
      <h3 class="faq-question">¿Mis datos están protegidos?</h3>
      <p class="faq-answer">
        Sí. Nosotros no tenemos acceso a tus datos bancarios, solo a tu nombre y tu correo. De la misma manera, ni Hotmart ni nosotros vendemos tus datos o hacemos mal uso de ellos.
      </p>
    </div>

    <!-- Item “¿Cómo sé que realmente obtengo mi dinero de vuelta…?” -->
    <div class="faq-item">
      <h3 class="faq-question">
        ¿Cómo sé que realmente obtengo mi dinero de vuelta en caso de solicitar una devolución por garantía?
      </h3>
      <p class="faq-answer">
        Hotmart es quien se encarga de tramitar las devoluciones, por lo que cuando solicitas una devolución dentro del periodo de garantía es Hotmart personalmente quien se encarga de reintegrarte tu dinero.
      </p>
    </div>

  </div>
 </section>

</main>

<?php get_footer(); ?>  <!-- Llama a footer.php y cierra el footer principal -->

