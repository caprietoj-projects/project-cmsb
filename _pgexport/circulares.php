<?php
/*
 Template Name: circulares_template
 Template Post Type: post
*/
?>
<?php get_header( 'circulares' ); ?>

        <div class="container-fluid text-right alineacion-redes" style="padding: 7px;background: #de1616;">
            <input class="border rounded" type="search" style="margin-right: 14px;" placeholder="Buscar...">
            <a href="#"><i class="fa fa-whatsapp d-none d-sm-none d-md-none d-lg-inline d-xl-inline" style="font-size: 25px;color: rgb(255,255,255);margin-right: 15px;"></i></a>
            <a href="https://www.youtube.com/channel/UC-4toUGRFmUVEYinaoyR9dw"><i class="fa fa-youtube-play d-none d-sm-none d-md-none d-lg-inline d-xl-inline" style="font-size: 25px;color: rgb(255,255,255);margin-right: 15px;"></i></a>
            <a href="https://twitter.com/sanbartolomeedu?lang=es"><i class="fa fa-twitter d-none d-sm-none d-md-none d-lg-inline d-xl-inline" style="font-size: 25px;color: rgb(255,255,255);margin-right: 15px;"></i></a>
            <a href="https://www.facebook.com/pg/mayorsanbartolome/photos/?tab=album&amp;album_id=3211465628904960&amp;__tn__=-UC-R"><i class="fa fa-facebook d-none d-sm-none d-md-none d-lg-inline d-xl-inline" style="font-size: 25px;color: rgb(255,255,255);margin-right: 15px;"></i></a>
            <a href="https://www.instagram.com/mayorsanbartolome/?hl=es"><i class="fa fa-instagram d-none d-sm-none d-md-none d-lg-inline d-xl-inline" style="font-size: 25px;color: rgb(255,255,255);margin-right: 15px;"></i></a>
        </div>
        <div class="container-fluid text-center alineacion-2" style="padding-top: 1px;padding-bottom: 23px;background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fondologo.png") round;">
            <a href="index.html" style="background-color: rgba(255,0,0,0);"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Escudo%20Gotico.png" style="width: 130px;background-color: rgba(255,255,255,0);"></a>
            <hr style="width: 400px;color: rgb(74,69,131);background-size: 11px;filter: blur(0px) grayscale(0%);opacity: 1;background-color: #4a4583;">
            <h5 style="color: rgb(74,69,131);margin: -11px;font-size: 35px;font-family: gothic;"><?php _e( 'COLEGIO MAYOR SAN BARTOLOMÉ', 'sanbartolome_theme' ); ?></h5>
        </div>
        <div class="container" style="padding-top: 29px;">
            <nav class="navbar navbar-light navbar-expand-md text-sm-center text-md-center navigation-clean">
                <div class="container">
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'sanbartolome_theme' ); ?></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="font-family: gothic;color: rgb(27,20,100);">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link border-left" href="admisiones.html" style="color: rgb(27,20,100);"><?php _e( 'Admisiones', 'sanbartolome_theme' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" style="color: rgb(27,20,100);/*border-right: 1px;*/"><?php _e( 'Recorrido Histórico', 'sanbartolome_theme' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-left" href="responsabilidad_social.html" style="color: rgb(27,20,100);"><?php _e( 'Responsabilidad Social', 'sanbartolome_theme' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-left" href="contactanos.html" style="color: rgb(27,20,100);"><?php _e( 'Contacto', 'sanbartolome_theme' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
            <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php _e( 'CIRCULARES', 'sanbartolome_theme' ); ?></h1>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-sm-center text-md-center">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="index.html"><i class="fa fa-home" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="rubberBand" style="font-size: 80px;color: rgb(212,104,108);" title="Inicio"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="padres_de_familia.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/padres%20de%20familia%20azul.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="estudiantes.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/New%20Estudiantes.png" style="width: 57px;"></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="colegio.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Recurso%2094.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="exalumnos.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exalumnos.png"></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="profes_administrativos.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/profes%20rojo.png"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <?php PG_Helper::rememberShownPost(); ?>
                                                <th><a href="#"><?php if ( is_singular() ) : ?><?php echo PG_Image::getPostImage( null, 'large', array(
                                                                    'data-bss-hover-animate' => 'tada',
                                                                    'style' => 'width: 150px;'
                                                            ), 'both', null ) ?><?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                                                        'data-bss-hover-animate' => 'tada',
                                                                        'style' => 'width: 150px;'
                                                                ), 'both', null ) ?></a><?php endif; ?></a></th>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'sanbartolome_theme' ); ?></p>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
            <footer style="background: rgb(28,19,100);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 col-xl-2 item">
                            <a href="http://sitio.acodesi.org/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ACODESI.png" style="margin-left: -15px;"></a>
                            <a href="https://jesuitas.co/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/JESUITAS%20COLOMBIA.png" style="margin-top: 17px;margin-left: -44px;"></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xl-2 item">
                            <a href="https://www.asia-abba.org/2018/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo%20ASIA%20ABBA.png" style="margin-left: 26px;"></a>
                            <a href="https://www.flacsi.net/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/FLACSI.png" style="margin-top: 47px;margin-left: -18px;width: 191px;"></a>
                            <a href="https://www.flacsi.net/" target="_blank"></a>
                        </div>
                        <div class="col-sm-4 col-md-3 col-xl-2 item">
                            <a href="https://tomasruedavargas.org/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/TOMAS%20RUEDA%20VARGAS.png" style="margin-left: 28px;"></a>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ASOMAYOR.png" style="margin-top: 30px;margin-left: 26px;"></a>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <ul>
                                <li style="margin-top: 10px;font-family: gothic;">
                                    <a href="#" style="color: rgb(255,255,255);"></a>
                                </li>
                                <li></li>
                                <li style="margin-top: 11px;">
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </li>
                            </ul>
                            <p style="font-family: gothic;"><strong><?php _e( 'Sede Bachillerato:', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Dirección: Carrera 7 No. 9-96 Plaza de Bolívar.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'PBX: 9191990', 'sanbartolome_theme' ); ?></strong></p>
                            <p style="font-family: gothic;"><strong><?php _e( 'Sede Preescolar y Primaria:', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Dirección: Carrera 23 No. 28-55 Sur.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'PBX: 9191990.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Bogotá D.C. - Colombia', 'sanbartolome_theme' ); ?></strong><br></p>
                        </div>
                        <div class="col-lg-3 item social" style="text-align: center;">
                            <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-facebook"></i></a>
                            <a href="#"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a>
                            <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-whatsapp-outline"></i></a>
                            <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-youtube-outline"></i></a>
                            <p class="copyright" style="color: #ffffff;font-family: gothic;"><br><strong><?php _e( 'Consulte&nbsp;&nbsp;', 'sanbartolome_theme' ); ?></strong><a href="http://www.sanbartolome.edu.co/uploads/documentos/2018/politica-datos.pdf"><?php _e( 'aqui', 'sanbartolome_theme' ); ?></a><strong><?php _e( '&nbsp;nuestra Politica de Proteccion de Datos Personales', 'sanbartolome_theme' ); ?></strong><br><br><strong><?php _e( 'Diseño y Desarrollo: Departamento de Sistemas y Promoción Institucional Colegio Mayor de San Bartolomé © 2021', 'sanbartolome_theme' ); ?></strong><br><br></p>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Icontec%20Actualizado%20Footer.png" style="width: 107px;">
                        </div>
                    </div>
                </div>
            </footer>
        </div>        

<?php get_footer( 'circulares' ); ?>