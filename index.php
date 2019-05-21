<?php
require_once '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/views');
$twig = new \Twig\Environment($loader, [
    // 'cache' => '/path/to/compilation_cache',
]);

switch(app.request.uri)
{
    case 'home':
    echo $twig-load('home', ['twigVar' => $arrayOfVar]);
    break;
    default: 
    echo $twig-load('home', ['twigVar' => $arrayOfVar]);
}


