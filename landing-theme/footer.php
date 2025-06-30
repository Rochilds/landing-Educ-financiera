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





<?php wp_footer(); ?>
<script>
window.addEventListener('load', () => {
  if (typeof fbq !== 'function') {
    console.warn('fbq no está definido');
    return;
  }

    // array de selectores de tus botones de checkout
    const selectors = [
      '.her-cta',
      '.btn-beneficios',
      '.btn-llevar',
      '.btn-confianza',
      '.btn-paso-cta'
      
    ];

    // Buscamos todos los botones de pago
  const botones = document.querySelectorAll(selectors.join(','));
  if (!botones.length) {
    console.warn('No encontré botones con estos selectores:', selectors);
    return;
  }

    botones.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();                     // detenemos la navegación inmediata
      fbq('track', 'InitiateCheckout');       // disparamos tu evento
      console.log('🔔 InitiateCheckout enviado');

      // esperamos un pelín y luego redirigimos
      setTimeout(() => {
        window.location.href = btn.href;
      }, 300);
    });
  });

  // Si estamos en la página de gracias, disparamos Purchase
  if ( window.location.href.includes('/thanks') ) {
    fbq('track', 'Purchase', {
      value: {{PROD_PRICE}},
      currency: '{{PROD_CURRENCY}}'
    });
    console.log('✅ Purchase enviado');
  }
});
</script>
</body>
</html>