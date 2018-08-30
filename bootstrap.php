<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);
// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

class DoctrineManager {
	public static function getEntityManager(){
		global $entityManager;
		return $entityManager;
	}
}
