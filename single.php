<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
        
                
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div> 
                </div>
                  <?php get_template_part('template-parts/post','navigation'); ?>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>