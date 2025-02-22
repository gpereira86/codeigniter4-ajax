<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db1 = db_connect('default');
        $db = db_connect('custom');

        $sql1 = "SELECT * FROM ci4_ajax_table WHERE id > :id:";
        $sql2 = "SELECT * FROM transactions WHERE id > :id:";
//        $sql = "INSERT INTO ci4_ajax_table (firstName, lastName, email, password, created_at, uploade_at) VALUES (?, ?, ?, ?, ?, ?)";
//        $sql = "UPDATE ci4_ajax_table SET email = :email:WHERE id = :id:";
//        $sql = "DELETE FROM ci4_ajax_table WHERE id = :id:";

        $acao = $db1->query($sql1, [
            'id'    => '20',
        ]);

//        echo "<pre>";
//        var_dump($acao->getResultObject());
//        echo "</pre>";
//        die();

        return view('welcome_message');
    }
}
