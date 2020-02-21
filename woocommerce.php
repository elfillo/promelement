<?php
    global $wp_query;
    $cat_id = null;
    $cat_name = '';

    $wpq = $wp_query->get_queried_object();
    if(isset($wpq->term_id)){
	    $cat_id =  $wpq->term_id;
	    $cat_name = $wpq->name;
    }
?>
<?php get_header()?>
	<div class="container container--shop">
        <div class="content">
            <div class="shop-header">
                <div class="box box_breadcrumbs">
                    <h1><?php echo $cat_name?></h1>
                    <div class="breadcrumbs">
		                <?php woocommerce_breadcrumb()?>
                    </div>
                </div>
                <div class="box box_search">
	                <?php echo do_shortcode('[wcas-search-form]'); ?>
                </div>
            </div>
            <div class="categories">
                <?php echo do_shortcode('[product_categories parent="'.$cat_id.'" columns="4"]')?>
            </div>
	        <?php woocommerce_content(); ?>
        </div>
	</div>
<?php get_footer()?>