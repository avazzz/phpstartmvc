<?php
require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'My cool site';
$view->users = \App\Models\User::findAll();


$cont = $view->render(__DIR__ . '/App/templates/index.php');
echo str_replace('@', '!!!', $cont);
