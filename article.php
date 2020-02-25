<?php
	/*
	Template Name: Статьи
	*/
?>
<?php
	$news = get_posts([
		'post_type' => 'article',
		'numberposts' => -1
	]);
?>
<?php get_header() ?>
    <div class="container">
        <section class="content section-page news">
            <h1 class="title"><?php echo $post->post_title ?></h1>
            <div class="breadcrumbs">
				<?php echo do_shortcode('[breadcrumbs]') ?>
            </div>
            <div class="list list--news">
				<?php foreach ($news as $item): ?>
					<?php $img = get_the_post_thumbnail_url($item) ?>
					<?php $link = get_permalink($item) ?>
                    <div class="item">
                        <div class="img"><img src="<?php echo $img ?>" alt=""></div>
                        <div class="title"><?php echo $item->post_title ?></div>
                        <a href="<?php echo $link ?>" class="link">Подробнее</a>
                    </div>
				<?php endforeach;
					unset($item) ?>
            </div>
        </section>
    </div>
<?php get_footer() ?>