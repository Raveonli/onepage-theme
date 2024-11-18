<?php if (have_rows('partenaires')) : ?>
  <section>
    <h1><?php esc_html_e('Partenaires', 'onepage'); ?></h1>
    <div class="carrousel-container">
      <div class="partner-carousel">
        <?php display_partner_details(); ?>
      </div>
    </div>
  </section>
<?php endif; ?>