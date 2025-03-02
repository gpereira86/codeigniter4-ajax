<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message'    => 'required'
        ];

        $validated = $this->validate($rules, [
            'name' => [
                'required' => 'O nome é obrigatório cabra da peste',
            ],
            'email' => [
                'valid_email' => 'Escreve a caralha do e-mail certo!'
            ]
        ]);

        // listErrors retorna com uma div
        // getErrors retorna um array
        if (!$validated){
            return redirect()->route('contact')->withInput()->with('errors', $this->validator->getErrors());
        }


    }


//    public function store()
//    {
////        session()->setTempdata('message', 'Contact sent sucessfully!', 10);
//
//        return redirect()->route('contact')->with('message', 'Message sent successfully!')->withInput();
//    }


//    public function index()
//    {
////        if(session()->has('name')){
////            var_dump(session()->get('name'));
////            session()->destroy();
////        }
//
////        session()->remove();
////        session()->push('person', ['lastName' => 'Cardoso']);
//
//        echo "<pre>";
//        var_dump(session()->get('person'), session()->get('name'));
//        echo "</pre>";
//
//        return view('contact');
//    }
//
//    public function store()
//    {
//        session()->set('person', [
//            'name' => 'Alex',
//            'age' => 40
//        ]);
//
//        session()->set('name', 'Salame');
//
//        return redirect()->route('contact');
//    }
}
