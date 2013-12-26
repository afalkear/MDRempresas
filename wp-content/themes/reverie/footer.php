	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width sticky-footer" role="contentinfo">
	<div class="row light-gray full-width-row">
		<div class="large-12 small-centered columns" id="utility-menu-container">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div>
	<div class="row dark-gray full-width-row footer-space ">
		<div class="large-12 small-centered text-center columns">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_derose_pequeno.png" alt="Logo Método DeRose">
		</div>
	</div>
	<div class="row dark-gray full-width-row footer-space last-footer">
		<div class="large-12 small-centered text-center columns">
				M&eacute;todo DeRose
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>