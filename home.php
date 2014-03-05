<?php theme_include('header'); ?>

<article id="main-content">
    <h2><?php echo page_title(); ?></h2>
    
    <?php while(theme_latest_posts()): ?>
    <?php echo article_title(); ?>
    <?php endwhile; ?>
   
</article>

<?php theme_include('footer'); ?>