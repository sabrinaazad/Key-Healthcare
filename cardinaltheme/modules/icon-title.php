<section class="section section--icon-title full-width" style="background-color:<?php echo the_sub_field("background_color"); ?>" id="<?php echo the_sub_field('id'); ?>">
    <div class="section-wrapper">       
        <div class="item-wrapper">    
            <?php if (have_rows('items')) : while (have_rows('items')) : the_row(); ?>

                <a class="item" href="<?php the_sub_field('link'); ?>">
                    <div class="icon-wrapper">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                    </div>
                    <h3 class="title"><?php the_sub_field('title'); ?></h3>
                </a>

            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>