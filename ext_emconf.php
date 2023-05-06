<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'SVG Library',
    'description' => 'A library to read, parse and export to PDF SVG files.',
    'category' => 'misc',
    'version' => '0.5.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
