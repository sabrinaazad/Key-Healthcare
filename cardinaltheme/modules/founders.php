<section class="section section--founders full-width" style="background-image: url(<?php echo the_sub_field("background_image") ?>);" id="<?php echo the_sub_field("id") ?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
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
                <div class="blurb"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>

        <div class="team_slider_2">
            <?php $founders = get_sub_field('team_members');
            global $post;
            $backup = $post; 
            if ($founders) : ?>   
            <?php foreach ($founders as $post) :
                setup_postdata($post); ?>
                    <div class="slide">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="team member" />
                    </div>    
                    <?php endforeach;
                wp_reset_postdata();
                $post = $backup; ?>
            <?php endif; ?>
        </div>
        <div class="team_slider">
            <?php $founders = get_sub_field('team_members');
            global $post;
            $backup = $post; 
            if ($founders) : ?>   
            <?php foreach ($founders as $post) :
                setup_postdata($post); ?>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="team member" />
                        <img class="design-element" src="/wp-content/themes/cardinaltheme/assets/bg.png" alt="designs" />
                    </div>
                    <div class="content">
                        <h3 class="name"><?php the_title(); ?></h3>
                        <h4 class="title"><?php the_field("title");  ?></h4>
                        <div class="bio"><?php the_excerpt(); ?></div>
                    </div>
                </div>
                <?php endforeach;
                wp_reset_postdata();
                $post = $backup; ?>
            <?php endif; ?>
        </div>
    </div>
</section>