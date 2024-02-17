
<section class="section section--process full-width" style="background-color:<?echo the_sub_field("background_color"); ?> ;" id="<?php echo the_sub_field("id") ?>">
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
        </div>
        <div class="panels-wrapper">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                <div class="panel">
                    <div class="icon-wrapper">
                        <img class="icon" src="<? echo the_sub_field('icon'); ?>">
                    </div>
                    <h3 class="title"><?php the_sub_field('title'); ?></h3>
                    <div class="blurb"><? echo the_sub_field('blurb'); ?></div>
                    <?php $button = get_sub_field('button');
                        if ($button) :
                            $link_url = $button['url'];
                            $link_title = $button['title'];
                            $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="button-wrapper">
                            <a class="btn btn-secondary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>