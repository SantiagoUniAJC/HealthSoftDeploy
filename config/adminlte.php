<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'HSEQ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b> Health-Soft </b>',
    'logo_img' => '/images/logo_HSEQ.png',
    'logo_img_class' => 'brand-image elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'HSEQ Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */
    // Actualmente se esta utilizando la auth de laravel - Jetstream
    // 'auth_logo' => [
    //     'enabled' => false,
    //     'img' => [
    //         'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    //         'alt' => 'Auth Logo',
    //         'class' => '',
    //         'width' => 50,
    //         'height' => 50,
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration. Currently, two
    | modes are supported: 'fullscreen' for a fullscreen preloader animation
    | and 'cwrapper' to attach the preloader animation into the content-wrapper
    | element and avoid overlapping it with the sidebars and the top navbar.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => '/images/logo_HSEQ.png',
            'alt' => 'HSEQ Preloader Image',
            'effect' => 'bounce',
            'width' => 460,
            'height' => 460,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-dark',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    // 'use_route_url' => false,
    'dashboard_url' => 'dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'Registro de Historias Clinicas, ingresa el nombre o documento del Paciente',
            'topnav_right' => true,
            'url'        => 'admin/historiasclinicas',
            'method'       => 'GET',
            'input_name'   => 'termino',
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Busqueda',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'    => 'Agenda',
            'icon'    => 'fas fa-fw fa-calendar',
            'submenu' => [
                [
                    'text' => 'Consultar Agenda',
                    'icon'    => 'fas fa-fw fa-clock',
                    'url'  => 'admin/agendas',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => 'Asistencia a Citas',
                    'icon'    => 'fas fa-fw fa-check',
                    'url'  => 'admin/agendas/asistencia-citas',
                    'icon_color' => 'green',
                ],
            ],
        ],
        [
            'text'    => 'Nueva Venta o Servicio',
            'icon'    => 'fas fa-fw fa-credit-card',
            // 'can'     => 'admin.historiasclinicas.create',// Prueba para verificar si funciona el can modificar el nombre de la ruta
            'submenu' => [

                [
                    'text' => 'Crear Venta',
                    'url'  => 'admin/ordendeservicios/create',
                    'icon'    => 'fas fa-fw fa-credit-card',
                    'icon_color' => 'green',
                ],

            ],
        ],
        [
            'text'    => 'Seguimiento Pendientes',
            'icon'    => 'fas fa-tasks',
            'submenu' => [
                [
                    'text' => 'Citas Pendientes',
                    'url'  => 'admin/agendas/citas-pendientes',
                    'icon'    => 'fas fa-fw fa-calendar',
                    'icon_color' => 'red',
                ],
                [
                    'text' => 'Conceptos Abiertos',
                    'url'  => 'admin/conceptosmedicos/conceptos-abiertos',
                    'icon'    => 'fas fa-fw fa-calendar',
                    'icon_color' => 'red',
                ],
                [
                    'text' => 'Conceptos Aplazados',
                    'url'  => '#',
                    'icon'    => 'fas fa-fw fa-calendar',
                    'icon_color' => 'red',
                ],


            ],
        ],
        [
            'text'    => 'Concepto Médico',
            'icon'    => 'fas fa-fw fa-medkit',
            'submenu' => [
                [
                    'text' => 'Consultar',
                    'url'  => 'admin/conceptosmedicos',
                    'icon'    => 'fas fa-fw fa-medkit',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => 'Notas médicas',
                    'url'  => 'admin/notasmedicas',
                    'icon'    => 'fas fa-fw fa-sticky-note',
                    'icon_color' => 'red',
                ],
                [
                    'text' => 'Calificación x PCL',
                    'url'  => '#',
                    'icon'    => 'fas fa-fw fa-star',
                    'icon_color' => 'yellow',
                ],

            ],
        ],
        [
            'text'    => 'Ordenes de Servicio',
            'icon'    => 'fas fa-fw fa-briefcase',
            'submenu' => [
                [
                    'text' => 'Consultar',
                    'url'  => 'admin/ordendeservicios',
                    'icon'    => 'fas fa-fw fa-briefcase',
                    'icon_color' => 'blue',

                ],
            ],
        ],
        [
            'text'    => 'Envios & Entregas',
            'icon'    => 'fas fa-fw fa-envelope',
            'submenu' => [
                [
                    'text' => 'Entrega de Certificados',
                    'url'  => '#',
                    'icon'    => 'fas fa-fw fa-envelope',
                    'icon_color' => 'green',
                ],
                [
                    'text' => 'Historial de Envios',
                    'url'  => '#',
                ],
                [
                    'text' => 'Formulario Healt-Soft',
                    'url'  => 'admin/envios/form-modificar-app',
                    'icon'    => 'fas fa-fw fa-folder',
                    'icon_color' => 'green',

                ]
            ],
        ],
        [
            'text'    => 'Clientes',
            'icon'    => 'fas fa-fw fa-cog',
            'submenu' => [
                [
                    'text' => 'Consultar',
                    'url'  => 'admin/clientes',
                    'icon'    => 'fas fa-fw fa-cog',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => 'Certificaciones',
                    'url'  => '#',
                    'icon'    => 'fas fa-fw fa-file',
                    'icon_color' => 'white',
                ],
            ],
        ],
        [
            'text'    => 'Ventas',
            'icon'    => 'fas fa-fw fa-globe',
            'submenu' => [
                [
                    'text' => 'Tarifarios',
                    'url'  => 'admin/tarifarios',
                    'icon'    => 'fas fa-fw fa-globe',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => 'Procesos de Venta',
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'    => 'Informes & Reportes',
            'icon'    => 'fas fa-fw fa-download',
            'submenu' => [
                [
                    'text' => 'Clientes',
                    'url'  => '#',
                ],
                [
                    'text' => 'Administrativos',
                    'url'  => '#',
                ],
                [
                    'text' => 'Ventas',
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'    => 'Formatos',
            'icon'    => 'fas fa-fw fa-file',
            'submenu' => [
                [
                    'text' => 'Descargas',
                    'url'  => 'admin/formatos/download',
                    'icon'    => 'fas fa-fw fa-download',
                    'icon_color' => 'green',
                ],
            ],
        ],
        [
            'text'    => 'Auditoria',
            'icon'    => 'fas fa-fw fa-eye',
            'submenu' => [
                [
                    'text' => 'Ordenes de Servicio',
                    'url'  => 'admin/auditorias/auditar-orden-de-servicio',
                    'icon'    => 'fas fa-fw fa-briefcase',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => 'Ventas',
                    'url'  => '#',
                    'icon'    => 'fas fa-fw fa-globe',
                    'icon_color' => 'white',
                ],
            ],
        ],
        [
            'text'    => 'SEGURIDAD & SALUD EN EL TRABAJO',
            'icon'    => 'fas fa-fw fa-hard-hat',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'CONFIGURACION DE LA CUENTA'],
        [
            'text' => 'Perfil',
            'url'  => 'profile',
            'icon' => 'fas fa-fw fa-user',
            'can' => 'admin',
        ],
        [
            'text' => 'Cambio de Contraseña',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
            'can' => 'admin',
        ],

        ['header' => 'ETIQUETAS'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
