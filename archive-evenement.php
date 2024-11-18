<?php get_header(); ?>

<!-- Section des événements -->
<section class="section-evenements">
  <div class="container">
    <h1><?php esc_html_e('Nos événements weeeeaa', 'onepage'); ?></h1>

    <!-- Titre de l'archive -->
    <h2 class="archive-title"><?php esc_html_e('Liste des événements à venir', 'onepage'); ?></h2>

    <?php
    if (have_posts()): ?>
      <div class="events-grid">
        <?php while (have_posts()): the_post(); ?>
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

      <!-- Pagination, si nécessaire -->
      <div class="pagination">
        <?php
        the_posts_pagination(array(
          'mid_size' => 2,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
        ));
        ?>
      </div>

    <?php else: ?>
      <p><?php esc_html_e('Aucun événement trouvé.', 'onepage'); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>