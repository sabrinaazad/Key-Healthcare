<section class="section section--section-slider full-width" id="<?php echo the_sub_field('id') ?>">
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
        <?php if (have_rows('sections')) : ?>
            <div class="sections section_slider">
                <?php while (have_rows('sections')) : the_row(); ?>

                        <?php $image = get_sub_field('image'); ?>
                        <div class="slide" style="background-image: url(<?php echo the_sub_field('image') ?>);">
                            <div class="outer-border">
                                <div class="info-wrapper">
                                    <div class="text-wrapper">
                                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                        <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                                    </div>
                                    <?php $button = get_sub_field('button');
                                    if ($button) :
                                        $button_url = $button['url'];
                                        $button_title = $button['title'];
                                        $button_target = $button['target'] ? $button['target'] : '_self';
                                    ?>
                                        <div class="button-wrapper">
                                            <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
</section>