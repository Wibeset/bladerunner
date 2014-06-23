<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$dir   = [
	'views' => __DIR__ . '/../views',
	'cache' => __DIR__ . '/../cache',
	'dist'  => __DIR__ . '/../dist'
];

$views = [
	'index'
];

$blade = new Blade($dir['views'], $dir['cache']);
$blade->view()->share([
	'version' => time()
]);

// Generate views
foreach ($views as $view) {
	$html = $blade->view()->make($view);
	file_put_contents($dir['dist'] . '/' . $view . '.html', $html);
}