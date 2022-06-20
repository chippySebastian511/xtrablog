<body>
    <header class="tm-header" id="tm-header">
        <?php get_header(); ?>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <?php get_search_form(); ?>
            </div>
            <div class="row tm-row">
                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <article class="col-12 col-md-6 tm-post">
                            <hr class="tm-hr-primary">
                            <a href="<?php the_excerpt();
                                        get_permalink(); ?>" class="effect-lily tm-post-link tm-pt-60">
                                <div class="tm-post-link-inner">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <span class="position-absolute tm-new-badge">new</span>
                                <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                            </a>
                            <p class="tm-pt-30">
                                <?php the_content(); ?>
                            </p>
                            <div class="d-flex justify-content-between tm-pt-45">
                                <span class="tm-color-primary">Travel . Events</span>
                                <span class="tm-color-primary"><?php the_date(); ?></span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span>36 comments</span>
                                <span>by <?php the_author(); ?></span>
                            </div>

                        </article>

                <?php endwhile;
                endif; ?>
            </div>
            <?php wp_pagenavi(); ?>
            <!-- <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div> -->
            <!-- <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
    </div>
    </main>
    <?php get_footer() ?>
    <!-- <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 Xtra Blog Company Co. Ltd.
                </div>
            </footer> -->

    </div>