<?php
/*
Template Name: Our Team
*/
?>

<?php
get_header();
?>

<div class="specialists">
    <div class="container">
        <div class="title"><?php the_field('team_title') ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 about__img mt-4">
                <?php
                        $image = get_field('team_img');
                        if (!empty($image)): ?>
                            <img src="<?php echo $image['url']?>" 
                            alt="<?php echo $image['alt']?>">
                        <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>