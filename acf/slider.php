<?php
if (have_rows('composants')) :
  while (have_rows('composants')) : the_row();
    if (get_row_layout() == 'slider') :
      if (have_rows('slides')) :
?>
        <div class="slider-container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
              while (have_rows('slides')) : the_row();
                $image = get_sub_field('slide_image');
                $title = get_sub_field('slide_title');
                $description = get_sub_field('slide_description');

                if ($image && isset($image['url'])) {
                  $imageurl = $image['url'];
              ?>
                  <div class="swiper-slide">
                    <img src="<?php echo $imageurl; ?>" alt="<?php echo $title; ?>">
                    <div class="slide-content">
                      <h2><?php echo $title; ?></h2>
                      <p><?php echo $description; ?></p>
                    </div>
                  </div>
              <?php
                }
              endwhile;
              ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
<?php
      endif;
    endif;
  endwhile;
endif;
?>