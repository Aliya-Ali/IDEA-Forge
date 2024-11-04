<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IDEA FORGE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <?php wp_head(); ?>
</head>

<body>
   

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">IDEA</span>FORGE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo site_url('');?>" class="nav-item nav-link active"
                            <?php if(is_front_page()) echo 'class="active"'?>    
                        >Home</a>
                        <a href="<?php echo site_url('/about');?>" class="nav-item nav-link"
                        >About</a>
                        
                        <a href="<?php echo site_url('/projects');?>" class="nav-item nav-link"
                            <?php if(get_post_type() == 'project')  echo 'class="active"'?>
                        >Project</a>
                        <a href="<?php echo site_url('/blog');?>" class="nav-item nav-link"
                            <?php if(get_post_type() == 'post') echo 'class="active"'?>
                        >Blog</a>                  
                        <a href="<?php echo site_url('/contact');?>" class="nav-item nav-link"
                            <?php if(is_page('contact')) echo 'class="active"'  ?>
                        >Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-left mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <a href="<?php echo site_url('/office');?>">
                            <h5>Our Office</h5>
                            <p class="m-0">Pakistan</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <a href="<?php echo site_url('/email');?>">
                            <h5>Email Us</h5>
                            <p class="m-0">fahadajmedaz3@gmail.com</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <a href="<?php echo site_url('/call');?>">
                            <h5>Call Us</h5>
                            <p class="m-0">+92 336 20424142</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->