<?php

// use Slim\App;

// return function (App $app) {
    // e.g: $app->add(new \Slim\Csrf\Guard);

    // CORS
    // function cors()
    // {
    //     $app->add(function ($req, $res, $next) {
    //         $response = $next($req, $res);
    //         return $response->withHeader('Access-Control-Allow-Origin', '*')
    //             ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
    //             ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    //     });
    // }

    // // JWT Authentication (tuupola/slim-jwt-auth)
    // function jwt()
    // {
    //     $container = $app->getContainer();
    //     $container->get('db'); // JWT middleware callbacks dependent on DB, make sure Eloquent is initalized
    //     $this->app->add(new \Tuupola\Middleware\JwtAuthentication([
    //         "attribute" => "jwt",
    //         "path" => ["/"],
    //         "ignore" => ["/users"],
    //         "secret" => \App\Config\Config::auth()['secret'],
    //         "logger" => $this->container['logger'],
    //         "error" => function ($response, $arguments) {
    //             return $response->withJson([
    //                 'success' => false,
    //                 'errors' => $arguments["message"]
    //             ], 401);
    //         },
    //         "before" => function ($request, $arguments) {
    //             $user = \App\Models\User::find($arguments['decoded']['sub']);
    //             return $request->withAttribute("user", $user);
    //         }
    //     ]));
    // };
// };
