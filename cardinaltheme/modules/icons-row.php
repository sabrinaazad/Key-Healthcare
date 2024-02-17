<section class="section section--icons-row full-width" style="background-color:<?php the_sub_field('background_color'); ?>;" id="<?php echo the_sub_field('id')?>">
    <div class="section-wrapper">
        <div class="item-wrapper">
            <?php if (have_rows('items')) : while (have_rows('items')) : the_row(); ?>
                <div class="item">

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
                            <a class="btn btn-tetriary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>