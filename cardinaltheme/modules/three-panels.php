<section class="section section--three-panels full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="heading-wrapper">
            <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <h4 class="subheading"><?php echo $subheading; ?></h4>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
                if ($blurb) : ?>
                    <p class="blurb"><?php echo $blurb; ?></p>
            <?php endif; ?>
        </div>
        <?php if( have_rows('panels') ): ?>
            <div class="panels">
                <?php while( have_rows('panels') ) : the_row(); ?>
                <div class="panel">
                    <div class="icon-wrapper">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                    </div>
                    <div class="content-wrapper">
                        <h3 class="title"><?php the_sub_field('title'); ?></h3>
                        <p class="blurb"><?php the_sub_field('blurb'); ?></p>
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
                </div>
                <?php endwhile; ?>
            </div>
        <?php else : endif; ?>
    </div>
</section>