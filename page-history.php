<?php
/*
Template Name: History
*/
?>

<?php
get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('story_title') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_1_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_1_text') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_1_img') ?>" alt="story_1">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_2_img') ?>" alt="story_2">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_2_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_2_text') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_3_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_3_text') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('story_3_img') ?>" alt="story_3">
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>