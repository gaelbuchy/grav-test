<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/gael/Sites/gael.local/grav/mysite/user/config/plugins/email.yaml',
    'modified' => 1493247280,
    'data' => [
        'enabled' => true,
        'from' => 'gael.buchy@icloud.com',
        'to' => 'gaelfr67@gmail.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'mailtrap.io',
                'port' => 2525,
                'encryption' => 'none',
                'user' => '391b52c646c955',
                'password' => 'c7cb253d4be209'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
