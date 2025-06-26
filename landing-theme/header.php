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

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>