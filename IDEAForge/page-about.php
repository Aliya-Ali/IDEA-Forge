 
 <?php get_header();
 
 while(have_posts()) {
    the_post();

?>
<!-- About Start -->
    <div class="container-fluid bg-light">
        <h2><?php the_title(); ?> </h2>
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">20+</h4>
                        <h1 class="m-0">Years Experience</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <a href="<?php echo site_url('/blog'); ?>">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    
                    <h1 class="mb-4 section-title">We Are The Finest Interior Designing Firm In Your City</h1>
                    </a>
                    <p>IDEAA FORGE is the world's largest soft furnishing fabrics. We are proud to be globally local,understanding the aesthetic sensibilities of every country we touch.
                      Since our inception in 1999,we have grown to become the preferred partner for the world's most prestigious furniture and furnishings manufacturers.
                      We are defined by a commitment to excellence and a passion to bring dreams to reality that meld expertise with art. In India, Brand iDESIGN enjoys a leadership postion in its category, with a strong retail presence throughout the country with a
                      wide network of multi-brand outlets, an ever increasing number of exclusive iDESIGN stores and our e-commerce platform.</p>
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
     <!-- Features Start -->
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3"><?php the_title(); ?></h6>
                    <h1 class="mb-4 section-title">20+ Years Of Expertise In The Interior Design Industry</h1>
                    <?php if(has_post_thumbnail()) {?>
                    <p class="mb-4"><?php the_content(); ?></p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>20+ Years Experience</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Meticulous Details</h5></li>
                    </ul>
                    <a href="<?php echo site_url('/projects') ?>;" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
<?php get_footer(); ?>
