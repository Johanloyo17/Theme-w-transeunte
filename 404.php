<?php get_header(); ?>
<a href="<?php echo get_site_url(); ?>">
  <div style="display: grid; height: 100%">
    <img 
      src="<?php echo get_theme_file_uri('images/404.jpg') ?>"
      alt="Página no encontrada"
      style="max-width: 100%; max-height: 100vh; margin: auto;"
      >
  </div>
</a>
<?php get_footer(); ?>