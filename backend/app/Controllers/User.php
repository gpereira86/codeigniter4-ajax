<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User as UserModel;

class User extends BaseController
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            return $this->response->setJSON('send from backend')->setStatusCode(200);
        }
    }

    public function create()
    {
        return view('user_create');
    }

    public function store()
    {
        $user = new UserModel();
        $post = $this->request->getPost();
        $post['id'] = 50;

        $inserted = $user->insert($post);



        if (!$inserted) {
            return redirect()->route('user.create')->withInput()->with('errors', $user->errors());
        }

        echo "<pre>";
        var_dump($inserted);
        echo "</pre>";
        die();
    }
}
