<?php get_header(); ?>

<div class="container paginacompleta4">

	<div class="row espaciobajotitulo">
				<h1 class="page-header">
						<strong>Textos</strong>
				</h1>
		</div>
			<?php
				$arg = array(
					'post_type'		 => 'texto_type',
					'posts_per_page' => -1
				);

				$get_arg = new WP_Query( $arg );

				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>
        <?php get_template_part('_includes/loop','textos'); ?>
			<?php } wp_reset_postdata();?>
	</div>
</div>

<?php get_footer(); ?>
