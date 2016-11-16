<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
// Enable debug
$app['debug'] = true;
// Register service controller provider
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
// Add app controeller service
$app['app.controller'] = function() use ($app) {
    return new Controller\AppController($app);
};
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../src/Views',
));
$app->get('/', 'app.controller:indexAction');
$app->post('/authorize/', 'app.controller:authorizeAction');

$app->run();
