<?php
/*
  Template Name: Full Width Template
 */
?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div id="header">
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="Jay Skript and the Domsters" />
  </div>
  <div id="navigation">
  <!-- wordpress nav -->
  <?php
    $defaults = array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'main-nav',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      );
      wp_nav_menu( $defaults );
  ?>
  </div>
  <div id="content">
    <h1>Welcome</h1>
    <p id="intro">Welcome to the official website of Jay Skript and the Domsters. Here, you can <a href="about.html">learn more about the band</a>, view <a href="photos.html">photos of the band</a>, find out about <a href="live.html">tour dates</a> and <a href="contact.html">get in touch with the band</a>.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- tbs class for headers -->
          <div class="page-header">
            <!-- the_title() is WP function that shows the title of the post -->
            <h1><?php the_title(); ?></h1>
          </div>
          <!-- WP function that outputs post content -->
          <?php the_content(); ?>

        <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
          <div class="page-header">
            <h1>Wups!</h1>
          </div>

          <p>Looks like we have no content for this page?</p>

        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
