<?php get_header(); ?>
    


    <!-- Services Start -->
    <div class="container-fluid py-5">

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 card">
                    <a href="<?php echo site_url('/about');?>">
                        <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                        <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                        <p>iDESIGN is a full service Interior designing firm that offers design and decorating solutions to residential and small scale commercial projects.</p>
                        <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                    </a>
                </div>
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );
                    $blogposts = new wp_Query($args);
                    while($blogposts->have_posts()){
                        $blogposts->the_post();
                ?>
                
                <div class="col-lg-6 pr-lg-5 card">
                <div class="card-image">
                    <a href="<?php echo the_permalink();?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                    </a>
    
                </div>
                <div class="card-discription">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        Posted by <?php the_author();?> on <?php the_time('F j, Y') ?> in 
                        <a href=""><?php echo get_the_category_list(',') ?></a>
                    </div>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30);?> </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>

            </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="pagination">
            <?php echo paginate_links();?> 
        </div>
    <!-- Services End -->


    

    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Read The Latest News & Articles From Our Blog</h1>
                </div>
            </div>
            
            
            <div class="row pb-3" >
                <?php 
                    $args = array(
                            'post_type' => 'post',
                            'posts_per_page'=> 3,
                        );
                    $blogposts = new wp_Query($args);
                    while($blogposts->have_posts()){
                        $blogposts->the_post(); 
                
                ?>
                <div class="col-md-4 mb-4">
                    <div class=" border-0 mb-2">
                        <img class="card-img-top" id="article-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Functional and Stylish: 5 Daybed designs your guests will love.</h5>
                            
                            </div>
                            <p>Liven up your home with this 5 daydream-worthy daybed design ideas!</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Adrian Berry</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Home Interior Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }
            wp_reset_query(); 
            ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->

<?php get_footer(); ?>

