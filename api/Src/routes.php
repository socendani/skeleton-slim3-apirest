<?php
$app->get('/todos', function ($request, $response, $args) {
    // $user = \Src\Models\User::find(1);
    // var_dump($user);
    // die();
    $todos = \Src\Models\User::all();
    // echo "JJJ";
    return $this->response->withJson($todos);
});
$app->get('/user/{id}', '\Src\Controllers\UserController:getById');
$app->get('/users', '\Src\Controllers\UserController:getAll');

// $app->add(function ($req, $res, $next) {
//     $res = $next($req, $res);
//     return $res
//             ->withHeader('Access-Control-Allow-Origin', 'http://localhost:7000')
//             ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
//             ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
// });



// namespace Src;

// use Slim\App;
// // use Slim\Http\Request;
// // use Slim\Http\Response;


// return function (App $app) {
//     // $container = $app->getContainer();

//     $app->get('/todo', '\Src\Controllers\UserController:dani');
//     // $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
//     $app->get('/[{name}]', function () {
//         die("404");
//     });
// };
