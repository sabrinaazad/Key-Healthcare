<section class="section section--testimonials full-width">
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
                <?php if (have_rows('testimonials')) : ?>
                    <div class="panels testimonials_slider">
                        <?php while (have_rows('testimonials')) : the_row(); ?>
                            <div class="panel">
                                <div class="info-wrapper">
                                    <div class="image-wrapper">
                                        <img src="<?php the_sub_field("image"); ?>" alt="image" />
                                    </div>
                                    <div class="details-wrapper">
                                        <h4 class="name"><?php the_sub_field("name"); ?></h4>
                                        <div class="title"><?php the_sub_field("title") ?></div>
                                    </div>
                                </div>
                                <div class="blurb"><?php the_sub_field("blurb"); ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
            </div>
        </div>
    </div>
</section>