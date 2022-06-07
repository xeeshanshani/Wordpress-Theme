<!-- This file is only for those who want to reference Kirki V3 -->

<?php

if ( ! class_exists( 'Kirki' ) ) {
  return;
}

/* Add Kirki v3 Config */

Kirki::add_config(

  'b2w_customizer_config',
  array(
    'capability'    => 'edit_theme_options',
	  'option_type'   => 'theme_mod',
  )

);

/* Panels */

Kirki::add_panel( 'b2w_theme_options_panel', array(
    'priority'    => 30,
    'title'       => esc_html__( 'B2W Theme Options', 'bootstrap2wordpress' ),
    'description' => esc_html__( 'Use this to customize the B2W Theme', 'bootstrap2wordpress' ),
) );

/* Sections */

Kirki::add_section( 'b2w_subscribe_bar', array(
    'title'          => esc_html__( 'Subscribe Bar', 'bootstrap2wordpress' ),
    'panel'          => 'b2w_theme_options_panel',
    'priority'       => 40,
) );

/* Start Subscribe Bar Fields */

Kirki::add_field( 'b2w_customizer_config',
  array(
    'type'        => 'textarea',
    'settings'    => 'subscribe_text',
    'label'       => esc_html__( 'Text Block', 'bootstrap2wordpress' ),
    'section'     => 'b2w_subscribe_bar',
    'default'     => '<strong>Want to save 20% on the course?</strong>Enter your email and we\'ll instantly send you the discount code',
    'placeholder' => esc_html__( 'Add your text here', 'bootstrap2wordpress' ),
    'priority'    => 10,
  )
);

Kirki::add_field( 'b2w_customizer_config',
  array(
    'type'        => 'code',
    'settings'    => 'subscribe_form',
    'label'       => esc_html__( 'Opt-in Form HTML', 'bootstrap2wordpress' ),
    'description' => esc_html__( 'Embed HTML from your preferred email marketing tool', 'bootstrap2wordpress' ),
    'section'     => 'b2w_subscribe_bar',
    'priority'    => 10,
  )
);

/* End Subscribe Bar Fields */


/* Start Footer Section */

Kirki::add_section(

  'b2w_footer_section',
  array(
    'priority' => 40,
    'title'    => esc_html__( 'Footer', 'bootstrap2wordpress' ),
		'panel'    => 'b2w_theme_options_panel',
  )

);

// Footer Section fields

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'     => 'custom',
    'settings' => 'footer-form-placeholder-hr',
    'section'  => 'b2w_footer_section',
    'default'  => '<hr>',
    'priority' => 10,
  )
);

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'            => 'textarea',
    'settings'        => 'footer_copyright',
    'label'           => esc_html__( 'Footer Copyright Text', 'bootstrap2wordpress' ),
	  'section'         => 'b2w_footer_section',
    'placeholder'     => esc_html__( 'Enter copyright text here', 'bootstrap2wordpress' ),
		'default'         => 'Copyright Brightside Studios Inc.',
    'priority'        => 10,
    'partial_refresh' => array(
      'footer_copyright' => array(
        'selector'        => 'footer .copyright p',
        'render_callback' => function() {
            return get_theme_mod( 'footer_copyright' );
        },
      ),
    ),
  )
);

Kirki::add_section(
  'footer_calltoaction_section',
  array(
    'priority'  => 40,
    'title'     => esc_html__( 'Call to Action','bootstrap2wordpress' ),
    'section'   => 'b2w_footer_section'
  )
);

// B2W Pre-Footer CTA fields

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'            => 'text',
    'settings'        => 'footer_sub_heading',
    'label'           => esc_html__('Sub Heading', 'bootstrap2wordpress'),
    'tooltip'         => esc_html__('Call to Action Section Sub Heading Text', 'bootstrap2wordpress'),
    'section'         => 'footer_calltoaction_section',
    'default'         => esc_html__('Join the course', 'bootstrap2wordpress'),
    'partial_refresh' => array(
      'footer_sub_heading' => array(
        'selector'          => '.footer-calltoaction p.sub-title',
        'render_callback'   => function() {
          return get_theme_mod( 'footer_sub_heading' );
        }
      ),
    ),
  )
);

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'            => 'text',
    'settings'        => 'footer_calltoaction_heading',
    'label'           => esc_html__('Heading', 'bootstrap2wordpress'),
    'tooltip'         => esc_html__('Footer Call to Action Heading Text. You are awesome!','bootstrap2wordpress'),
    'section'         => 'footer_calltoaction_section',
    'default'         => esc_html__('Bootstrap to WordPress','bootstrap2wordpress'),
    'partial_refresh' => array(
      'footer_calltoaction_heading' => array(
        'selector'                  => 'footer .footer-calltoaction h2',
        'render_callback'           => function() {
          return get_theme_mod( 'footer_calltoaction_heading' );
          }
      ),
    ),
  )
);

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'            => 'textarea',
    'settings'        => 'footer_calltoaction_desc',
    'label'           => esc_html__('Description', 'bootstrap2wordpress'),
    'tooltip'         => esc_html__('Enter short description.', 'bootstrap2wordpress'),
    'section'         => 'footer_calltoaction_section',
    'default'         => esc_html__('Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2021', 'bootstrap2wordpress'),
    'partial_refresh' => array(
      'footer_calltoaction_desc' => array(
        'selector'              => '.footer-calltoaction p.fcta-desc',
        'render_callback'       => function() {
          return get_theme_mod( 'footer_calltoaction_desc' );
          }
      ),
    ),
  )
);

Kirki::add_field(
  'b2w_customizer_config',
  array(
    'type'            => 'text',
    'settings'        => 'footer_calltoaction_button',
    'label'           => esc_html__( 'Button Text', 'bootstrap2wordpress' ),
    'tooltip'         => esc_html__( 'Enter Button Text.', 'bootstrap2wordpress' ),
    'section'         => 'footer_calltoaction_section',
    'default'         => 'Join now ->',
    'partial_refresh' => array(
      'footer_calltoaction_button' => array(
        'selector'        => '.footer-calltoaction .btn',
        'render_callback' => function() {
            return get_theme_mod( 'footer_calltoaction_button' );
          }
      ),
    ),
  )
);

Kirki::add_field(
	'b2w_customizer_config',
  array(
    'type'     => 'link',
    'settings' => 'footer_cta_link',
    'label'    => esc_html__( 'Button Link', 'bootstrap2wordpress' ),
    'tooltip'  => esc_html__( 'Enter a valid URL here', 'bootstrap2wordpress' ),
    'section'  => 'footer_calltoaction_section',
    'default'  => '#',
  )
);




/* End Footer Section Fields */
































/* */
