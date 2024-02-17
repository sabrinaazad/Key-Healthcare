<section class="section section--team-members-list">
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
    <div class="panels team_members_slider">
        <?php
        global $post;
        $backup = $post;
        $the_query = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'team-members',
            'orderby' => 'title',
            'order' => 'ASC'
        ));
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="panel">
                    <div class="wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image-wrapper">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="icon" />
                            </div> 
                        </a>
                        <div class="content-wrapper">
                            <h3 class="heading"><?php the_title(); ?></h3>
                            <h4 class="title"><?php the_field("title") ?></h4>
                            <?php the_excerpt(); ?>
                            <?php if (have_rows('icons_list')) : ?>
                                <div class="icons-list">
                                    <?php while (have_rows('icons_list')) : the_row(); ?>
                                        <?php $icon = get_sub_field('icon'); ?>
                                        <?php $link = get_sub_field('link'); ?>
                                        <a class="social-icon" href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon ?>" alt=""></a>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : endif; ?>
                            <div class="button-wrapper mobile-only">
                                <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Read Full Bio</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php $the_query->reset_postdata();
            $post = $backup; ?>
        <?php else : ?>
            <p><?php __('No Team Members Available'); ?></p>
        <?php endif; ?>
    </div>
</section>