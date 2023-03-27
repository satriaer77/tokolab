<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'toko';
    protected $primaryKey       = 'id_toko';
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
        "nama_toko" => "required",

    ];
    protected $validationMessages   = [
        "nama_toko" => [
            "required" => "Nama toko tidak boleh kosong"
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getAllToko()
    {
        return $this->findAll();
    }
    public function getToko($idToko)
    {
        return $this->query("SELECT * FROM ".$this->table." WHERE id_toko= ".$idToko)->getRowArray();
    }

    public function insertToko($dataReq)
    {

        $sql = 'INSERT INTO '.$this->table.' (nama_toko, deskripsi_toko,alamat_toko, id_pemilik ) 
        VALUES ("'.$dataReq["namaToko"].'","'.$dataReq["deskripsi"].'","'.$dataReq["alamat"].'", 1)';

        return $this->query($sql);
    }
}
