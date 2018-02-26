<?php

require_once('config.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
// $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);