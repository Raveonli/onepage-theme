<?php

/**
 * @package onepage
 */
?>

<footer id="colophon" class="site-footer">
	<div class="footer-widgets">
		<?php if (is_active_sidebar('footer-1')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('footer-2')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('footer-3')) : ?>
			<div class="footer-widget-area">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="site-info">
		<p>© <?php echo date('Y'); ?> onepage. Tous droits réservés.</p>
		<p>Développé par <a href="https://https://23tr345wejfu89.isaac-aristil.com/">onepage</a></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>