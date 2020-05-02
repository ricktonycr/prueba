<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://archives/archives.yaml',
    'modified' => 1588461093,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'date_display_format' => 'F Y',
        'show_count' => true,
        'limit' => 12,
        'taxonomy_names' => [
            'month' => 'archives_month',
            'year' => 'archives_year'
        ],
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'page_specific_config' => [
            0 => [
                'route' => '/blog',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filters' => [
                    'page@' => '/blog'
                ],
                'filter_combinator' => 'and'
            ]
        ]
    ]
];
