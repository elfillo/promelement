<?php
/*
Template Name: Новость
Template Post Type: news
*/
?>
<?php
$parent_id = get_page_data('news')->ID;
$post->post_parent = $parent_id;
?>
<?php get_header()?>
	<div class="container">
		<section class="content section-page news">
			<h1 class="title"><?php echo $post->post_title?></h1>
			<div class="breadcrumbs">
				<?php echo do_shortcode('[breadcrumbs]')?>
			</div>
			<?php echo apply_filters( 'the_content', $post->post_content)?>
		</section>
	</div>
<?php get_footer()?>