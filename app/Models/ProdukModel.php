<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
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
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function getAllProduk($idToko)
    {
        return $this->query("SELECT * FROM ".$this->table." WHERE id_toko= ".$idToko)->getResultArray();
    }
    public function getProduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id_produk' => $id])->first();
    }
    public function insertProduk($dataReq)
    {

        $sql = 'INSERT INTO '.$this->table.' (nama_produk, harga_produk, id_toko) 
        VALUES ("'.$dataReq["namaProduk"].'","'.$dataReq["harga"].'",'.$dataReq["idToko"].')';

        return $this->query($sql);
    }
}
