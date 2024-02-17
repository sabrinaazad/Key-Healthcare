<section class="section section--treatment-program-panels full-width">
    <div class="section-wrapper">
        <div class="panels-wrapper">
            <div class="panels panels_slider">
                <?php
                    global $post;
                    $backup = $post; 
                    $the_query = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'treatment-programs',
                        'orderby' => 'title',
                        'order' => 'ASC'
                    )); 
                ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="panel">
                                <div class="image-wrapper"><img src="<?php the_post_thumbnail_url(); ?>" alt="icon" /></div>
                                <h3 class="heading"><?php the_title(); ?></h3>
                                <div><?php the_excerpt(); ?></div>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
                            </div>
                        <?php endwhile; ?>
                        <?php $the_query->reset_postdata(); 
                        $post = $backup; ?>
                    <?php else : ?>
                        <p><?php __('No Treatment Programs Available'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>