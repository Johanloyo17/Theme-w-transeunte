<?php get_header(); ?>
    <!-- MENU ADENTRO -->
    <section id="menuAdentro" class="seccion bg-dark ">
      <!-- ECABEZADO LOGO Y BOTON MENU -->
      <header class="encabezadoMenu row d-flex container-fluid align-items-center align-content-center ">
        <div class="mascaraMenu2"></div>
          <div class="logoMenu ml-3">
          <a href="<?php echo site_url(); ?>">
              <img  class="" src="<?php echo get_theme_file_uri('/images/icon/Transeunte-04.png')?>" alt="Transeunte Logo">
          </a>
          </div>
          <div class=" botonMenu  ml-auto mr-3 mr-sm-1 d-flex align-items-center justify-content-center ">
            <i class="fa fa-bars " aria-hidden="true"></i>
          </div>
      </header>
      <div class="  cont-tituloMenu d-flex justify-content-sm-center  align-items-center mx-auto ">
        <div class="copysPortada text-lg-right text-center font-italic mx-auto">
          <h2 class=" titulo font-italic">La calle habla</h2>
          <h3 class="subtitulo  mt-3  ml-lg-4 font-italic ">
            ¡Todo un viaje por la ciudad de experiencias interminables!
          </h3>
          <h4 subtitulo> AGENCIA DE CONTENIDOS CULTURALES</h4>
          <div class="lineaT">
              <img src="<?php echo get_theme_file_uri('/images/icon/Linea2-01.png') ?>" alt="linea">
          </div>
        </div>
      </div>
    </section>
    <!-- FIN DE MENU ADENTRO -->
    <!-- nuevo menu-->
    <section class="navegacion"></section>
    <nav class="navegacion seccion container-fluid 	row  flex-column align-items-center font-italic align-content-xs-center justify-content-center m-0">
      <div class="menu">
        <div class="menu-naveg">
          <div class="menu-naveg-link">
            <a href="#manifiesto" class="ancla">
              <h2 class="menu-naveg-link-text">MANIFIESTO</h2>
            </a>
          </div>
        </div>
        <div class="menu-naveg">
          <div class="menu-naveg-link">
            <a href="#orguiaCultural" class="ancla">
              <h2 class="menu-naveg-link-text">ORGÍA CULTURAL</h2>
            </a>
          </div>
        </div>
        <div class="menu-naveg">
          <div class="menu-naveg-link">
            <a href="#caminemos" class="ancla"> <h2 class="menu-naveg-link-text">CAMINEMOS</h2> </a>
          </div>
        </div>
        <div class="menu-naveg">
          <div class="menu-naveg-link">
            <a href="#contacto" class="ancla"> <h2 class="menu-naveg-link-text">CONTACTO</h2> </a>
          </div>
        </div>
        <div class="botonClose"></div>
      </div>
    </nav>
    <!-- FIN MENU AFUERA -->
    <!-- divisor no se para que coño esta aqui  
    <div class="divisor d-flex align-items-center">
        <img src="icon/Separador.png" alt="Sombra" class="sombra ">
    </div>
    -->

    <!-- iniciode la infografia -->
    <!-- Manifiesto -->
    <section id="manifiesto" class="manifiesto ">
      <div class="manifiesto-titulo container-fulid d-flex flex-column align-items-center  justify-content-center bg-light">
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
        <h2>Manifiesto</h2>
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
      </div>
      <div class="manifiesto-img"></div>
      <div class="manifiesto-texto font-italic">
        <div class="manifiesto-cont-p">
          <p>
            Somos un movimiento creativo, identificado con la calle y el monte. Nuestros pies son
            motores que nos trasladan hacia escenarios conocidos y otros tantos por descubrir. Las
            rutas recorridas nos aburren, nos vuelven somnolientos. La única manera viable para
            permanecer de pie es siguiendo el ritmo de las ideas.
          </p>
          <p>
            En la calle de las opiniones transitamos sin cesar. Somos forasteros de la nada. Por eso
            decimos: somos transeúntes que aspiran participar en una orgía cultural para interactuar
            con la mal llamada minoría. Una comunidad inquieta e incesante, a quienes la búsqueda de
            una identidad propia nos resulta plausible.
          </p>

          <p>
            También una comunidad con un medio de expresión que no pretende enviar un mensaje
            imparcial; tampoco siente atracción por el centro y menos hacia la objetividad. Sólo
            busca involucrar a quienes forman parte del todo. Esa es la creencia: unir nuestra voz
            con otras que canten en el mismo idioma, el del amor por conocer el todo y la nada. La
            causa no es una bandera sino la razón.
          </p>

          <p>
            Somos testigos de que el mundo se derrumba. El tiempo corre y el conflicto se libera sin
            pudor cantando el himno de la civilización. En ocasiones, dudamos que sea posible vencer
            esa maquinaria. Sí, lo admitimos, pero es parte del hecho. Andamos vagantes y una de
            nuestras certezas es que aprendemos caminando. Así que mientras más espacios haya por
            recorrer, más sabremos.
          </p>
          <p>
            Cualquier lugar es nuestra casa. Merendamos, bailamos, conversamos y pensamos dentro de
            ella. Después de entrar por la puerta seguimos siendo unos transeúntes que buscan su
            espacio en un rincón apartado. Somos una comunidad sin techo, pero con muchas ganas de
            crear y, sobre todo, apreciar otras creaciones.
          </p>
        </div>
      </div>
      <div class="manifiesto-footer">
        <div class="manifiesto-footer-redes">
          <a href="https://www.instagram.com/transeuntehabla/"> <i class="fab fa-instagram"></i> </a>
          <a href="https://www.facebook.com/somostranseunte/"> <i class="fab fa-facebook-f"></i> </a>
          <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
        </div>
        <div class="manifiesto-footer-redes">
          <a href="<?php echo wp_get_attachment_url(7) ?>"> <i class="fa fa-download" aria-hidden="true"></i> </a>
        </div>
      </div>
    </section>
    <!-- FIN Manifiesto -->

    <!-- seccion orgia cultural -->
    <section id="orguiaCultural" class="orgiaCultural">
      <div class="orgiaCultural-img"></div>
      <div class="orgiaCultural-eventos">
        <?php
        $homepagePosts = new WP_Query(array(
          'post_type' => array('evento', 'contenido'),
          'orderby' => 'date',
        ));
        while($homepagePosts->have_posts()) { $homepagePosts->the_post(); ?>
        <div class="evento">
          <div class="eventoimg"><?php the_post_thumbnail(); ?></div>
          <div class="evento-title font-italic">
            <span class="mx-auto"> <?php echo get_the_title(); ?> </span>
            <div class="evento-title-verMas btn btn-light">
              <span>Ver Más</span> <i class="fa fa-arrow-up evento-arrow" aria-hidden="true"></i>
            </div>
          </div>
          <div class="evento-content">
            <div class="evento-content-text">
              <h2 class="evento-content-text-title"><?php echo get_the_title(); ?></h2>
              <p class="evento-content-text-p"> <?php echo get_the_excerpt(); ?> </p>
              <p class="evento-content-text-info">
              <?php if(get_post_type() === 'evento') { ?>
                <span><? echo get_field('lugar') ?></span>
                <span><? echo get_field('fecha') ?></span>
                <span><? echo get_field('tipo_de_evento') ?></span>
                <span><? echo get_field('tipo_de_espacio') ?></span>
                <span>Asistentes: <? echo get_field('numero_de_asistentes') ?>+</span>
              <?php } ?>
              <?php if(get_post_type() === 'contenido') { ?>
                <span><? echo get_field('plataforma_o_red_social') ?></span>
                <span>Alcance: <? echo get_field('alcance') ?></span>
              <?php } ?>
              </p>
              <a class="evento-content-text-link btn btn-dark w-100 font-italic " href="<?php echo get_permalink(); ?>">
                Mirar evento
              </a>
            </div>
          </div>
        </div>
        <?php } wp_reset_postdata(); ?>
      </div>
    </section>
    <!-- FIN seccion orgia cultural -->
    <!-- seccion caminemos y proyectos, que hacemos? -->
    <section id="caminemos" class="caminemos container-fluid">
      <div class="caminemos-img"></div>
      <div class="caminemos-text d-flex justify-content-center flex-column align-items-center ">
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
        <div>
          <p>
            En nuestro manifiesto aseguramos que cualquier lugar es nuestra casa. <br />
            Esto se debe a que andamos de paso por una razón: ayudarte a encontrar tu camino. <br />
            <span> Si abres la puerta posiblemente te costará decirnos adiós. </span>
          </p>
        </div>
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
      </div>
      <div class="proyectos">
        <div class="proyectos-img"></div>
        <div class="proyectos-proyectos">
          <div class="header w-100 d-flex justify-content-center align-items-center">
            <span>¿QUÉ HACEMOS?</span>
          </div>
          <div class="cuerpo-proyecto font-italic">
            <div class="proyectos-contenido  row">
              <div class="proyecto-titulo ">Literatura</div>
              <div class="proyecto-separador"><img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /></div>
              <div class="proyecto-descripcion">
                <span> Presentaciones de libros, talleres y conversatorios </span>
              </div>
            </div>
            <div class="proyectos-contenido  ">
              <div class="proyectos-contenido ">
                <div class="proyecto-titulo">Música</div>
                <div class="proyecto-separador"><img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /></div>
                <div class="proyecto-descripcion">
                  <span> Mini conciertos acústicos y clínicas musicales </span>
                </div>
              </div>
            </div>
            <div class="proyectos-contenido ">
              <div class="proyectos-contenido">
                <div class="proyecto-titulo">Cine y fotografía</div>
                <div class="proyecto-separador"><img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /></div>
                <div class="proyecto-descripcion">
                  <span> Cine foros, talleres, exposiciones y recorridos fotográficos. </span>
                </div>
              </div>
            </div>

            <div class="proyectos-contenido ">
              <div class="proyectos-contenido">
                <div class="proyecto-titulo">Artes plásticas</div>
                <div class="proyecto-separador"><img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /></div>
                <div class="proyecto-descripcion">
                  <span> Exposiciones, shows de arte en vivo y talleres. </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- seccion caminemos y proyectos, que hacemos? -->
    <!-- contenidos y ¡Que hacemos? -->
    <section id="contenidos" class="contenidos container-fluid">
      <div class="contenidos-img bg-danger"></div>

      <div class="contenidos-text font-italic">
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
        <p>
          Nos inspiramos en perfiles reales que se cruzan en tu camino y los convertimos en
          personajes. Dinos quiénes son, el resto se lo dejamos a la imaginación.
        </p>
        <span> ¡Contamos historias para conectar! </span>
        <img src="<?php echo get_theme_file_uri('images/icon/Separador.png') ?>" alt="Sombra" class="sombra " />
      </div>
      <div class="contenidos-queHacemos font-italic ">
        <div class="contenidos-queHacemos-title container-fluid mt-0  bg.bg-dark text-light">
          ¿QUÉ HACEMOS?
        </div>
        <div class="contenidos-queHacemos-text wow slideInUp">
          <img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /> <span>Creación de campañas</span>
        </div>
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" /> <span>Creación de personajes</span>
        </div>
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" />
          <span>Redacción y diseño gráfico de publicaciones para redes sociales.</span>
        </div>
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" />
          <span>Redacción y diseño gráfico de blogs, email marketing y sitios web.</span>
        </div>
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img src="<?php echo get_theme_file_uri('images/icon/Linea2-01.png') ?>" alt="" />
          <span> Redacción y edición de contenido para vídeos</span>
        </div>
      </div>
    </section>
    <!--  FIN contenidos y ¡Que hacemos? -->
    <!--camina con nosotros -->
    <div class="ConNosotros-img"></div>
    <div id="contacto" class="footPage">
      <div class="footPage-text">
        <p class="footPage-text-p">
          <span> "Queremos unirnos </span> <span> con otros que andan </span>
          <span> por allí en un caminar constante". </span>
        </p>
        <span class="footPage-text-resaltado"> ¡Encontrémonos! </span>
      </div>
      <div class="footPage-contact ">
        <div class="footPage-contact-phone  ">
          <span>+34 625 43 7696</span> <span> +58 424 463 2964</span>
        </div>
        <div class="footPage-contact-mail"><span>info@transeuntehabla.com</span></div>
        <div class=" footPage-contact-city "><h5>Madrid (España) / Valencia (Venezuela)</h5></div>
        <div class="socialF d-flex ">
          <div class="redS  mx-2">
            <a href=""> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales F.png') ?>" alt="" /> </a>
          </div>
          <div class="redS  mx-2">
            <a href=""> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales in.png') ?>" alt="" /> </a>
          </div>
          <div class="redS  mx-2">
            <a href=""> <img src="<?php echo get_theme_file_uri('images/icon/Redes Sociales I.png') ?>" alt="" /> </a>
          </div>
        </div>
      </div>
      <div class="footPage-form">
        <div class="Formularios mx-auto  ">
          <form class=" container-fluid font-italic">
            <div class=" form-row align-items-center ">
              <div class="col-md-4 col-12 my-3">
                <div class="text-md-left ml-2 text-center">
                  <label class=" labelForm text-center " for="FormNombre">Nombre:</label>
                </div>
                <input type="text" class="form-control formulario " id="FormNombre" />
              </div>
              <div class="col-md-7 col-12 offset-md-1 my-3">
                <div class="text-md-left ml-2 text-center">
                  <label class="labelForm " for="FormCorreo">Correo:</label>
                </div>
                <div class="input-group ">
                  <input type="text" class="form-control  formulario" id="FormCorreo" />
                </div>
              </div>
              <div class="form-group col-12">
                <div class="text-md-left ml-2 text-center">
                  <label class="labelForm" for="texArea">Mensaje:</label>
                </div>
                <textarea class="form-control  formulario" id="texArea" rows="3"></textarea>
              </div>
            </div>
            <div class="boton-enviar d-flex  mx-auto">
              <button type="button" class="btn btn-dark mx-auto boton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>
      <div class="pieDos container-fluid d-flex align-self-end justify-content-center ">
        <div class="textF text-center align-self-center d-flex flex-column py-2">
          <h4>FOTOGRAFÍAS:</h4>
          <span>Ivannel Romero / ivannelromero@gmail.com</span>
          <span class="">Kala Madriz / kalamadriz@gmail.com</span>
          <span
            >Transeúnte &copy; <? echo date(Y);?></span
          >
        </div>
      </div>
    </footer>
<?php get_footer(); ?>
