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
              <a target="_blank" href=""> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales in.png'); ?>" alt="" /> </a>
            </div>

            <div class="redS">
              <a target="_blank" href="https://www.instagram.com/transeuntehabla/"> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales I.png'); ?>" alt="" /> </a>
            </div>
          </div>
        </div>
        <?php
        $images = acf_photo_gallery('galeria', get_the_ID());
        if (count($images)) {
        ?>
        <div class="event-body-galery bg-dark">
          <div class="event-body-galery-header d-flex">
            <span class="porIcon">***</span> <span>Fotografías</span>
          </div>
          <div class="event-body-galery-fotos">
          <?php
          foreach($images as $image) {
            $full_image_url= $image['full_image_url'];
            $title = $image['title']; 
          ?>
            <div class="event-body-galery-fotos-img">
              <img style="width: 100%; height: 100%; object-fit: cover" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" >
            </div>
          <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="aside">
        <div class="event-lateral mr-lg-4 mr-2">
          <div class="event-lateral-masEventos">
            <div class="lateralHeader">
              <span class="porIcon">***</span> <span>Más contenidos</span>
            </div>
            <div class="lateralbody">
              <?php
              $moreEvents = new WP_Query(array(
                'post_type' => 'contenido',
                'posts_per_page' => 8,
                'post__not_in' => array(get_the_ID())
              ));
              $i = 0;
              while($moreEvents->have_posts()) { 
                $moreEvents->the_post();
              ?>
              <?php if ($i === 4) { ?>
                <div class="colapsable">
              <?php } ?>
              <div class="lateralbody-evento">
                <a href="<?php echo get_permalink() ?>"> <span><?php echo get_the_title() ?></span> </a>
              </div>
              <?php if ($i === 7) { ?>
              </div>
              <?php } // endif 
              $i++; // increment 
              } // endwhile
              wp_reset_postdata();
              ?>
              <?php if($moreEvents->count > 4) { ?>
              <span class="show-boton">Ver más</span>
              <?php } ?>
            </div>
          </div>
          <div class="event-lateral-prensa">
            <div class="lateralHeader"><span class="porIcon">***</span> <span>Prensa</span></div>
            <div class="lateralbody">
              <div class="lateralbody-evento">
                <a href=""> <span>Carabobeño</span> </a>
              </div>
              <div class="lateralbody-evento">
                <a href=""> <span>El Nacional</span> </a>
              </div>
              <div class="lateralbody-evento">
                <a href=""> <span>El Estimulo </span> </a>
              </div>
            </div>
          </div>
          <div class="notasPrensa">
            <a href="">
              <div class="notasPrensa-nota1">
                <div class="notaTitle">Nota de prensa.</div>
                <div class="nota-content">LETRIANA</div>
              </div>
            </a>
            <a href="">
              <div class="notasPrensa-nota2">
                <div class="notaTitle">Nota de prensa.</div>
                <div class="nota-content">NOTITARDE</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
<?php
} 
get_footer(); 
?>
