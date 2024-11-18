<?php get_header(); ?>

<main>
    <?php get_template_part('acf/slider') ?>
    <section class="one-page">
        <div class="box">
            <h1><?php esc_html_e('One Page', 'onepage'); ?></h1>
            <p><?php esc_html_e("Je n'ai qu'un jour pour visiter Paris. Je suis l'itinéraire donné par Pierre, un ami français. Je commence par un petit-déjeuner dans un café près de l'Arc de Triomphe avec des croissants délicieux. Après une marche sur les Champs-Élysées, je suis au pied de la Tour Eiffel. Il y a beaucoup d'attente pour les ascenseurs (pour monter les étages) mais je suis enfin au sommet et peux apprécier la vue sur Paris.", 'onepage'); ?></p>
            <p><?php esc_html_e("L'après-midi je me promène aux Tuileries, paradis de verdure au cœur de la capitale. Je suis fatiguée et préfère prendre le métro pour aller à l'Île de la Cité. En visitant la cathédrale Notre-Dame de Paris je pense à Quasimodo, personnage du roman de Victor Hugo. Encore le métro, et je contemple la splendide façade de l'Opéra Garnier. C'est le quartier des beaux magasins et des produits de grandes marques.", 'onepage'); ?></p>
        </div>
    </section>
    <section class="galerie">
        <?php
        get_template_part('acf/galerie')

        ?>

    </section>

    <?php get_template_part('acf/events') ?>

    <section id="contact" class="contact">
        <div class="container">
            <?php get_template_part('contact') ?>
        </div>
        <div class="container">
            <?php
            echo do_shortcode('[gravityform id="1" title="false" description="false"]');
            ?>
        </div>
    </section>

    <?php get_template_part('acf/partenaire') ?>

</main>

<?php get_footer(); ?>