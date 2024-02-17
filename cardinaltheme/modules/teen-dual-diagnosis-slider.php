<section class="section section--teen-dual-diagnosis-slider full-width" style="background-color:<?php echo the_sub_field("background_color"); ?>" id="<?php echo the_sub_field('id') ?>">
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
        <div class="panels teendual_slider">
            <?php
            global $post;
            $backup = $post;
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'teen-dual-diagnosis',
                'orderby' => 'title',
                'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a class="panel"  href="<?php the_permalink(); ?>">
                        <div class="image-wrapper"><img src="<?php the_field("slider_image"); ?>" alt="icon" /></div>
                        <div class="circle-wrapper">
                            <h3 class="heading"><?php the_title(); ?></h3>
                            <div class="btn btn-primary mobile-only">Learn More</div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php $the_query->reset_postdata();
                $post = $backup; ?>
            <?php else : ?>
                <p><?php __('No Teen Dual Diagnosis Available'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>