<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

$_sSrcOxidDir = 'oxid-symfony-dependency-injection/src_oxid';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxid-symfony-dependency-injection',
    'title'       => 'Symfony Dependency Injection for OXID eShop',
    'description' => [
        'en' => 'Symfony Dependency Injection for OXID eShop.',
    ],
    'author'      => 'Andrius Šilgalis',
    'version'     => '0.0.1',
    'extend'      => [
        'oxshopcontrol' => $_sSrcOxidDir . '/core/AsSymfonyDiShopControl',
    ],
];
