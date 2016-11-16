<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class AppController
{
    private $app;

    public function __construct(Application $app) {
        $this->app = $app;
    }

    public function indexAction() {
        return $this->app['twig']->render('index.html.twig');
    }

    public function authorizeAction() {
        return new JsonResponse(['session_id' => rand(1, 1000)]);
    }
}
