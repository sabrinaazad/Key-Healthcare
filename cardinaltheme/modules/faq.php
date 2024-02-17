<section class="section section--faq" id="<?php echo the_sub_field('id'); ?>">
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

        <div class="outer-border">
            <div class="faq-wrapper" style="background-color:<?php the_sub_field('faq_bg_color'); ?>;">
                <?php if( have_rows('faq') ): while( have_rows('faq') ) : the_row(); ?>
                    <div class="faq">
                        <h2 class="question heading">
                            <?php the_sub_field("question") ?>
                            <div class="arrow-down"></div>
                        </h2>
                        <div class="answer"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; else : endif;?>    
            </div>
        </div>
    </div>
</section>