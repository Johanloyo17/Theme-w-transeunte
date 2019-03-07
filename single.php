<?php
get_header();
while(have_posts()) {
  the_post();
?>
    <section class="event">
      <div class="event-head ">
        <div class="logoMenu ml-3">
          <a href="<?php echo site_url(); ?>">
            <img class="" src="<?php echo get_theme_file_uri('images/icon/Transeunte-04.png'); ?>" alt="Transeunte Logo" />
          </a>
        </div>
        <nav class="event-head-migas" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title() ?></li>
          </ol>
          <div class="dropdown d-md-none d-bock">
            <button
              class="btn btn-secondary dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Más eventos
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">La Mezcolanza</a>
              <a class="dropdown-item" href="#">El cruzado criollo</a>
              <a class="dropdown-item" href="#">Te tengo un cuento</a>
              <a class="dropdown-item" href="#">La calle habla</a>
              <a class="dropdown-item" href="#">Barrio venezolano</a>
              <a class="dropdown-item" href="#">Miscelánea</a>
              <a class="dropdown-item" href="#">Échanos tu cuento</a>
              <a class="dropdown-item" href="#">Sexontológico en Madrid</a>
              <a class="dropdown-item" href="#">[a love supreme]</a>
            </div>
          </div>
        </nav>
      </div>
      <div class="event-body">
        <div class="event-body-article">
          <div class="event-body-article-head">
            <h1><?php echo get_the_title(); ?></h1>
            <!-- <h4>Información extra</h4> -->
          </div>
          <div class="event-body-article-text">
            <?php the_content(); ?>
          </div>
          <div class=" event-body-article-redes">
            <div class="redS">
              <a target="_blank" href="https://www.facebook.com/somostranseunte/"> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales F.png'); ?>" alt="" /> </a>
            </div>

            <div class="redS">
              <a target="_blank" href="https://www.linkedin.com/company/transeuntehabla/"> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales in.png'); ?>" alt="" /> </a>
            </div>

            <div class="redS">
              <a target="_blank" href="https://www.instagram.com/transeuntehabla/"> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales I.png'); ?>" alt="" /> </a>
            </div>
          </div>
        </div>
        <?php
        $images = get_field('galeria');
        if ($images) {
        ?>
        <div class="event-body-galery bg-dark">
          <div class="event-body-galery-header d-flex">
            <span class="porIcon">***</span> <span>Fotografías</span>
          </div>
          <div class="event-body-galery-fotos">
          <?php
          foreach($images as $image) {
            $full_image_url= $image['sizes']['large'];
            $title = $image['title']; 
          ?>
            <div class="event-body-galery-fotos-img">
              <img style="width: 100%; height: 100%;" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" >
            </div>
          <?php } ?>
            <div class="closeBoton "><span>X</span></div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="aside">
        <div class="event-lateral mr-lg-4 mr-2">
          <div class="event-lateral-masEventos">
            <div class="lateralHeader">
              <span class="porIcon">***</span> <span><?php echo 'Más ' . get_post_type() . 's' ?></span>
            </div>
            <div class="lateralbody">
              <?php
              $morePosts = new WP_Query(array(
                'post_type' => get_post_type(),
                'posts_per_page' => 8,
                'post__not_in' => array(get_the_ID())
              ));
              $i = 0;
              while($morePosts->have_posts()) { 
                $morePosts->the_post();
              ?>
              <?php if ($i === 4) { ?>
                <div class="colapsable">
              <?php } ?>
                  <div class="lateralbody-evento">
                    <a href="<?php echo get_permalink() ?>"> <span><?php echo get_the_title() ?></span> </a>
                  </div>
              <?php if ($morePosts->post_count > 0 && $i === $morePosts->post_count - 1) { ?>
                </div>
              <?php } // endif 
              $i++; // increment 
              } // endwhile
              wp_reset_postdata();
              ?>
              <?php if($i > 3) { ?>
              <span class="show-boton">Ver más</span>
              <?php } ?>
            </div>
          </div>
          <?php
          if(have_rows('notas_de_prensa') ) {
          ?>
          <div class="event-lateral-prensa">
            <div class="lateralHeader"><span class="porIcon">***</span> <span>Prensa</span></div>
            <div class="lateralbody">
          <?php
            while(have_rows('notas_de_prensa')) { the_row();
              $title = get_sub_field('nombre');
              $url = get_sub_field('link');
          ?>
              <div class="lateralbody-evento">
                <a href="<?php echo $url ?>"> <span><? echo $title ?></span> </a>
              </div>
          <?php
            }
          echo '</div>' . "\n" . '</div>';
          }
          ?>
        </div>
      </div>
    </section>
<?php
} 
get_footer(); 
?>
