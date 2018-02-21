<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo('charset'); ?>" />   
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	  <meta name="description" content="Research and services provider enterprise in the Earth Observation field">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    

        <?php
        global $smof_data;

        if (array_key_exists('vntd_custom_favicon', $smof_data)) {
          if ($smof_data['vntd_custom_favicon']) {
            echo '<link rel="shortcut icon" href="' . $smof_data['vntd_custom_favicon'] . '" />';
          }
        }
        wp_head();
        ?>        

        <style>
            .vc_custom_1447332582314, #what-we-do .vc_row{
                background-image: url(/wp-content/uploads/2014/07/what-we-do-01.jpg) !important;
            }

            .wpml-ls-legacy-list-horizontal {
                padding:0;
            }

            #lang_sel_list li a {
                display:inline;
                font-size:11px;
            }
            .nav-menu .wpml-ls-statics-shortcode_actions{
                border:none;
            }

            .boxed-item img{
                height:289px;
            }
        </style>
        <link rel='stylesheet' id='google-font-heading-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500&#038;ver=4.8.1' type='text/css' media='all' />
        
    </head>

    <body <?php body_class(vntd_body_skin()); ?>>

        <section id="home"></section>



        <?php
        if (array_key_exists('vntd_loader', $smof_data)) {
          if ($smof_data['vntd_loader'] || !isset($smof_data['vntd_loader'])) {

            $loader_class = 'dark-border';
            if ($smof_data['vntd_skin'] == 'dark') {
              $loader_class = 'colored-border';
            }
            ?>
            <!-- Page Loader -->
            <section id="pageloader" class="white-bg">
                <div class="outter <?php echo $loader_class; ?>">

         <!--<div class="mid <?php echo $loader_class; ?>"></div>-->
                </div>
            </section>
            <?php
          }
        }

        if (vntd_navbar_style('style') != 'disable') {
          ?>


          <nav id="navigation<?php echo vntd_navbar_style('id'); ?>" class="<?php echo vntd_navbar_style(); ?>">

              <div class="nav-inner">
                  <div class="logo">
                      <!-- Navigation Logo Link -->
                      <!-- <a href="<?php vntd_logo_url(); ?>" class="scroll"> -->
                      <a href="#works" class="scroll">
                          <?php
                          $navbar_color = '';
                          if (array_key_exists('vntd_navbar_color', $smof_data)) {
                            $navbar_color = $smof_data['vntd_navbar_color'];
                          }
                          if (array_key_exists('vntd_logo_url', $smof_data)) {
                            if (vntd_navbar_style('style') == 'style2' && $smof_data['vntd_logo_light_url'] && get_post_meta(vntd_get_id(), 'navbar_color', TRUE) != 'white' || $navbar_color == 'dark' && $smof_data['vntd_logo_light_url']) {
                              $logo_url = $smof_data['vntd_logo_light_url'];
                            }
                            else {
                              $logo_url = $smof_data['vntd_logo_url'];
                            }

                            echo '<img class="site_logo" src="' . $logo_url . '" alt="' . get_bloginfo() . '">';
                          }
                          ?>
                      </a>
                  </div>
                  <!-- Mobile Menu Button -->
                  <a class="mobile-nav-button colored"><i class="fa fa-bars"></i></a>
                  <!-- Navigation Menu -->
                  <div class="nav-menu clearfix semibold">

                      <?php
                      do_action('icl_language_selector');
                      if (has_nav_menu('primary')) {
                        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav uppercase font-primary', 'walker' => new Vntd_Custom_Menu_Class()));
                      }
                      else {
                        echo '<span class="vntd-no-nav">No custom menu created!</span>';
                      }

                      if (class_exists('Woocommerce') && $smof_data['vntd_topbar_woocommerce'])
                        vntd_woo_nav_cart();
                      ?>	

                  </div>
              </div>
          </nav>

          <?php
        }

        if (!is_front_page() && $smof_data['vntd_header_title'] != 0 && get_post_meta(vntd_get_id(), 'page_header', true) != 'no-header' && !is_404() && !is_page_template('template-onepager.php')) {
          //$pageTemplate = get_page_template();
          if (!is_single())
            vntd_print_page_title();
          //if ( !is_single())  isardsat_print_page_title();
        }
        ?>

        <div id="page-content">
