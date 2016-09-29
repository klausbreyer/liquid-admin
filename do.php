<?php
use Symfony\Component\Yaml\Yaml;
// phpinfo();

require_once "bootstrap.php";


$value = Yaml::parse(file_get_contents('config.yml'));

print_r($value);