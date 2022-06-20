<?php
get_header();
?>
<div class="row tm-row tm-mb-45">
    <div class="col-12">

        <hr class="tm-hr-primary tm-mb-55">
        <?php the_post_thumbnail(); ?>

    </div>
</div>
<div class="row tm-row tm-mb-40">
    <div class="col-12">
        <div class="mb-4">

            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title"> <?php the_title(); ?></h2>
            <p>
                <?php the_content(); ?>
            </p>


        </div>
    </div>
</div>
<div class="extreme">
    <div class="row tm-row tm-mb-120">
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('paragraph'); ?>
                </p>
            </div>
        </div>
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title1'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('paragraph1'); ?>
                </p>
            </div>
        </div>
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title2'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('paragraph2'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('memberimage1'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('membername1'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('memberdesignation1'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('memberabout1'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('memberimage2'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('membername2'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('memberdesignation2'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('memberabout2'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('memberimage3'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('membername3'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('memberdesignation3'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('memberabout3'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('memberimage4'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('membername4'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('memberdesignation4'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('memberabout4'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>