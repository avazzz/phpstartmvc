<?php
require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->title = 'My cool site';
$view->news = \App\Models\News::findAll();


$view->display(__DIR__ . '/App/templates/index.php');
