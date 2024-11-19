<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function onepage_enqueue_styles()
{
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'onepage_enqueue_styles');

function enqueue_jquery()
{
  if (!wp_script_is('jquery', 'enqueued')) {
    wp_enqueue_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_jquery', 5);

function nav_scripts()
{
  wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'nav_scripts');


function enqueue_slick_assets()
{
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
  wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);
  wp_enqueue_script('slick-init', get_template_directory_uri() . '/js/slick-init.js', array('slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_assets');

function enqueue_swiper_assets()
{
  if (is_page(array(8, 104))) {
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('swiper-init', get_template_directory_uri() . '/js/swiper-init.js', array('swiper-js'), null, true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

function enqueue_fancybox_assets()
{
  if (is_page(array(8, 104))) {
    wp_enqueue_style('fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
    wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox-init', get_template_directory_uri() . '/js/fancybox-init.js', array('fancybox-js'), null, true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_fancybox_assets');

function register_my_menu()
{
  register_nav_menu('primary', __('main-menu'));
}
add_action('init', 'register_my_menu');


// 
// Récupération et d’affichage des champs ACF
// 
function display_event_details($post_id)
{
  $event_date = get_field('event_date', $post_id);
  $event_location = get_field('event_location', $post_id);
?>
  <div class="event-info">
    <h2><a href="<?php the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a></h2>
    <?php if ($event_date): ?>
      <div class="event-date">
        <?php echo date_i18n('j F Y', strtotime($event_date)); ?>
      </div>
    <?php endif; ?>
    <?php if ($event_location): ?>
      <div class="event-location">
        <?php echo $event_location; ?>
      </div>
    <?php endif; ?>
    <a href="<?php the_permalink($post_id); ?>" class="button"><?php esc_html_e('En savoir plus', 'onepage'); ?></a>
  </div>
  <?php
}



function display_partner_details()
{
  if (have_rows('partenaires')) {
    while (have_rows('partenaires')) : the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('logo');
      $url = get_sub_field('urls');

      if ($image && isset($image['url'])) {
        $imageurl = $image['url'];
  ?>
        <?php echo $url; ?>
        <div class="slider-logo">
          <a href="<?php echo esc_url($url); ?>" target="_blank">
            <img src="<?php echo esc_url($imageurl); ?>" alt="<?php echo esc_attr($title); ?>">
          </a>
        </div>
<?php
      }
    endwhile;
  }
}


function display_galerie_acf($field_name)
{
  $galerie = get_field($field_name);
  if ($galerie) {
    echo '<h1>' . esc_html__('Notre Galerie', 'onepage') . '</h1>';
    echo '<section class="section-galerie">';
    foreach ($galerie as $image) {
      echo '<div class="image-gallery">';
      echo '<a href="' . esc_url($image['url']) . '" data-fancybox="gallery" data-caption="' . esc_attr($image['title']) . '">';
      echo '<img src="' . esc_url($image['sizes']['thumbnail']) . '" alt="' . esc_attr($image['alt']) . '" title="' . esc_attr($image['title']) . '">';
      echo '</a>';
      echo '</div>';
    }
    echo '</section>';
  }
}


function test3()
{
  echo 'test';
}
