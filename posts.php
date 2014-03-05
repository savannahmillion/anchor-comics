<?php theme_include('header'); ?>


<article id="main-content">
        
        <h2>
        <?php echo page_title(); ?>
        </h2>
        
        <article id="archive">
        <?php if(has_posts()) : while(posts()) : ?>
            
            <p>
                <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a><br>
            </p>
        <?php endwhile; endif; ?>                
        </article>
        
        
    </article>


<?php theme_include('footer'); ?>