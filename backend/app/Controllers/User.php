<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            return $this->response->setJSON('send from backend')->setStatusCode(200);
        }
    }
}
