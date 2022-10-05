<?php
/**
 * Template Name: Inicio Landing
 * @package pluriversidad_landing
 */

get_header();
$defoID = get_option('page_on_front');
$defo = get_post($defoID);
$institutos = get_children(
					array(
						'post_parent' 	=> 8,
						'orderby'		=> 'menu_order',
						'order'			=> 'ASC',
						'post_type'		=> 'page'
						)
					);
$kinst = 1;

$agenda = get_post(26);

?>

<main id="primary" class="site-main">
	<div class="section intro-text" id="intro">
		<div class="row">
			<div class="presentation">
				<?php echo apply_filters('the_content', $defo->post_content);?>
			</div>
			<div class="institutos-home">
					<h3>Institutos</h3>
				<?php foreach($institutos as $instituto):
					
					?>
					<a href="#<?php echo $instituto->post_name;?>">&gt; <?php echo $instituto->post_title;?></a>
				<?php endforeach;?>	
			</div>
			
		</div>
	</div>

	<h1 class="section-header">Agenda</h1>
	<section class="section agenda">
		
		<div class="agenda-content">
			<?php echo apply_filters('the_content', $agenda->post_content);?>
		</div>
	</section>

	<h1 class="section-header">Institutos</h1>

	<?php foreach($institutos as $instituto):
		$curinst = $kinst++;
		?>

		<section class="section instituto instituto-<?php echo ($curinst % 2 == 0 ? 'even' : 'odd');?>" id="<?php echo $instituto->post_name;?>">
			<div class="section-wrap">
				
				<h2><?php echo $instituto->post_title;?></h2>

				<div class="instituto-content">
					<?php echo apply_filters('the_content', $instituto->post_content);?>
				</div>
			</div>
		</section>

	<?php endforeach;?>

</main><!-- #main -->
<nav id="fixed-nav">
	<ul>
		<li>
			<a href="#intro">0</a>
		</li>
		<span>institutos</span>
	<?php 
		$navk = 1;
		foreach($institutos as $instituto): 
			$navinst = $navk++;
			?>
			<li>
				<a title="<?php echo $instituto->post_title;?>" href="#<?php echo $instituto->post_name;?>"><?php echo $navinst;?></a>
			</li>
		<?php endforeach;?>
	</ul>
</nav>
<?php

get_footer();
