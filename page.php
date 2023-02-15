<?php get_header() ; 
// get The Header Funcation */?>
    <div class="container-fluid post-page"style="height: 100vh">
            <?php 
            if(have_posts())  // check if there 's posts
            {
                while(have_posts()) // Loop throw posts
                { 
                    the_post(); ?>
                        <div class="main-post single-post" >
                                <?php the_post_thumbnail('post-thumbnail',['class' => 'image img-responsive img-thumbnail', 'title' => 'post image'])?>
                                </div>
                                <div class="post-content">
                                <?php the_content()?>
                                </div>

                            <!-- <?php //the_content("Read The Full Artical") ?> -->
                            </p>
                            </p>
                            <!-- <?php the_title('<h3 class="post-title">','</h3>')?> -->
                    <?php
                    
                }// End While Loop
            } // End If Condtion
            ?>
    </div>
    <?php get_footer() ;?>