<?php get_header(); ?>

<div class="container paginacompleta4">

	<div class="row espaciobajotitulo">
				<h1 class="page-header">
						<strong>Exposiciones & Concursos</strong>
				</h1>
		</div>
			<?php
				$arg = array(
					'post_type'		 => 'exposicion',
					'posts_per_page' => -1
				);

				$get_arg = new WP_Query( $arg );

				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>
        <?php get_template_part('_includes/loop','exposiciones'); ?>
			<?php } wp_reset_postdata();?>
	</div>
</div>

<?php get_footer(); ?>
