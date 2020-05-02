<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home1/aduni/prueba/user/config/plugins/git-sync.yaml',
    'modified' => 1588462774,
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
        'password' => 'gitsync-def5020066c70dc199a0664419e301acaf25281416dd733611312eb65a6f2eaddf0d433e74086bd5a9326e8ee1fc45170adbac79d3bcd0c48e6eba5eef1d9c67207467a5cad6e2381478484a2847cd1aa0a118bf79aaecbac1ce46a5399a3ef1abceaad2b50630ffe5',
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
