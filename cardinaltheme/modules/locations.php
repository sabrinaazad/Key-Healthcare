<?php
$hide = get_sub_field("hide");
if($hide) {
    $hide = "hide";
} else {
    $hide = "";
}
?>
<section class="section section--locations full-width" id="<?php echo the_sub_field('id') ?>">
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
        <div class="two-col">
            <div class="col">
                <?php if (have_rows('panels')) : ?>
                    <div class="panels">
                        <?php while (have_rows('panels')) : the_row(); ?>
                            <div class="panel">
                                <div class="icon-wrapper">
                                    <img src="<?php the_sub_field('location_icon'); ?>" alt="icon" />
                                </div>
                                <div class="title-wrapper">
                                    <h4 class="title"><?php the_sub_field('location_title'); ?></h4>
                                </div>
                                <div class="content-wrapper">
                                    <div class="col">
                                        <?php if(get_sub_field('number')) : ?>
                                            <div class="telephone-wrapper">
                                                <img src="<?php the_sub_field('tel_icon'); ?>" alt="icon" />
                                                <a class="tel" href="tel:<?php the_sub_field('number'); ?>"><?php the_sub_field('number'); ?></a>
                                            </div>
                                        <? else : endif; ?>
                                        <?php if (get_sub_field('address')) : ?>
                                            <div class="address-wrapper">
                                                <img src="<?php the_sub_field('address_icon'); ?>" alt="icon" />
                                                <div class="address"><?php the_sub_field('address'); ?></div>
                                            </div>
                                        <? else : endif; ?>
                                    </div>
                                    <div class="col <?php echo $hide ?>">
                                        <?php if (get_sub_field('hours_icon')) : ?>
                                            <img class="hours-icon" src="<?php the_sub_field('hours_icon'); ?>" alt="icon" />
                                        <? else : endif; ?>
                                        <?php if (have_rows('hours')) : ?>
                                            <div class="outer-wrapper">
                                                <?php while (have_rows('hours')) : the_row(); ?>
                                                    <div class="hours-wrapper">
                                                        <div class="label"><?php the_sub_field('label'); ?></div>
                                                        <div class="hours"><?php the_sub_field('hours'); ?></div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <? else : endif; ?>
                                    </div>
                                    <div class="col">
                                        <?php
                                        $button1 = false;
                                        $button2 = false;
                                        if (!empty(get_sub_field('button1'))) {
                                            $button1 = get_sub_field('button1');
                                            $link1_url = $button1['url'];
                                            $link1_title = $button1['title'];
                                            $link1_target = $button1['target'] ? $button1['target'] : '_self';
                                        }
                                        if (!empty(get_sub_field('button2'))) {
                                            $button2 = get_sub_field('button2');
                                            $link2_url = $button2['url'];
                                            $link2_title = $button2['title'];
                                            $link2_target = $button2['target'] ? $button2['target'] : '_self';
                                        }
                                        ?>
                                        <div class="button-wrapper">
                                            <?php if ($button1) : ?>
                                                <a class="btn btn-white" href="<?php echo $link1_url ?>" target="<?php echo $link1_target ?>"><?php echo $link1_title ?></a>
                                            <?php endif; ?>
                                            <?php if ($button2) : ?>
                                                <a class="btn btn-secondary" href="<?php echo $link2_url ?>" target="<?php echo $link2_target ?>"><?php echo $link2_title ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : endif; ?>
            </div>
            <div class="col">
                <div class="image-wrapper">
                    <img src="<?php the_sub_field('location_image'); ?>" alt="icon" />
                </div>
            </div>
        </div>
    </div>
</section>