<?php get_header("hair vitamins"); ?>
<div class="section">
    <div class="container cc-heading-wrap">
        <h1>Our Products</h1>
        <div class="store-categories-wrap">
            <a href="#products" aria-content="page" class="products-category-link w--current">All Products</a>
            <div class="w-dyn-list">
                <div role="list" class="collection-list w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                        <a href="#" class="products-category-link">
                        </a>    
                    </div>
                </div>
                <!-- <div class="status-message w-dyn-empty">
                    <div>No items found.</div>
                </div>   -->
            </div>
        </div>
    </div>
</div>

<div class="section">

            <div class="w-dyn-list">
                <div role="list" class="collection-wrap w-dyn-items">
<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            // wc_get_template_part( 'content', 'product' );
            ?>
            <div role="listitem" class="collection-item w-dyn-item">
            <a href="<?php the_permalink() ?>"class="products-image-wrap w-inline-block"
            data-w-id='["64a890ca-4bc6-8571-32de-d3b38eea1ef4_instance-0"]'
            style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
            <img src="<?php echo the_post_thumbnail_url() ?>" class="img shop-grid-photo"/>
                <div class="product-description">
                    <div class="product-name-text"><?php the_title() ?></div>
                    <div class="product-price-text">$<?php echo $product->get_regular_price(); ?></div>
                </div>
            </a>    
        </div>
    <?php
        endwhile;
    } else {
        echo __( 'No products found' );
    }
         wp_reset_postdata();
    ?>


   
                </div>
                <!-- <div class="status-message w-dyn-empty">
                    <div>No items found.</div>
                </div>   -->
            </div>
</div>
<?php get_footer(); ?>