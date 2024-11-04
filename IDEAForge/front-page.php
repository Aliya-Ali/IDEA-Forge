<?php get_header(); ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            
               
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 800px;">
                    <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                    <h3 class="display-3 text-white mb-md-4">Improve your living space</h3>
                    <a href="<?php site_url('/blog'); ?>" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">1</h4>
                        <h1 class="m-0">Year Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title">We Are The Finest Interior Designing Firm In Your City</h1>
                    <p>iDEA FORGE is the world's largest soft furnishing fabrics. We are proud to be globally local,understanding the aesthetic sensibilities of every country we touch.
                      Since our inception in 1999,we have grown to become the preferred partner for the world's most prestigious furniture and furnishings manufacturers.
                      We are defined by a commitment to excellence and a passion to bring dreams to reality that meld expertise with art. In India, Brand iDESIGN enjoys a leadership postion in its category, with a strong retail presence throughout the country with
                      a wide network of multi-brand outlets, an ever increasing number of exclusive iDESIGN stores and our e-commerce platform.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Project Planning</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Exterior & Interior</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Commercial Design</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Residential Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30);?> </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>

            </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
            
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">20+ Years Of Expertise In The Interior Design Industry</h1>
                    <p class="mb-4">We believe that each clients has distinct needs and preferences. To help you do this, we've gathered and most innovative designs to make your dream become reality. Having a plethora of ideas that can dazzle you at every turn. You are always welcomed to discuss the ideas. </p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>20+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Meticulous Details</h5></li>
                    </ul>

                    <a href="<?php echo site_url('')?>" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo get_template_directory_uri(); ?>/img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Projects Start -->


        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 pr-lg-2 card" id="project-des" >
                    <a href="<?php echo site_url('/about');?>">
                        <h6 class="text-primary font-weight-normal text-uppercase mb-3">OUR PROJECTS</h6>
                        <h1 class="mb-4 section-title">Awesome Interior Design</h1>
                        <p>iDESIGN is a full service Interior designing firm that offers design and decorating solutions to residential and small scale commercial projects.</p>
                        <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                    </a>
                </div>
                <?php
                    $args = array(
                        'post_type' => 'project',
                        'posts_per_page' => 3,
                    );
                    $blogposts = new wp_Query($args);
                    while($blogposts->have_posts()){
                        $blogposts->the_post();
                ?>
                
                <div class="col-lg-3 pr-lg-2 card" id="project1">
                <div class="card-image">
                    <a href="<?php echo the_permalink();?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                    </a>
                </div>
                <div class="card-discription">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30);?> </p>
                    <a href="<?php the_permalink();?>" class="btn-readmore">Read more</a>
                </div>

            </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row" >
                <div class="col-md-12 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                        <h1 class="mb-0 text-center">The magicians who transform and create space</h1>
                    </div>
                </div>
                <div class="row" id="team">
                    <div class="col-lg-4 pr-lg-3  card">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Adrian Berry</h5>
                                <p class="m-0">Vice President, Global Worksplace Sector Leader Designer</p>
                            </div>
                        
                    </div>
                    <div class="col-lg-4 pr-lg-3  card">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Elaine Medeiros</h5>
                                <p class="m-0">Interior Designer, Global Worksplace Discipline Leader</p>
                            </div>
                        
                    </div>
                    <div class="col-lg-4 pr-lg-3  card">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/team-3.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Craig Wilson</h5>
                                <p class="m-0">Global Worksplace Interior Design Lead & Associate</p>
                            </div>
                        
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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

