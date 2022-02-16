<?php get_header( ); ?>

<div class="section cc-store-home-wrap">
    <div class="intro-header" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/hero.jpg);">
      <div class="intro-content">
        <div class="intro-text">
          <div class="heading-jumbo">Simply the ultimate hair vitamin<br></div>
          <div class="paragraph-bigger cc-bigger-light">Buy One Get One 50% Off. Limited Time<br></div>
        </div>
        <a href="<?php bloginfo( "url" ) ?>/product/hair-vitalizing-vitamins/" class="button cc-white-button w-inline-block">
          <div>Shop Now</div>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="main-heading-wrap">
        <h1>Effective, Healthy, Natural. All In One Multivitamin!</h1>
        <!-- <div class="paragraph-bigger cc-bigger-light">Talk about your business, your products, or yourself.<br></div> -->
      </div>
      <div class="divider"></div>
      <h1> Our Long Hair Story </h1>
      <div class="w-layout-grid main-paragraph-wrap">
        <p id="w-node-_56f2b96e-ae6e-7af1-6a3b-a2d7387904db-cf07666e" class="paragraph-light">
            We wanted to put an end to the unjustifiable pink tax that leads to so many products with low quality and high prices as the status quo. 
            Our journey led us to create high-quality products we would trust with our own family. In doing so, our formula has become a form of protest – an effort at counterculture, raising the bar for quality without breaking the bank. 
            That’s the Long Hair Don’t Care Promise: 
            We make sure you have the best products for the lowest possible price because we believe in safe, fair, holistic solutions that work. 
            Find out more on our <a style="display:inline;" href="<?php bloginfo('url');?>/about">About Page</a>
        </p>
        <p id="w-node-_56f2b96e-ae6e-7af1-6a3b-a2d7387904dd-cf07666e" class="paragraph-light">
            <img class="long-hair-story" src="<?php bloginfo( "template_directory" )?>/images/'FLUFFMEDIA--2-p-500.jpeg'" />
        </p>
      </div>
    </div>
    <div class="container">
      <div class="products-heading">
        <h3>Recent Blog Posts</h3>
        <div class="paragraph-bigger cc-bigger-light">Check out new and popular products</div>
      </div>
    </div>
    <div class="w-dyn-list">
      <div role="list" class="collection-wrap w-dyn-items">
      <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        
        
        
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>   
                <div role="listitem" class="collection-item w-dyn-item">
                    
                    <a class="product-image-wrap w-inline-block" style="background-image:url(<?php the_post_thumbnail_url( 'post_image' ); ?>);" href="<?php the_permalink(); ?>">
                        <!-- <img src="<?php// the_post_thumbnail_url( 'post_image' ); ?>"/> -->
                    </a>
                    <div class="product-description">
                    <div class="product-name-text"><?php the_title();?></div>
                    <a href="<?php the_permalink();?>"><div class="product-price-text"> <?php the_excerpt()  ?></div></a>
                     
                    </div>

                </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        
        
        
            <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <div class="status-message cc-no-data w-dyn-empty">
                <div>No items found.</div>
            </div>
        <?php endif; ?>

        <!-- <div role="listitem" class="collection-item w-dyn-item">
          <a href="#" class="product-image-wrap w-inline-block">
            <div class="product-description">
              <div class="product-name-text"></div>
              <div class="product-price-text"></div>
            </div>
          </a>
        </div> -->
      </div>



  
    </div>
  </div>
  <div class="section cc-subscribe-form">
    <div class="container cc-subscription-form">
      <div class="heading-jumbo-small">Monthly Newsletter</div>
      <div class="paragraph-light cc-subscribe-paragraph">Sign up to receive updates from our shop, including new tea selections and upcoming events.</div>
      <div class="form-block w-form">
        <form id="wf-form-Monthly-Newsletter-Form" name="wf-form-Monthly-Newsletter-Form" data-name="Monthly Newsletter Form" method="get" class="subscribe-form"><input type="email" class="text-field cc-subscribe-text-field w-input" maxlength="256" name="Newsletter-Email" data-name="Newsletter Email" placeholder="Enter your email" id="Newsletter-Email" required=""><input type="submit" value="Submit" data-wait="Please wait..." class="button w-button"></form>
        <div class="status-message w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="status-message w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>