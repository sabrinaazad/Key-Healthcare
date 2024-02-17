<?php get_header();
/* Template Name: Treatments Programs Archive */
?>
<?php $args = array(
    'p' => 311,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); 

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;
        
        // Case: contact-form layout.
        if (get_row_layout() == 'contact_form') :
            get_template_part('modules/contact-form');
        endif;

        // Case: cta-image layout.
        if (get_row_layout() == 'cta_image') :
            get_template_part('modules/cta-image');
        endif;
        
        // Case: cta-video layout.
        if (get_row_layout() == 'cta_video') :
            get_template_part('modules/cta-video');
        endif;

        // Case: faq layout.
        if (get_row_layout() == 'faq') :
            get_template_part('modules/faq');
        endif;

        // Case: featured-blogs layout.
        if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs');
        endif;

        // Case: founders layout.
        if (get_row_layout() == 'founders') :
            get_template_part('modules/founders');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;

        // Case: icon-title layout.
        if (get_row_layout() == 'icon_title') :
            get_template_part('modules/icon-title');
        endif;

        // Case: icons-row layout.
        if (get_row_layout() == 'icons_row') :
            get_template_part('modules/icons-row');
        endif;

        // Case: image-slider layout.
        if (get_row_layout() == 'image_slider') :
            get_template_part('modules/image-slider');
        endif;

        // Case: locations layout.
        if (get_row_layout() == 'locations') :
            get_template_part('modules/locations');
        endif;

        // Case: logo-slider layout.
        if (get_row_layout() == 'logo_slider') :
            get_template_part('modules/logo-slider');
        endif;

        // Case: process layout.
        if (get_row_layout() == 'process') :
            get_template_part('modules/process');
        endif;

        // Case: sbs-image-text layout.
        if (get_row_layout() == 'sbs_image_text') :
            get_template_part('modules/sbs-image-text');
        endif;

        // Case: sbs-video layout.
        if (get_row_layout() == 'sbs_video') :
            get_template_part('modules/sbs-video');
        endif;

        // Case: section-slider layout.
        if (get_row_layout() == 'section_slider') :
            get_template_part('modules/section-slider');
        endif;

        // Case: side-by-side layout.
        if (get_row_layout() == 'side_by_side') :
            get_template_part('modules/side-by-side');
        endif;

        // Case: team-members-list layout.
        if (get_row_layout() == 'team_members_list') :
            get_template_part('modules/team-members-list');
        endif;
        
        // Case: teen-dual-diagnosis-list layout.
        if (get_row_layout() == 'teen_dual_diagnosis_list') :
            get_template_part('modules/teen-dual-diagnosis-list');
        endif;

        // Case: teen-dual-diagnosis-slider layout.
        if (get_row_layout() == 'teen_dual_diagnosis_slider') :
            get_template_part('modules/teen-dual-diagnosis-slider');
        endif;

        // Case: teen-mental-health-list layout.
        if (get_row_layout() == 'teen_mental_health_list') :
            get_template_part('modules/teen-mental-health-list');
        endif;

        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: therapies-list layout.
        if (get_row_layout() == 'therapies_list') :
            get_template_part('modules/therapies-list');
        endif;

        // Case: treatment-programs-list layout.
        if (get_row_layout() == 'treatment_programs_list') :
            get_template_part('modules/treatment-programs-list');
        endif;

        // Case: treatment-program-panels layout.
        if (get_row_layout() == 'treatment_program_panels') :
            get_template_part('modules/treatment-program-panels');
        endif;

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

        // Case: three-panels layout.
        if (get_row_layout() == 'three_panels') :
            get_template_part('modules/three-panels');
        endif;

        // Case: two-column layout.
        if (get_row_layout() == 'two_column') :
            get_template_part('modules/two-column');
        endif;

        // Case: vertical-cards layout.
        if (get_row_layout() == 'vertical_cards') :
            get_template_part('modules/vertical-cards');
        endif;

    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

endwhile;  else : endif;

wp_reset_postdata(); 

get_footer();