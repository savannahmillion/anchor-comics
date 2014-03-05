<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>
        <?php echo page_title("Page can't be found"); ?> - <?php echo site_name(); ?>
    </title>
    
    <!-- Asset Links -->
    <link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Domine:400,700|Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.png'); ?>">

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Anchor CMS">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
    
    <!-- Social Media -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
</head>

    
<body>

    <header>
        <div class="width-wrapper">
        <h1><a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a></h1>
        
        <?php if(has_menu_items()) : ?>
            <nav role="main">
                <ul>
        <?php while(menu_items()) : ?>
            <li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
        <?php endwhile; ?>
                </ul>
            </nav>
<?php endif; ?>
        
        </div>
    </header>