<?php
/**
 * The template for displaying the footer
 *
 * @package Automobile Hub
 * @subpackage automobile_hub
 */

?>

		</div>
		<footer id="footer" class="site-footer" role="contentinfo">
			<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				get_template_part( 'template-parts/footer/site', 'info' );
			?>
					<div class="return-to-header">
						<a href="javascript:" id="return-to-top"><i class="<?php echo esc_attr(get_theme_mod('automobile_hub_return_icon','fas fa-arrow-up')); ?>"></i></a>
					</div>
		</footer>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
