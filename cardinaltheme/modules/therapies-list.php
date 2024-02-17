<section class="section section--archive-list full-width" style="background-color:<?php echo the_sub_field("background_color"); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <h4 class="subheading"><?php echo $subheading ?></h4>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb ?></div>
            <?php endif; ?>    

        </div>
        <div class="panels list_slider">
        <?php
            global $post;
            $backup = $post; 
            $the_query = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'therapies',
                'orderby' => 'title',
                'order' => 'ASC'
            )); 
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a class="panel" href="<?php the_permalink(); ?>">
                        <div class="image-wrapper"><img src="<?php the_post_thumbnail_url(); ?>" alt="icon" /></div>
                        <h3 class="heading"><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <div class="btn btn-secondary">Read More</div>
                    </a>
                <?php endwhile; ?>
                <?php $the_query->reset_postdata(); 
                $post = $backup; ?>
            <?php else : ?>
                <p><?php __('No Therapies Available'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>