<?php

namespace tpr;

require_once __DIR__ . '/vendor/autoload.php';

Path::framework(\dirname(__DIR__) . \DIRECTORY_SEPARATOR);
Path::root(__DIR__ . \DIRECTORY_SEPARATOR);
Path::vendor(\dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR);

if (defined("APP_NAMESPACE")) {
    App::default()->setOption("namespace", APP_NAMESPACE);
}

App::default()
    ->setOption('debug', true)
    ->run();