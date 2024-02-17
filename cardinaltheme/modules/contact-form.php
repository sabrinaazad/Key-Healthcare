<section class="section section--contact-form full-width" style="background-color: <? echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">
                <?php $image = get_sub_field('image');
                if (($image)) : ?>
                    <div class="image-wrapper">
                        <img src="<?php the_sub_field('image'); ?>" alt="icon" />
                    </div>
                <?php endif; ?>
            </div>

            <div class="col">

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
                    <div class="blurb"><?php echo $blurb; ?></div>
                <?php endif; ?>

                <?php echo do_shortcode(get_sub_field('contact_form')); ?>

            </div>
        </div>
    </div>
</section>