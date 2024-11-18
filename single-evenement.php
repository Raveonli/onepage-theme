<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="event-single">
            <h1><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="event-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="event-meta">
                <?php if (get_field('event_date')) : ?>
                    <div class="event-date">
                        <strong>Date :</strong> 
                        <?php echo date_i18n('j F Y', strtotime(get_field('event_date'))); ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('event_time')) : ?>
                    <div class="event-time">
                        <strong>Heure :</strong> 
                        <?php echo get_field('event_time'); ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('event_location')) : ?>
                    <div class="event-location">
                        <strong>Lieu :</strong> 
                        <?php echo get_field('event_location'); ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('event_price')) : ?>
                    <div class="event-price">
                        <strong>Prix :</strong> 
                        <?php echo get_field('event_price'); ?> €
                    </div>
                <?php endif; ?>

                <?php if (get_field('event_registration_link')) : ?>
                    <div class="event-registration">
                        <a href="<?php echo get_field('event_registration_link'); ?>" 
                           class="button" 
                           target="_blank">
                            S'inscrire à l'événement
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="event-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
