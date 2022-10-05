<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pluriversidad_landing
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<?php pluri_landing_post_thumbnail(); ?>

	<div class="entry-content">
		
		<div class="event-data">
		<?php 


			$event_fields = array(
				'Link'  			=> get_field('enlace_principal', $post->ID, true),
				'Lugar'				=> get_field('lugar', $post->ID,  true),
				'País / Ciudad'		=> get_field('ciudad_pais', $post->ID, true),
				'Inicio'			=> get_field('fecha_inicio', $post->ID, true),
				'Fin'				=> get_field('fecha_fin', $post->ID,true),
				'Hora'				=> get_field('hora', $post->ID, true),
			);

			foreach($event_fields as $key=>$event_field) {
				echo '<p class="event-field"><strong>' . $key . ':</strong> ' . $event_field . '</p>';
			}	
		?>
		</div>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pluri_landing' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pluri_landing' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pluri_landing_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
