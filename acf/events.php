<!-- Section Événements -->
<section class="section-evenements">
  <div class="container">
    <h1><?php esc_html_e('Nos événements', 'onepage'); ?></h1>
    <?php
    $args = array(
      'post_type' => 'evenement',
      'posts_per_page' => -1,
      'meta_key' => 'event_date',
      'orderby' => 'meta_value',
      'order' => 'ASC'
    );
    $events = new WP_Query($args);
    ?>
    <?php if ($events->have_posts()): ?>
      <div class="events-grid">
        <?php while ($events->have_posts()): $events->the_post(); ?>
          <div class="event-card">
            <?php if (has_post_thumbnail()): ?>
              <div class="event-thumbnail">
                <?php the_post_thumbnail('medium'); ?>
              </div>
            <?php endif; ?>
            <?php display_event_details(get_the_ID()); ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>