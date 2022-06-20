<body>
    <header class="tm-header" id="tm-header">
        <?php get_header(); ?>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <?php get_search_form() ?>
            </div>
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <!-- Video player 1422x800 -->
                    <video width="954" height="535" controls class="tm-mb-40">
                        <source src="video/wheat-field.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">

                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class="mb-4">
                                    <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?> </h2>
                                    <p class="tm-mb-40"><?php the_date();
                                                        the_author(); ?></p>
                                    <p>
                                        <?php the_content(); ?> </p>


                                </div>
                        <?php endwhile;
                        endif; ?>
                        <!-- Comments -->
                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();


                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }
                        // End of the loop.
                        endwhile;
                        ?>
                    </div>
                </div>
                <aside class="col-lg-4 tm-aside-col">
                    <div class="tm-post-sidebar">
                        <hr class="mb-3 tm-hr-primary">
                        <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                        <ul class="tm-mb-75 pl-5 tm-category-list">
                            <li><a href="#" class="tm-color-primary">Visual Designs</a></li>
                            <li><a href="#" class="tm-color-primary">Travel Events</a></li>
                            <li><a href="#" class="tm-color-primary">Web Development</a></li>
                            <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
                            <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
                            <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
                        </ul>
                        <hr class="mb-3 tm-hr-primary">
                        <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                        <a href="#" class="d-block tm-mb-40">
                            <figure>
                                <img src="img/img-02.jpg" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="tm-color-primary">Duis mollis diam nec ex viverra scelerisque a sit</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="d-block tm-mb-40">
                            <figure>
                                <img src="img/img-05.jpg" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="tm-color-primary">Integer quis lectus eget justo ullamcorper ullamcorper</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="d-block tm-mb-40">
                            <figure>
                                <img src="img/img-06.jpg" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="tm-color-primary">Nam lobortis nunc sed faucibus commodo</figcaption>
                            </figure>
                        </a>
                    </div>
                </aside>
            </div>
            <footer class="row tm-row">
                <?php get_footer();
                ?>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>