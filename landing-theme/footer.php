<?php
/**
 * footer.php
 * Pie de página del tema
 */
?>

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
      />
      Contactar por WhatsApp
    </a>

    <div class="footer-redes">
      <a href="https://www.facebook.com/tu-perfil" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-fb.png"
             alt="Facebook" width="32" height="32" loading="lazy" />
      </a>
      <a href="https://www.instagram.com/tu-perfil" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-ig.png"
             alt="Instagram" width="32" height="32" loading="lazy" />
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

<?php wp_footer(); ?>



<script>
window.addEventListener('load', () => {
  if (typeof fbq !== 'function') return console.warn('fbq no está definido');

  const selectors = [
    '.her-cta',
    '.btn-beneficios',
    '.btn-llevar',
    '.btn-confianza',
    '.btn-paso-cta'
  ];
  const botones = document.querySelectorAll(selectors.join(','));
  if (!botones.length) return console.warn('⚠️ No encontré botones de checkout.');

  botones.forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      // Disparamos InitiateCheckout incluyendo currency y opcionalmente value
      fbq('track', 'InitiateCheckout', {
        value: 37,        // ajusta o reemplaza con tu variable dinámica
        currency: 'USD'   // ¡3 letras mayúsculas!
      });
      console.log('🔔 InitiateCheckout enviado con currency');

      setTimeout(() => {
        window.location.href = btn.href;
      }, 300);
    });
  });

  // Purchase en página de gracias
  if ( window.location.href.includes('/thanks') ) {
    fbq('track', 'Purchase', {
      value: 37,
      currency: 'USD'
    });
    console.log('✅ Purchase enviado');
  }
});
</script>


</body>
</html>