<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<div data-wf-page="61a644c49f4ce98a8f076678" data-wf-site="61a644c49f4ce955f607666b" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
<div class="columns-2 w-row">
    <div class="column-7 w-col w-col-6 w-col-stack">
      <div class="product-image w-row">
         <?php  
            wc_get_template('single-product/product-image.php');
         ?>
      </div>
    </div>
    <div class="column-8 w-col w-col-6 w-col-stack">
      <div class="container-2 w-container">
        <h1 class="product-detail-name product-page-title"></h1>
        <h3 class="heading-8"><em class="heading-3">For effortlessly long &amp; healthy hair</em></h3>
        <?php echo do_shortcode('[Woo_stamped_io type="badge"]'); ?>
        <!-- <img src="<?php //bloginfo( 'template_directory'); ?>/images/reviews.png" loading="lazy" width="182" alt=""> -->
      </div>
      <div class="add-to-cart w-clearfix">
		 
	  

<?php	 

if ( ! $product->is_purchasable() ) {
	return;
}
 echo wc_get_stock_html( $product ); // WPCS: XSS ok. 

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart cart w-commerce-commerceaddtocartform default-state top-cart" data-node-type="commerce-add-to-cart-form" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<div class="product-detail-cta-wrap">
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				'classes' => 'w-commerce-commerceaddtocartquantityinput text-field cc-quantity-field w-node-_4140039d-b3fe-365f-a921-f7389ec57624-8f076678',
				'input_id' => 'quantity-5b57c5055bc678f0fcfd8773bbeda279',
				'input_name' => 'commerce-add-to-cart-quantity-input'
				)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt w-commerce-commerceaddtocartbutton button cc-add-to-cart-btn cart-banner">Add To Cart<?php //echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		<div class="product-detail-price">$<?php echo $product->get_price();?></div>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</div>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
<?php endif; ?>

        <div style="display:none" class="w-commerce-commerceaddtocartoutofstock">
          <div>This product is out of stock.</div>
        </div>
        <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror">
          <div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div>
        </div>
      </div>
      <div class="product-detail-main-details">
        <div class="heading-6">60 gummies per bottle</div>
        <div class="paragraph-light"></div>
        <div class="sales-feature">Free Two-Day Shipping •  30-Day Money Back Guarantee</div>
        <div class="container-3 w-container"><img src="<?php bloginfo( 'template_directory'); ?>/images/001-facebook-blackberry.png" loading="lazy" width="28" height="28" alt="Share on Facebook">
          <div class="social-share-link">SHARE</div><img src="<?php bloginfo( 'template_directory'); ?>/images/002-twitter-blackberry.png" loading="lazy" alt="Share on Facebook" height="28">
          <div class="social-share-link">TWEET</div><img src="<?php bloginfo( 'template_directory'); ?>/images/003-pinterest-blackberry.png" loading="lazy" width="28" height="28" alt="Pin on Pinterest">
          <div class="social-share-link">PIN</div>
        </div>
      </div>
    </div>
  </div>
  <div data-w-id="c550e2a0-8e5c-4e49-1410-6f1edaa7ef82" style="display:none;opacity:0" class="section-6 wf-section">
    <div class="div-block-9">
      <h1 class="product-detail-name"></h1><img src="<?php bloginfo( 'template_directory');?>/images/submark-rose.png" loading="lazy" width="60" height="60" srcset="<?php bloginfo('template_directory')?>/images/submark-rose-p-500.png 500w, <?php bloginfo('template_directory')?>/images/submark-rose-p-800.png 800w, <?php bloginfo('template_directory')?>/images/submark-rose-p-1080.png 1080w, <?php bloginfo('template_directory')?>/images/submark-rose.png 1920w" sizes="(max-width: 479px) 100vw, 60px" alt="" class="image-5">
      <div data-w-id="e95568c5-0496-b580-f078-816b0609667e" style="opacity:0" class="add-to-cart w-clearfix">
      
      <form class="cart w-commerce-commerceaddtocartform default-state" data-node-type="commerce-add-to-cart-form" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		    <div class="product-detail-cta-wrap">
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				'classes' => 'w-commerce-commerceaddtocartquantityinput text-field cc-quantity-field w-node-_4140039d-b3fe-365f-a921-f7389ec57624-8f076678',
				'input_id' => 'quantity-5b57c5055bc678f0fcfd8773bbeda279',
				'input_name' => 'commerce-add-to-cart-quantity-input'
				)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" data-node-type="commerce-add-to-cart-button" data-loading-text="Adding to cart..." value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt w-commerce-commerceaddtocartbutton button cc-add-to-cart-btn cart-banner">Add To Cart<?php //echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    <div class="product-detail-price">$<?php echo $product->get_price();?></div>
	</div>
	</form>
        <div style="display:none" class="w-commerce-commerceaddtocartoutofstock">
          <div>This product is out of stock.</div>
        </div>
        <div data-node-type="commerce-add-to-cart-error" style="display:none" class="w-commerce-commerceaddtocarterror">
          <div data-node-type="commerce-add-to-cart-error" data-w-add-to-cart-quantity-error="Product is not available in this quantity." data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart." data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription." data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item." data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site." data-w-add-to-cart-select-all-options-error="Please select an option in each set.">Product is not available in this quantity.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-2 wf-section">
    <div class="w-row">
      <div class="column-9 w-col w-col-6">
        <div class="container-4 w-container">
          <div class="div-block-7"></div>
          <div class="heading-2">THE <em>ULTIMATE</em> HAIR VITAMIN</div>
          <p class="paragraph-light">Finally, a <em>nutrient-packed</em> multivitamin like no other.<br></p>
          <p class="paragraph-light">Carefully formulated to support longer, thicker, stronger hair with all the <strong class="bold-text">essential nutrients</strong> you need most. <br>‍<br>Ditch conventional hair supplements that <em>only contain biotin</em>. <br><br>Choose our high-quality formula that targets<strong> multiple root causes of thinning hair </strong>while ditching the pink tax so you can enjoy the essentials of great health without unjustified gender-based pricing. <br><br>Sure, genetics plays a role, but so do vitamins.  <br><br>Whether your goals are preventative or part of a responsive regimen, you can have the best hair possible with the right resource: Long Hair Don’t Care Multivitamin Gummies.</p>
        </div>
      </div>
      <div class="w-col w-col-6">
        <div class="container-5 w-container"><img src="<?php bloginfo( 'template_directory'); ?>/images/full-cloud.png" loading="lazy" width="200" sizes="(max-width: 479px) 50vw, (max-width: 767px) 40vw, 20vw" srcset="<?php bloginfo('template_directory')?>/images/full-cloud-p-500.png 500w, <?php bloginfo('template_directory')?>/images/full-cloud-p-800.png 800w, <?php bloginfo('template_directory')?>/images/full-cloud-p-1080.png 1080w, <?php bloginfo('template_directory')?>/images/full-cloud.png 1920w" alt="" class="image-2"></div>
      </div>
    </div>
  </div>
  <div class="section-3 wf-section">
    <div class="columns w-row">
      <div class="column w-col w-col-4">
        <div data-w-id="ad2d2926-91c8-d6cf-ff20-f060ec5e577e" style="opacity:0" class="div-block-8"><img src="<?php bloginfo( 'template_directory'); ?>/images/GMP.png" loading="lazy" width="100" height="100" alt="" class="image-3">
          <div class="paragraph-small">Manufactured in FDA Approved, GMP Certified Facilities</div>
        </div>
      </div>
      <div class="column-2 w-col w-col-4">
        <div data-w-id="257696b0-8876-1fa9-6ae0-86e6615fefbb" style="opacity:0" class="div-block-8"><img src="<?php bloginfo( 'template_directory'); ?>/images/004-vegetarian.png" loading="lazy" width="100" height="100" alt="" class="benefit-image image-3">
          <div class="paragraph-small">Made with plant based, cruelty-free, non-GMO natural ingredients</div>
        </div>
      </div>
      <div class="column-3 w-col w-col-4">
        <div data-w-id="20987661-c7c3-364c-b63c-b90ef77eb694" style="opacity:0" class="div-block-8"><img src="<?php bloginfo( 'template_directory'); ?>/images/001-united-states-of-america.png" loading="lazy" width="100" height="100" alt="" class="benefit-image">
          <div class="paragraph-small">Our products are formulated right here in Sunny Florida, USA!</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-4 wf-section">
    <div class="loop-text-outer">
      <div data-w-id="66850b02-8de2-2690-6810-2173a56d1600" style="-webkit-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="loop-text-inner hair-skin-nails-beyond">
        <h1 class="scroll">HAIR, SKIN, NAILS &amp; BEYOND • </h1>
        <h1 class="scroll"> HAIR, SKIN, NAILS &amp; BEYOND • </h1>
        <h1 class="scroll">HAIR, SKIN, NAILS &amp; BEYOND • </h1>
        <h1 class="scroll"> HAIR, SKIN, NAILS &amp; BEYOND • </h1>
      </div>
    </div>
  </div>
  <div class="section-5 wf-section">
    <div class="w-row">
      <div class="column-11 w-col w-col-6"></div>
      <div class="column-4 w-col w-col-6">
        <div class="heading-2">KEY VITAMINS</div>
        <h3 class="heading-8">For Holistic Hair Health</h3>
        <p class="paragraph">Despite an abundant food supply, American women are deficient in many crucial vitamins. <br><br>An increase in the intake of processed foods, a decline in nutrient-rich soil, and improperly balanced diets mean women benefit from a high-quality, drug-free, safe vitamin formula specifically designed for healthy hair, skin, and nails.</p>
      </div>
    </div>
  </div>
  <div class="wf-section">
    <div class="w-row">
      <div class="column-5 w-col w-col-4">
        <div data-w-id="f6ffc98c-325f-4eda-2982-9d3685386706" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/cherries.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN A</h5>
          <div class="paragraph-small">Also called retinol, this anti-aging powerhouse supports sebum secretion to <strong>promote moisture, scalp health and minimize hair breakage.</strong></div>
        </div>
        <div data-w-id="4b2d12cf-c7c6-b661-3f61-13c78324e768" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/jirasin-yossri-nLBw1ZMyPQg-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN E</h5>
          <div class="paragraph-small">Increase capillary circulation and neutralize oxidative stress on hair follicles to <strong>support a healthy scalp</strong> and put an end to lackluster hair.</div>
        </div>
        <div data-w-id="e867b604-af7f-4b98-534b-eee59f52fc2c" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/daniele-levis-pelusi-j6vhgKlq4Ak-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>BIOTIN</h5>
          <div class="paragraph-small">Sometimes called vitamin H for its link to hair health, this B vitamin <strong>stimulates keratin production and faster follicle growth</strong>.</div>
        </div>
        <div data-w-id="43e961ec-0b83-176f-dbf3-ac4c32f0cea3" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/annie-spratt-fxbzT96KzOo-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>FOLIC ACID</h5>
          <div class="paragraph-small"><strong>Vital to healthy cellular growth and maintenance</strong>, folic acid is essential to nourish the replenishment of healthy skin, hair, and nails.</div>
        </div>
      </div>
      <div class="column-6 w-col w-col-4">
        <div data-w-id="88365ba5-323c-b9a8-fd26-074ea966dcc0" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/grapefruit.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN C</h5>
          <div class="paragraph-small">A famously powerful antioxidant that <strong>helps your body create collagen</strong>, a protein necessary for strong hair and the absorption of iron for hair growth.</div>
        </div>
        <div data-w-id="6147f1f9-2de5-ccb5-77c5-0b8002a8fe63" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/giorgio-trovato-fczCr7MdE7U-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN B6</h5>
          <div class="paragraph-small">This protein metabolism booster ensures <strong>cellular access to the building blocks of life</strong> (amino acids) that grow strong, healthy hair.</div>
        </div>
        <div data-w-id="14e504b0-aa65-7ca6-b1b6-52376cd6ec26" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/kelly-sikkema-UuoovtKdlLA-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5 class="heading-9">PANTOTHENIC <br>ACID</h5>
          <div class="paragraph-small">The ‘anti-stress’ B vitamin that regulates hormones <strong>helps to reduce premature graying and hair loss</strong> due to stress.</div>
        </div>
      </div>
      <div class="w-col w-col-4">
        <div data-w-id="2a5f1c41-5b18-564d-b012-88988733c227" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/ivan-torres-AXz346Rhs6A-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN D</h5>
          <div class="paragraph-small">One of the most common vitamin deficiencies, this vital sunshiny nutrient ends stunted hair growth by <strong>stimulating new &amp; old hair follicles.</strong></div>
        </div>
        <div data-w-id="62dccde7-b132-2f0b-d24e-1edad88af134" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/kristina-flour-J5S6SJzjyrk-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>VITAMIN B12</h5>
          <div class="paragraph-small">A famously powerful antioxidant that <strong>helps your body create collagen</strong>, a protein necessary for strong hair and the absorption of iron for hair growth.</div>
        </div>
        <div data-w-id="cd05e583-54d6-1f62-8d9f-bede079c2d59" style="opacity:0" class="vitamin-block"><img src="<?php bloginfo( 'template_directory'); ?>/images/rebecca-orlov-epic-playdate-0r5PprYjChg-unsplash.jpg" loading="lazy" width="150" height="150" alt="" class="image-3 vitamin-image">
          <h5>ZINC</h5>
          <div class="paragraph-small">Essential, not only to hair growth but for hair repair, zinc plays a key role in the <strong>production of protein essential for healthy hair.</strong></div>
        </div>
      </div>
    </div>
  </div>
  <div class="we-care-about-you wf-section">
    <div class="columns-3 w-row">
      <div class="column-9 w-col w-col-6">
        <div class="container-4 w-container">
          <div class="div-block-7"></div>
          <div class="heading-2 we-care-heading">WE CARE ABOUT YOU</div>
          <p class="paragraph-light we-care-paragraph">Products Made With Heart<br></p>
          <ul role="list" class="w-list-unstyled">
            <li class="we-care-list-item">- RECYCLABLE PACKAGING</li>
            <li class="we-care-list-item">- CRUELTY-FREE &amp; VEGETARIAN</li>
            <li class="we-care-list-item">- GMP &amp; FDA CERTIFIED</li>
            <li class="we-care-list-item">- NON-GMO INGREDIENTS</li>
            <li class="we-care-list-item">- MADE IN THE USA</li>
            <li class="we-care-list-item">- GLUTEN-FREE VITAMINS</li>
          </ul>
        </div>
      </div>
      <div class="column-10 w-col w-col-6">
        <div class="container-5 we-care-about-you w-container"><img class="image-2 we-care-sticker" src="<?php bloginfo( 'template_directory'); ?>/images/lettermark-rose.png" width="200" alt="" style="opacity:0" sizes="(max-width: 767px) 35vw, 20vw" data-w-id="594c5ff6-ecc9-6f60-fef7-b7573791292c" loading="lazy" srcset="<?php bloginfo('template_directory')?>/images/lettermark-rose-p-500.png 500w, <?php bloginfo('template_directory')?>/images/lettermark-rose-p-800.png 800w, <?php bloginfo('template_directory')?>/images/lettermark-rose-p-1080.png 1080w, <?php bloginfo('template_directory')?>/images/lettermark-rose.png 1920w"></div>
      </div>
    </div>
  </div>
  <div class="our-story wf-section">
    <div class="w-row">
      <div class="column-9 w-col w-col-6">
        <div class="container-6 w-container"><img src="<?php bloginfo('template_directory');?>/images/long-hair-dont-care-sunflowers.jpg" loading="lazy" sizes="100vw" srcset="<?php bloginfo('template_directory')?>/images/long-hair-dont-care-sunflowers-p-500.jpeg 500w, <?php bloginfo('template_directory')?>/images/long-hair-dont-care-sunflowers.jpg 800w" alt="" class="image-6"></div>
      </div>
      <div class="column-12 w-col w-col-6">
        <div class="container-4 our-story-description w-container">
          <div class="heading-2">Our LONG HAIR STORY</div>
          <p class="paragraph-light our-story-hashtag"><strong><em>#banthepinktax</em></strong><br></p>
          <p class="paragraph-light">We wanted to put an end to the unjustifiable pink tax that leads to so many products with low quality and high prices as the status quo. <br><br>Our journey led us to create high-quality products we would trust with our own family. In doing so, our formula has become a form of protest - an effort at counterculture, raising the bar for quality without breaking the bank. <br><br><span class="text-span"><strong>That’s the Long Hair Don’t Care Promise: <br></strong></span><br>We make sure you have the best products for the lowest possible price because we believe in safe, fair, holistic solutions that work. <br><br>Find out more on our <span class="text-span-2">About Page</span>.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-4 faq-banner wf-section">
    <div class="loop-text-outer">
      <div data-w-id="59f6ed77-4d1a-c72c-0615-e2286bef5335" style="-webkit-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="loop-text-inner">
        <h1 class="scroll">FAQ • FAQ • FAQ • FAQ • FAQ • </h1>
        <h1 class="scroll">FAQ • FAQ • FAQ • FAQ • FAQ • </h1>
        <h1 class="scroll">FAQ • FAQ • FAQ • FAQ • FAQ • </h1>
        <h1 class="scroll">FAQ • FAQ • FAQ • FAQ • FAQ • </h1>
      </div>
    </div>
  </div>
</div>
<?php echo do_shortcode('[Woo_stamped_io type="widget"]'); ?>
<?php do_action( 'woocommerce_after_single_product' ); ?>
