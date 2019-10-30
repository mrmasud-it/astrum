<?php
// for icons
vc_map(array(
    'name'          =>      __('Icon','astrum'),
    'description'   =>      'This is for icon',
    'base'          =>      'icons',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'astrum_icons',
            'type'          =>  'iconpicker',
            'heading'       =>  'Choose Icon'

        ),
        array(
            'param_name'    =>  'astrum_icons_heading',
            'type'          =>  'textfield',
            'heading'       =>  'Your Icon Heading'

        ),
        array(
            'param_name'    =>  'astrum_icons_dec',
            'type'          =>  'textarea',
            'heading'       =>  'Your Icon Description'

        ),
    )

));

// for recent works
vc_map(array(
    'name'          =>      __('Recent Work','astrum'),
    'description'   =>      'This is for recent work',
    'base'          =>      'recent_works',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'recent_works_p',
            'type'          =>  'textfield',
            'heading'       =>  'Post per slider'

        ),
    )
));

// for our client
vc_map(array(
    'name'          =>      __('Our Client','astrum'),
    'description'   =>      'This is for client section',
    'base'          =>      'client',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'clients_p',
            'type'          =>  'textfield',
            'heading'       =>  'Post per slider'

        ),
    )
));

// for heading and text
vc_map(array(
    'name'          =>      __('Heading with Text','astrum'),
    'description'   =>      'This is for heading',
    'base'          =>      'heading_text',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'heading_text_h',
            'type'          =>  'textfield',
            'heading'       =>  'Heading'

        ),
        array(
            'param_name'    =>  'heading_text_s',
            'type'          =>  'textfield',
            'heading'       =>  'Span'

        ),
        array(
            'param_name'    =>  'heading_text_p',
            'type'          =>  'textarea',
            'heading'       =>  'Parafraph'

        ),
    )

));

//for skills
vc_map(array(
    'name'          =>      __('Our Skills','astrum'),
    'description'   =>      'This is for skills',
    'base'          =>      'skills',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'type'          =>  'param_group',
            'heading'       =>  'skills_group',
            'param_name'    =>  'skills_grp',
            'params'        =>  array(
                array(
                    'param_name'    =>  'skills_i',
                    'type'          =>  'iconpicker',
                    'heading'       =>  'Icon'
        
                ),
                array(
                    'param_name'    =>  'skills_h',
                    'type'          =>  'textfield',
                    'heading'       =>  'Heading'
        
                ),
                array(
                    'param_name'    =>  'skills_p',
                    'type'          =>  'textfield',
                    'heading'       =>  'Percent'
        
                )
            )

        )
    )

));

// for our team
vc_map(array(
    'name'          =>      __('Our Team','astrum'),
    'description'   =>      'This is for client section',
    'base'          =>      'team',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'team_p',
            'type'          =>  'textfield',
            'heading'       =>  'Post per slider'

        ),
    )
));
//for heading service page
vc_map(array(
    'name'          =>      __('Service Heading  Text','astrum'),
    'description'   =>      'This is for heading',
    'base'          =>      'service_text',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'service_text_h',
            'type'          =>  'textfield',
            'heading'       =>  'Heading'

        ),
        array(
            'param_name'    =>  'service_text_s',
            'type'          =>  'textfield',
            'heading'       =>  'Span'

        ),
        array(
            'param_name'    =>  'service_text_p',
            'type'          =>  'textarea',
            'heading'       =>  'Parafraph'

        ),
    )

));
// for choose us sec service page
vc_map(array(
    'name'          =>      __('Choose','astrum'),
    'description'   =>      'This is for choose',
    'base'          =>      'choose',
    'category'      =>      'Astrum',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'type'          =>  'param_group',
            'heading'       =>  'Choose Group',
            'param_name'    =>  'choose_grp',
            'params'        =>  array(
                array(
                    'param_name'    =>  'choose_grp_h',
                    'type'          =>  'textfield',
                    'heading'       =>  'Heading'
        
                )
            )
        )
    )
));

// for alert us sec service page
vc_map(array(
    'name'      => __('Alert','astrum'),
    'description'   => 'This is for choose',
    'base'          => 'alert',
    'category'      => 'Astrum',
    'icon'          => 'fa fa-map',
    'params'        => array(
        array(
            'param_name'      => 'alert',
            'type'            => 'textfield',
            'heading'         => 'Type your alert text'
        )
    )
));

// for iconbox
vc_map(array(
    'name'      => __('Iconbox','astrum'),
    'description'   => 'This is for iconbox',
    'base'          => 'iconbox',
    'category'      => 'Astrum',
    'icon'          => 'fa fa-map',
    'params'        => array(
        array(
            'param_name'      => 'iconbox_h',
            'type'            => 'textfield',
            'heading'         => 'Type your heading'
        ),
        array(
            'param_name'      => 'iconbox_i',
            'type'            => 'iconpicker',
            'heading'         => 'Select Your icon'
        ),
        array(
            'param_name'      => 'iconbox_t',
            'type'            => 'textarea',
            'heading'         => 'Type your text'
        ),
    )
));

// for map
vc_map(array(
    'name'      => __('Maps','astrum'),
    'description'   => 'This is for map',
    'base'          => 'maps',
    'category'      => 'Astrum',
    'icon'          => 'fa fa-map',
    'params'        => array(
        array(
            'param_name'      => 'place',
            'type'            => 'textfield',
            'heading'         => 'Type your place name'
        ),
        array(
            'param_name'      => 'zoom',
            'type'            => 'textfield',
            'heading'         => 'Type your your zoom text'
        ),
    )
));

// for contact page information
vc_map(array(
    'name'      => __('Contact','astrum'),
    'description'   => 'This is for contact',
    'base'          => 'contact',
    'category'      => 'Astrum',
    'icon'          => 'fa fa-map',
    'params'        => array(
        array(
            'param_name'      => 'c_text',
            'type'            => 'textarea',
            'heading'         => 'Type your text'
        ),
        array(
            'param_name'      => 'c_number',
            'type'            => 'textfield',
            'heading'         => 'Type your your number'
        ),
        array(
            'param_name'      => 'c_email',
            'type'            => 'textfield',
            'heading'         => 'Type your your email'
        ),
        array(
            'param_name'      => 'c_website',
            'type'            => 'textfield',
            'heading'         => 'Type your your zoom website'
        ),
    )
));


//this for Client Review Section
vc_map(array(
    'name' => __('Happy Cilents', "astrum"),
    'description' => __('This for Our Service', "astrum"),
    'base' => 'our_client',
    'category' => 'Astrum',
    'icon' => 'fa fa-facebook',
    'params' => array(
        array(
            'param_name' => __('our_client_h', "astrum"),
            'type' => 'textfield',
            'heading' => __('This for heading', "astrum"),
        ),
        array(
            'type' => 'param_group',
            'heading' => __('Clients Group', 'astrum'),
            'param_name' => 'clients_group',
            'params' => array(
                array(
                    'param_name' => __('client_pic', "astrum"),
                    'type' => 'attach_image',
                    'heading' => __('Upload Your Client photo', "astrum"),
                ),
                array(
                    'param_name' => __('client_des', "astrum"),
                    'type' => 'textarea',
                    'heading' => __('This for Client quation', "astrum"),
                ),
                array(
                    'param_name' => __('client_name', "astrum"),
                    'type' => 'textarea',
                    'heading' => __('This for Cilent Name', "astrum"),
                ),
            ),
        ),
    ),
));