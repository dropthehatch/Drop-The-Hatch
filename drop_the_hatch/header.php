<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header class="main-navbar">
    <div id="logoContainer">
      <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/H_Logo.svg" alt="logo" class="logosvg"></img></a>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo site_url('/photography');?>">Photography</a></li>
        <li><a href="<?php echo site_url('/design');?>">Design</a></li>
        <li><a href="<?php echo site_url('/about');?>">About</a></li>
        <li><a href="<?php echo site_url('/blog');?>">Blog</a></li>
      </ul>
    </nav>
</header>    
