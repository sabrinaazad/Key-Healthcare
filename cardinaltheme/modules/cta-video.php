<section class="section section--cta-video full-width">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">
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

                    <?php $button = get_sub_field('button');
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                        <div class="button-wrapper">
                            <a class="btn btn-primary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="video_slider_feature">
                    <?php if (have_rows('video_slider')) : while (have_rows('video_slider')) : the_row(); ?>
                    <div class="slide">
                        <?php $video = get_sub_field('video'); ?>
                        <div class="video-wrapper"><?php echo $video ?></div>
                    </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </div>
        <div class="video_slider_nav">
            <?php if (have_rows('video_slider')) : while (have_rows('video_slider')) : the_row(); ?>
                <div class="slide">
                        <?php $video = get_sub_field('video'); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <div class="video-wrapper"><img src="<?php echo $image ?>" alt="video screenshot" /><?php echo $video ?></div>
                </div>      
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>
