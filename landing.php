<?php 

/*

Template Name: Specail

*/

get_header() ?>

<div class="landing">
    <div class="container">
    <div class="row m-sm-5">
    <div class="col-lg-6 col-sm-12 m-auto mt-5">
        <div class="landing-content m-sm-5 me-3 ms-3">
        <h3>Hi👋, I’m a</h3>
        <h2>software developer</h2>
        <p class="typewrite" data-period="2000" data-type='[" I’m Gaber Tarek, a developer dedicated to making the world a better place one line of code at a time."]' ></p>
        <span class="wrap"></span>
        <a href="contact-me.html"><button class="btn">Hire me</button></a> 
    </div>
    </div>
    <div class="col-lg-6 col-sm-12 mt-5 mt-lg-0 text-center text-lg-end">
    <img src="<?php echo get_template_directory_uri() . '/images/gaber.jpg' ?>" alt="">
    </div>
    </div>
    </div>
    </div>

    <?php get_footer() ?>