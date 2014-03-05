<?php theme_include('header'); ?>


<article id="main-content">
        
        <h2><?php echo article_title(); ?></h2>

        <?php

		$image = article_custom_field('image');
		if ( !empty($image) ) : ?>
		
        <img src="<?php echo $image; ?>" id="post">
    
	    <?php endif; ?>
        
        
        <div id="share-me">
            <ul>
                <li><a href="#" target="_blank">tweet me</a></li>
                <li><a href="#" target="_blank">like me</a></li>
            </ul>
        </div>
        
        <article id="description">
            
            <p id="date">By <?php echo article_author(); ?> on <?php echo article_date(); ?></p>
            
            <img id="description-avatar" src="../content/avatar.jpg">
            
            <p><?php echo article_markdown(); ?></p>
                        
            <div id="social">
                <ul>
                    <li class="twitter"><a href="#" target="_blank"></a></li>
                    <li class="facebook"><a href="#" target="_blank"></a></li>
                    <li class="tumblr"><a href="#" target="_blank"></a></li>
                </ul>
            </div>
        
        </article>
        
        
    </article>


<?php theme_include('footer'); ?>