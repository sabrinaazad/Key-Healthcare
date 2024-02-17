<?php
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--sbs-image-text full-width <?php echo $reverse; ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="image-wrapper" style="background-image: url()">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>
            </div>         
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
            <div class="col" style="background-color: <?php the_sub_field('side_bg_color'); ?>">
                <div class="section-wrapper">
                    <div class="heading-wrapper">
                        <?php $subheading = get_sub_field('subheading');
                        if ($subheading) : ?>
                            <h4 class="subheading"><?php echo $subheading; ?></h4>
                        <?php endif; ?>

                        <?php $heading = get_sub_field('heading');
                        if ($heading) : ?>
                            <h2 class="heading"><?php echo $heading; ?></h2>
                        <?php endif; ?>

                        <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
                            <p class="blurb"><?php echo $blurb; ?></p>
                        <?php endif; ?>
                    </div>
                </div>   
            </div>         
        <?php endwhile; else : endif; ?>
    </div>
</section>