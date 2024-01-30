<?php

/**
 * The Home Page file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content py-5 mt-4">

    <main id="main" class="site-main">
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(  ). '/img/1686676308746.png';?>"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(  ). '/img/1686676308746.png';?>"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid"
                                    src="<?php echo get_template_directory_uri(  ). '/img/1686676308746.png';?>" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <h1 class="h1">Repr in voluptate</h1>
                                    <h3 class="h2">Ullamco laboris nisi ut </h3>
                                    <p>
                                        We bring you 100% free CSS templates for your websites.
                                        If you wish to support TemplateMo, please make a small contribution via PayPal
                                        or tell your friends about our website. Thank you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev text-decoration-none w-auto ps-3" type="button"
                data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next text-decoration-none w-auto pe-3" type="button"
                data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </main><!-- #main -->

</div><!-- #content -->
<?php
get_footer();