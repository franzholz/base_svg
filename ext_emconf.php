<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'SVG Library',
    'description' => 'A library to read, parse and export to PDF SVG files.',
    'category' => 'misc',
    'version' => '0.0.6',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '5.4.0-7.3.99',
            'typo3' => '6.2.0-10.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
