<section class="section section--featured-blogs full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>" id="<?php echo the_sub_field('id')?>">
    <div class="white-overlay"></div>
    <div class="section-wrapper">
        <div class="content">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading; ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
            
        </div>
        <div class="featured_blogs blogs_slider">
            <?php
            $the_query = new WP_Query(array(
                'posts_per_page' => 3,
            ));
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="blog">
                        <?php if( has_post_thumbnail() ) { ?>
                            <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                        <?php } else { ?>
                            <div class="image-wrapper"></div>
                        <?php } ?>
                        <div class="content-wrapper">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <h5 class="date"><?php echo get_the_date(); ?></h5>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php __('No Blogs'); ?></p>
            <?php endif; ?>
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
</section>