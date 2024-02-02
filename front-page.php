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
<div id="content" class="site-content">

    <main id="main" class="site-main">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h6 data-aos="fade-up">Welcome to</h6>
                        <h2 data-aos="fade-up">Gathathi-ini Boys High School</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Transforming boys into men of purpose and integrity
                        </p>

                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="400"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Students</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Teachers</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="15"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Staff</p>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="12"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Subjects</p>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/hero-img.svg';?>"
                            class="img-fluid mb-3 mb-lg-0" alt="">
                    </div>

                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services">
                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                            <div>
                                <h4 class="title">Our Curriculum</h4>
                                <p class="description">We offer both the time-tested 8.4.4 curriculum and
                                    the forward-thinking Competency-Based Curriculum (CBC). </p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                            <div>
                                <h4 class="title">Mission</h4>
                                <p class="description">Providing wholesome education by promoting self-discipline and
                                    hard-work.
                                </p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                            <div>
                                <h4 class="title">Vision</h4>
                                <p class="description">To become the school of choice in moulding individuals to become
                                    responsible members of the society.
                                </p>
                                <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>
            </section><!-- End Featured Services Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about pt-0">
                <div class="container" data-aos="fade-up">

                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/Adm-Block.png';?>"
                                class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                        <div class="col-lg-6 content order-last  order-lg-first">
                            <h3>Who We Are</h3>
                            <p>
                                We receive boys and transform them to men who have conquered both academically and
                                socially. We particularly focus on developing talents and life skills of our boys.
                            </p>
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi bi-diagram-3"></i>
                                    <div>
                                        <h5>Location</h5>
                                        <p>We are located 13 km from Nyeri town and 9 km from Kamuyu junction off
                                            Nyeri-Kamakwa road.
                                        </p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-fullscreen-exit"></i>
                                    <div>
                                        <h5>Curriculum</h5>
                                        <p>We offer computer studies in addition to the 8-4-4 curriculum</p>
                                    </div>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-broadcast"></i>
                                    <div>
                                        <h5>Inclusive community</h5>
                                        <p>It is a diverse, vibrant community with a strong sense of mutual respect and
                                            a high expectations inclusive culture.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Services Section ======= -->
            <section id="service" class="services pt-0">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <span>Our Pillars</span>
                        <h2>Our Pillars</h2>

                    </div>

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/parade.png';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Academic Excellence Pillar</a>
                                </h3>
                                <p>This pillar focuses on fostering a culture of academic excellence, providing
                                    resources and support for students to excel in their studies. It includes
                                    programs for academic enrichment, mentorship, and recognition of outstanding
                                    achievements.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logistics-service.jpg';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Sports and Talents Pillar</a>
                                </h3>
                                <p>Gathathi-ini is intentional about developing the sporting and talent capabilities of
                                    our boys. This entails creating a supportive and nurturing environment where
                                    students can explore and excel in their areas of interest.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/fire.png';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Performing Arts Pillar</a>
                                </h3>
                                <p>The school will stage theatrical productions, ranging from classic plays to modern
                                    works. The school participates in the national drama and music festivals hosted
                                    annually.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/comp-lab.png';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Digital Literacy Pillar</a>
                                </h3>
                                <p>Digital literacy is a crucial pillar in Gathathi-ini due to the increasing
                                    integration of technology in almost every aspect of our lives. It refers to the
                                    ability to use, understand, and critically evaluate digital tools and information
                                    effectively.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/field.png';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Linkages and Collaboration
                                        Pillar</a></h3>
                                <p>The school champions environmental education through awareness campaigns, engages
                                    students in community service with regular volunteering
                                    and donation drives, and promotes health and wellness through various awareness
                                    campaigns.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/warehousing-service.jpg';?>"
                                        alt="" class="img-fluid">
                                </div>
                                <h3><a href="service-details.html" class="stretched-link">Spiritual Wellbeing</a></h3>
                                <p>The holistic transformation of the boy child is the main focus of Gathathi-ini.
                                    Since its inception, considerable effort, time, and resources have been invested to
                                    support the boy child and guide them away from modern-day societal ills, vices, and
                                    distractions of youth life.</p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Call To Action Section ======= -->
            <section id="call-to-action" class="call-to-action">
                <div class="container" data-aos="zoom-out">

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h3>Our Motto</h3>
                            <p> Jibidiishe Ushinde</p>
                            <a class="cta-btn" href="#">About Us</a>
                        </div>
                    </div>

                </div>
            </section><!-- End Call To Action Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                        <div class="col-md-5">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/features-1.jpg';?>"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </li>
                                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</li>
                                <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
                            </ul>
                        </div>
                    </div><!-- Features Item -->

                    <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/features-2.jpg';?>"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 order-2 order-md-1">
                            <h3>Corporis temporibus maiores provident</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    </div><!-- Features Item -->

                </div>
            </section><!-- End Features Section -->


        </main><!-- End #main -->

    </main><!-- #main -->

</div><!-- #content -->
<?php
get_footer();