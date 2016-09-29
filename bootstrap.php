<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// $paths = array("/path/to/entity-files");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'   => '127.0.0.1',
    'user'     => 'buzzbird',
    'password' => 'buzzbird',
    'dbname'   => 'buzzbird_kb',
                'charset' => 'utf8',
                'driverOptions' => array(
                        1002=>'SET NAMES utf8'
                )
);


// $dbParams = array(
//     'driver'   => 'pdo_mysql',
//     'host'   => '127.0.0.1',
//     'user'     => 'root',
//     'password' => 'NEWPASS',
//     'dbname'   => 'roibird',
//                 'charset' => 'utf8',
//                 'driverOptions' => array(
//                         1002=>'SET NAMES utf8'
//                 )
// );



// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$entityManager = EntityManager::create($dbParams, $config);