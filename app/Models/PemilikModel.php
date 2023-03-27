<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilikModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemilik';
    protected $primaryKey       = 'id_pemilik';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|min_length[8]|max_length[30]|is_unique[pemilik.username]',
        'nama_pemilik' => 'required',
        'password' => 'required',
        'email' => 'valid_email'
    ];
    protected $validationMessages   = [
        'username' => [
            "required" => 'Username tidak boleh kosong',
            "min_length" => 'Username minimal 8 karakter',
            "max_length" => 'Username maksimal 30 karakter',
            "is_unique" => 'Username sudah terdaftar'
        ],
        'nama_pemilik' => [
            "required" => 'Nama tidak boleh kosong'
        ],
        'password' => [
            "required" => 'Password tidak boleh kosong'
        ],
        'email' => [
            "valid_email" => 'Email tidak valid'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
    

}
