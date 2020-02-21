<?php
/*
Template Name: Главная
*/
?>
<?php
	$icons = [
		['img' => 'img/icons/icon1.png', 'text' => 'Доставка по всей России в самые сжатые сроки'],
		['img' => 'img/icons/icon2.png', 'text' => 'Схемы работы по отсрочке платежа и предоплате'],
		['img' => 'img/icons/icon3.png', 'text' => 'Вся продукция перед отгрузкой проходит тестирование'],
		['img' => 'img/icons/icon4.png', 'text' => 'Вся продукция подтверждена сертификатами и паспортами'],
	];
    $photos_page = get_page_data('photo');
    $photos = get_post_block_gallery_images($photos_page->ID);
    $photos_link = get_permalink($photos_page->ID);

    $clients = get_field('klienty');

    $news = get_posts([
        'post_type' => 'news',
        'numberposts' => 2
    ]);
    $news_page = get_page_data('news');
    $news_link = get_permalink($news_page->ID);
?>
<?php get_header()?>
<div class="container">
	<section class="index-page promo">
		<div class="box box_text">
			<div class="title">ЭЛЕМЕНТЫ ТРУБОПРОВОДА И ТРУБОПРОВОДНАЯ АРМАТУРА С ДОСТАВКОЙ ПО ВСЕЙ РОССИИ</div>
			<div class="desc">Мы являемся одними из лучших поставщиков комплектующих к промышленному оборудованию</div>
			<div class="btn">
				<div class="button button--fill">Подробнее</div>
			</div>
		</div>
		<div class="box box_img">
			<img src="<?php get_uri('img/demo/slide1.png')?>" alt="#">
		</div>
	</section>
</div>
<section class="index-page icons">
	<div class="container">
		<div class="list">
			<?php foreach ($icons as $icon):?>
				<div class="icon">
					<div class="img"><img src="<?php get_uri($icon['img'])?>" alt="#"></div>
					<div class="text"><?php echo $icon['text']?></div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<div class="container">
	<section class="index-page catalog">
		<div class="section-title">
			<span>КАТАЛОГ ПРОДУКЦИИ</span>
			<p>Более 200 наименований товара</p>
		</div>
        <div class="list">
            <?php echo do_shortcode('[product_categories parent="0"]')?>
        </div>
	</section>
</div>
<section class="index-page photos">
    <div class="container">
        <div class="section-title">
            <span>ФОТО ГОТОВОЙ К ОТГРУЗКЕ ПРОДУКЦИИ</span>
            <p>Реальные фото нашей продукции</p>
        </div>
    </div>
    <div class="list">
        <div class="swiper-container index-photo-gallery">
            <div class="swiper-wrapper">
                <?php foreach ($photos as $photo):?>
                    <div class="swiper-slide" style="background-image:url('<?php echo $photo?>')"></div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="btn">
            <a href="<?php echo $photos_link?>" class="button button--fill">Посмотреть все фото</a>
        </div>
    </div>
</section>
<section class="index-page clients">
    <div class="container">
        <div class="section-title">
            <span>НАШИ КЛИЕНТЫ</span>
            <p>Нам доверяют крупные компании России</p>
        </div>
        <div class="list">
            <?php foreach ($clients as $client):?>
                <div class="item"><img src="<?php echo $client?>" alt="#"></div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<section class="index-page news">
    <div class="container">
        <div class="section-title">
            <span>НОВОСТИ</span>
            <p>Будьте в курсе событий</p>
        </div>
        <div class="list list--news">
		    <?php foreach ($news as $item):?>
			    <?php $img = get_the_post_thumbnail_url($item)?>
			    <?php $link = get_permalink($item)?>
                <div class="item">
                    <div class="img"><img src="<?php echo $img?>" alt=""></div>
                    <div class="title"><?php echo $item->post_title?></div>
                    <a href="<?php echo $link?>" class="link">Подробнее</a>
                </div>
		    <?php endforeach; unset($item)?>
        </div>
        <div class="btn">
            <a href="<?php echo $news_link?>" class="button button--fill">Перейти на страницу новостей</a>
        </div>
    </div>
</section>
<?php get_footer()?>


