<?php

namespace App\Controllers;


use App\Models\Ci4AjaxTable;

class Home extends BaseController
{
    public function index(): string
    {
        $ci4AjaxTable = new Ci4AjaxTable();
        $registros = $ci4AjaxTable->select('id,firstName,lastName')->paginate(10, );

        return view('home', ['registros' => $registros, 'pager' => $ci4AjaxTable->pager]);
    }


//    public function index(): string
//    {
//        $ci4AjaxTable = new Ci4AjaxTable();
//        $acao = $ci4AjaxTable->findAll();
//        $acao = $ci4AjaxTable->find(3);
//        $acao = $ci4AjaxTable->select('id, firstName, lastName')->limit(10)->findAll();
//        $acao = $ci4AjaxTable->select('id, firstName, lastName')->findAll(5);

        // teste de callback do model criado
//        $acao = $ci4AjaxTable->insert([
//            'firstName' => 'Alexandre',
//            'lastName' => 'sem Moral',
//            'email' => 'fpddemoraes@gmail.com',
//            'password' => '123',
//        ]);

        // Teste $useSoftDeletes = true:
//        $acao = $ci4AjaxTable->delete('308'); // Sem o $useSoftDeletes
//        $acao = $ci4AjaxTable->where('id', 307)->delete(); // Sem o $useSoftDeletes
//        $acao = $ci4AjaxTable->delete(309); // Com o $useSoftDeletes


//        echo "<pre>";
//        var_dump($acao);
//        echo "</pre>";
//        die();
//
//        return view('welcome_message');
//    }


//    ## Manipulação de banco de dados query builder ##
//    public function index(): string
//    {
//        $db      = \Config\Database::connect();
//        $builder = $db->table('ci4_ajax_table');
////        $acao = $builder->getCompiledSelect(); // Ver query criada -> getCompiledSelect()
//
//        // Select:
////        $acao = $builder->select()->get(); // Select
////        $acao = $builder->select('id, firstName, lastName')->get(); // Select filtrado
////        $acao = $builder->select('id, firstName, lastName')->where('id >', 10)->get(); // Select + where (where sem sinal utiliza igual)
//
//        // Vários wheres:
////        $where = ['id >' => 10, 'firstName' =>  'Nero'];
////        $acao = $builder->select('id, firstName, lastName')->where($where)->get(); // Select + where AND
////        $acao = $builder->select('id, firstName, lastName')->where($where)->orWhere('email', 'nmacnameea@4shared.com' )->getCompiledSelect(); // Select + where OR
//
//        // Like (busca):
////        $acao = $builder->select('id, firstName, lastName')->like('firtName', 'joão')->getCompiledSelect();
////        $acao = $builder->select('id, firstName, lastName')->like('firtName', 'joão', 'before')->getCompiledSelect(); // Para a busca depois ou antes da palavra, incluir parâmetro 'before'ou 'after'
//
//
//        // Insert:
////        $data = [
////            'firstName' => 'Glauco',
////            'lastName' => 'Pereira',
////            'email' => 'pereira@gmail.com',
////            'password' => password_hash('123', PASSWORD_DEFAULT ),
////            'created_at' => date('Y-m-d H:i:s'),
////            'updated_at' => date('Y-m-d H:i:s')
////            ];
////        $acao = $builder->insert($data);
//
//
//        // Update:
////        $acao = $builder->where('id', 304)->set('firstName', 'Grande')->update(); // Usando Set mais de um, ir inserindo set
////        $data = [
////            'lastName' => 'pereira',
////            'email' => 'pereira@gmail.com',
////            ];
////        $acao = $builder->where('id', 304)->update($data); // Usando array direto
////        $acao = $builder->where('id', 304)->set($data)->update(); // Usando SET com array
//
//
//        // Delete:
//        $acao = $builder->where('id', 304)->delete(); // Usando SET com array
//
//        echo "<pre>";
//        var_dump($acao);
//        echo "</pre>";
//        die();
//
//        return view('welcome_message');
//    }


//    ## Manipulação de banco de dados manual ##
//    public function index(): string
//    {
//        $db1 = db_connect('default');
//        $db = db_connect('custom');
//
//        $sql1 = "SELECT * FROM ci4_ajax_table WHERE id > :id:";
//        $sql2 = "SELECT * FROM transactions WHERE id > :id:";
////        $sql = "INSERT INTO ci4_ajax_table (firstName, lastName, email, password, created_at, uploade_at) VALUES (?, ?, ?, ?, ?, ?)";
////        $sql = "UPDATE ci4_ajax_table SET email = :email:WHERE id = :id:";
////        $sql = "DELETE FROM ci4_ajax_table WHERE id = :id:";
//
//        $acao = $db1->query($sql1, [
//            'id'    => '20',
//        ]);
//
////        echo "<pre>";
////        var_dump($acao->getResultObject());
////        echo "</pre>";
////        die();
//
//        return view('welcome_message');
//    }

}
