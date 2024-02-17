<section class="section section--image-slider full-width no-padded-sides" style="background-color:<?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id')?>">
    <div class="heading-wrapper" style="background-color:<?php echo the_sub_field('heading_bg_color'); ?>">
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

        <?php $button = get_sub_field('button');
        if( $button ): 
        $button_url = $button['url'];
        $button_title = $button['title'];
        $button_target = $button['target'] ? $button['target'] : '_self';
        ?>
            <div class="button-wrapper">       
                <a class="btn btn-primary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
            </div>  
        <?php endif; ?>
    </div>

    <?php if( have_rows('image_slider') ): ?>
        <div class="image_slider">
            <?php while( have_rows('image_slider') ) : the_row(); ?> 

                <?php $image = get_sub_field('image'); ?>
                <div class="slide"><img src="<?php echo $image ?>" alt="slide image" />
                    <?php if( get_sub_field('blurb') ) : ?>
                    <div class="text-wrapper mobile-only">
                        <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : endif; ?>
</section>