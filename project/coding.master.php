<?php
// Coding部署
return [
    'source'  => '/mydata/res/books',
    'target'  => '/mydata/www/books',
    'backup'  => $config['backup'].'/books',
    'shell'   => 'sudo /etc/init.d/httpd restart',
    'refresh' => [
        'public/h5/index.html'
    ],
    'replace'=> [
        '?VER' => '?'.date('Ymd').rand(100, 999),
        'localhost' => 'mysql.phpbin.cn'
    ]
];