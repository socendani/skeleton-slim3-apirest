<?php
//https://stackoverflow.com/questions/38256812/call-to-a-member-function-connection-on-null-error-in-slim-using-laravels-elo

$container = $app->getContainer();
// Iluminate ORM integration
// $container['db'] = function ($c) {
//     $capsule = new \Illuminate\Database\Capsule\Manager;
//     $capsule->addConnection($c['settings']['db']);
//     $capsule->setAsGlobal();
//     $capsule->bootEloquent();
//     return $capsule;
// };

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};



// use Slim\App;

// return function (App $app) {
//     $container = $app->getContainer();

//     // Service factory for the ORM
//     $container['db'] = function ($container) {
//         $capsule = new \Illuminate\Database\Capsule\Manager;
//         $capsule->addConnection($container['settings']['db']);

//         $capsule->setAsGlobal();
//         $capsule->bootEloquent();

//         return $capsule;
//     };
// };
