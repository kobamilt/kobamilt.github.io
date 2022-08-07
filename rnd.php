<?php

use App\Models\UsersModel;
use Symfony\Component\Mime\MimeTypes;

define('BASEPATH', realpath(__DIR__));
define('ENVIRONMENT', $_SERVER['ENV'] ?? 'development');

require __DIR__ . '/vendor/autoload.php';
Core\Bootstrapper::boot();
$app = Core\Bootstrapper::getApp();

$container = $app->getContainer();
$model = $container->get(UsersModel::class);
$model->activate(4);