<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/rcruzr/workspace/adunis/testing/user/config/plugins/git-sync.yaml',
    'modified' => 1588462780,
    'data' => [
        'enabled' => false,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/ricktonycr/prueba.git',
        'user' => 'ricktonycr@gmail.com',
        'password' => NULL,
        'webhook' => '/_git-sync-7beea9c9eaea',
        'webhook_enabled' => '0',
        'webhook_secret' => 'b4d5a4ac6a345f497a091fd0251a9f7e7158488bd352d3d2',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
