<?php get_footer(); ?>  <!-- Llama a footer.php y cierra el footer principal -->

<!-- Contacto Footer Personalizado -->
<footer class="contacto-footer">
  <div class="container contacto-inner">
    <h2 class="contacto-title">
      ¿Dudas o consultas?<br>
      <span>Estamos para ayudarte</span>
    </h2>

    <a 
      href="https://wa.me/5493518185769?text=%C2%A1Hola!%20Quiero%20m%C3%A1s%20info"
      class="btn-whatsapp"
      target="_blank" rel="noopener noreferrer"
    >
      <img 
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-whatsapp.png" 
        alt="WhatsApp" 
        class="whatsapp-icon"
        loading="lazy"
      >
      Contactar por WhatsApp
    </a>

    <div class="footer-redes">
      <a href="https://www.facebook.com/profile.php?id=61552809742760" target="_blank" rel="noopener noreferrer">
        <img 
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-fb.png" 
          alt="Facebook" 
          width="32" height="32"
          loading="lazy"
        >
      </a>
      <a href="https://www.instagram.com/finanzasinteligente7/" target="_blank" rel="noopener noreferrer">
        <img 
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-ig.png" 
          alt="Instagram" 
          width="32" height="32"
          loading="lazy"
        >
      </a>
    </div>

    <p class="footer-follow">
      Seguínos para más contenido gratuito y novedades.
    </p>

    <p class="footer-copy">
      &copy; <?php echo date('Y'); ?> Educación Financiera Digital. Todos los derechos reservados.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>  <!-- Inserta scripts de plugins justo antes de </body> -->



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