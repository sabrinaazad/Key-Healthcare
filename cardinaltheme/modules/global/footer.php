<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="col">
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-1',
                    'container' => '',
                    'items_wrap' => '
                        <ul class="footer-nav">
                            %3$s
                        </ul>
                        ',
                    'menu_id' => 'footerNav1'
                )); ?>
            </div>
        </div>
        <div class="col">
            <div class="logo-container">
                <a href="/"><img src="<?php echo the_field('footer_logo', 'options'); ?>" alt="Logo" class="logo"></a>
            </div>
            <div class="details-container">
                <p><?php echo the_field('footer_details_block', 'options'); ?></p>
            </div>
            <?php if( have_rows('footer_icons', 'options') ): ?>
                <div class="icons-container">
                    <?php while( have_rows('footer_icons', 'options') ) : the_row();
                        $link = get_sub_field('link');
                        $icon = get_sub_field('icon');
                        $alt = get_sub_field('alt'); ?>
                        <a class="icon" href="<?php echo $link ?>">
                            <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php else : endif;?>
                <?php $button = get_field('button', 'options');
                if ($button) :
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <div class="button-wrapper">
                    <a class="btn btn-secondary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="col">
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-2',
                    'container' => '',
                    'items_wrap' => '
                        <ul class="footer-nav">
                            %3$s
                        </ul>
                        ',
                    'menu_id' => 'footerNav2'
                )); ?>
            </div>
        </div>
        <div class="col">
            <div class="info-container">
                <p><?php echo the_field('footer_info_block', 'options'); ?>
                    <br>Website Design, Development & SEO by <a target="_blank" href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                </p>
            </div>
        </div>
    </section>
    <div class="sticky-buttons mobile-only">
        <?php $button = get_field('sticky_button', 'options');
            if ($button) :
                $link_url = $button['url'];
                $link_title = $button['title'];
                $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <div class="button-wrapper">
                <a class="btn btn-primary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
            </div>
        <?php endif; ?>
    </div>
</footer>