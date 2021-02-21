<?php

require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache'
));

$template = $twig->loadTemplate('index.html');
echo $template->render(array());