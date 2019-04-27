<?php
namespace Src\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \Src\Models\User as User;

class UserController
{

    public function getAll(Request $request, Response $response)
    {
        //Table::select('name','surname')->where('id', 1)->get();
        $users = User::where('is_active', 1)->get();
        // return $response->withJson($users);
        return respond($response)->ok($users);
    }

    public function getById(Request $request, Response $response)
    {
        // $id = (int)$args['id'];
        $users = User::where('is_active', 1)->get();
        return $response->withJson($users);
    }
}
