<?php get_header()?>
	<div class="container">
		<section class="content section-page">
			<h1 class="title"><?php echo $post->post_title?></h1>
            <div class="breadcrumbs">
	            <?php echo do_shortcode('[breadcrumbs]')?>
            </div>
			<?php echo apply_filters( 'the_content', $post->post_content)?>
		</section>
	</div>
<?php get_footer()?>