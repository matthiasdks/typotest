<?php

/**
 * Extension Manager/Repository config file for ext "typotest".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TypoTest',
    'description' => 'Just a test',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'GroupWork\\Typotest\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Matthias Dümmel',
    'author_email' => 'dev@group-work.de',
    'author_company' => 'Group-Work',
    'version' => '1.0.0',
];
