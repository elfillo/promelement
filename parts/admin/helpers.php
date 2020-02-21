<?php
function dd($var, $dumb = 0){
	echo '<pre>';
	if($dumb){
		var_dump($var);
	}else{
		print_r($var);
	}
	echo '</pre>';
}

function get_page_data($page){
	$pages = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => $page.'.php'
	));

	return $pages[0];
}

function get_uri($path){
	echo get_template_directory_uri() . '/' . $path;
}

function get_post_block_gallery_images( $post = 0 ) {
	$post = get_post( $post );
	//$post = get_page_data('photo');

	// Запись не нашлась - возвращаем пустой массив
	if ( ! is_a( $post, 'WP_Post' ) ) {
		return [];
	}

	// Блок "Галерея" не нашелся - возвращаем пустой массив
	if ( ! has_block( 'gallery', $post->post_content ) ) {
		return [];
	}

	// Ищем все блоки в контенте
	$post_blocks = parse_blocks( $post->post_content );

	// Перебираем все блоки в поисках нужного
	foreach ( $post_blocks as $block ) {
		// Ищем блок "Галерея" с переданными ID изображений
		if ( $block['blockName'] === 'core/gallery' && ! empty( $block['attrs']['ids'] ) ) {
			return array_map( function ( $image_id ) {
				// Получаем ссылку на оригинал изображения
				return wp_get_attachment_image_url( $image_id, 'full' );
			}, $block['attrs']['ids'] );
		}
	}

	// Если блок "Галерея" не нашелся - возвращаем пустой массив
	return [];
}
?>