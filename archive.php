<?php get_header( ); ?>

<div class="content">
    <div class="w-container">
        <div class="w-row">
            <div class="w-col-3">

                <!-- <div class="sticky-top" style="top: 50px;"> 
                    <?php// dynamic_sidebar('blog-sidebar'); ?>
                </div> -->

            </div>

            <div class="w-col-9 blog-content">
            <h1>Blogs</h1>
            

            
            <?php if(have_posts()): while(have_posts()): the_post();?>

          
            <div class="blog-post">
            <?php if(has_post_thumbnail()):?>
                <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url( 'post_image' ); ?>"  alt="<?php the_title();?>" class="img posts-image"/>
                </a>
            <?php endif; ?>

            <a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>
                <?php the_excerpt() ?>
            </div>
        
            <?php endwhile; else: endif; ?>

            <div class="pagination">
                <?php
                    $big = 999999999; // need an unlikely integer
                    
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages
                    ) );
                ?>
            </div>

            </div>
        </div>


    </div>
</div>
<?php get_footer(); ?>