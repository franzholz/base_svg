<?php

########################################################################
# Extension Manager/Repository config file for ext "base_svg".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'SVG Library',
    'description' => 'A library to read, parse and export to PDF SVG files.',
    'category' => 'misc',
    'version' => '0.0.4',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Fabien Ménager, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array(
        'depends' => array(
            'php' => '5.4.0-7.3.99',
            'typo3' => '6.2.0-9.5.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
