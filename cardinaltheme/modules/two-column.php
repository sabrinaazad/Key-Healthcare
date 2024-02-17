<section class="section section--two-column full-width" style="background-color:<?php echo get_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id') ?>">
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
        <ul class="list">
            <?php if (have_rows('list')) : $count = 0;
                while (have_rows('list')) : the_row(); ?>
                    <li>
                        <div class="icon-wrapper">
                            <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                        </div>
                        <div class="text-wrapper">
                            <h3 class="title"><?php the_sub_field('title'); ?></h3>
                            <div class="blurb"><?php the_sub_field('blurb'); ?></div>
                        </div>
                    </li>
            <?php $count++;
                endwhile;
            else : endif; ?>
        </ul>
    </div>
</section>