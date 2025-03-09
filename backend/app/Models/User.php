<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'firstName'     => 'required|min_length[3]',
        'lastName'     => 'required|min_length[3]',
        'email'        => 'required|max_length[254]|valid_email|is_unique[users.email,id,{id}]',
        'password'     => 'required',
        'id'           => 'permit_empty|integer',
    ];
    protected $validationMessages   = [
        'firstName' => [
            'required' => 'O campo nome e obrigatório.',
            'min_length' => 'O número de caracteres deve ser maior que 3.',
        ],
        'email' => [
            'required' => 'O e-mail nome e obrigatório.',
            'is_unique' => 'O e-mail já está cadastrado.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
