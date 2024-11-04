<?php get_header(); 
    while(have_posts()){
        the_post();
        ?>
    <!-- Blog Start -->
        <!-- Services Start -->
    <div class="container-fluid py-5">

<div class="container py-5">
    <div class="row">
        
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
    </div>
</div>
</div>
    <?php } ?>
    <!-- Blog End -->
<?php get_footer(); ?>
