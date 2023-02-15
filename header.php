<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title>
        <?php wp_title('|','true','right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <link rel= "pingback" href= "<?php bloginfo('pingback_url');?>"/>
    <?php wp_head() ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light mb-5">
        <div class="container-fluid m-3 ps-4 ">
            <a class="navbar-brand" href="../index.html">
            <img src="<?php bloginfo('template_directory'); ?>/images/lo.png" alt="alt text" />

            <!-- <img class="logo" src="<?php get_template_directory_uri() . '/images/lo.png' ?>" alt=""> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php  
            gtg_bootstrap_menu();
    ?> 
            </div>
            </div>
        </nav>


<!-- <nav class="navbar navbar-dark bg-primary"> -->