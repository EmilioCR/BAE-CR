<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/BAE/grav/user/plugins/form/blueprints.yaml',
    'modified' => 1510781015,
    'data' => [
        'name' => 'Form',
        'version' => '2.10.0',
        'description' => 'Enables the forms handling',
        'icon' => 'check-square',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, form',
        'homepage' => 'https://github.com/getgrav/grav-plugin-form',
        'bugs' => 'https://github.com/getgrav/grav-plugin-form/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.3.5'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'general' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.GENERAL',
                    'fields' => [
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'refresh_prevention' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                            'help' => 'PLUGIN_FORM.REFRESH_PREVENTION_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'files' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.FILES',
                    'fields' => [
                        'files.multiple' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                            'help' => 'PLUGIN_FORM.ALLOW_MULTIPLE_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'files.limit' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGIN_FORM.LIMIT',
                            'help' => 'PLUGIN_FORM.LIMIT_HELP',
                            'default' => 10,
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'files.destination' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.DESTINATION',
                            'help' => 'PLUGIN_FORM.DESTINATION_HELP',
                            'default' => '@self'
                        ],
                        'files.accept' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_FORM.ACCEPT',
                            'help' => 'PLUGIN_FORM.ACCEPT_HELP',
                            'classes' => 'fancy',
                            'default' => [
                                0 => 'image/*'
                            ],
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'files.filesize' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.FILESIZE',
                            'help' => 'PLUGIN_FORM.FILESIZE_HELP',
                            'size' => 'x-small',
                            'default' => 5,
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'files.avoid_overwriting' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                            'help' => 'PLUGIN_FORM.AVOID_OVERWRITING_HELP',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'files.random_name' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_FORM.RANDOM_NAME',
                            'help' => 'PLUGIN_FORM.RANDOM_NAME_HELP',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'recaptcha' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_FORM.RECAPTCHA',
                    'fields' => [
                        'recaptcha.site_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY_HELP',
                            'default' => ''
                        ],
                        'recaptcha.secret_key' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                            'help' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY_HELP',
                            'default' => ''
                        ]
                    ]
                ]
            ]
        ]
    ]
];
