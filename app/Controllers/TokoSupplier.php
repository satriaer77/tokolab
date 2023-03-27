<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TokoModel;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\Request;
use Config\Services;

class TokoSupplier extends BaseController
{
    public function index()
    {
        $this->model = model("TokoModel");
        $data = [
            'title' => 'Dashboard Supplier',
            'page'  => 'dashboard',
            'toko'  => $this->model->findAll(),
        ];
        // d($data);
        
        return view('toko_supplier/dashboard_supplier', $data);
    }

    public function managementToko()
    {
        
        $this->model = model("TokoModel");
        $data = [
            'title' => 'Management Toko',
            'page'  => 'management-toko',
            'toko'  => $this->model->findAll(),
            'val'   => \Config\Services::validation()
            
        ];


        return view('toko_supplier/data_toko', $data);
    }

    public function detailToko($idToko)
    {
        
        $this->model = model("TokoModel");
        $data = [
            'title' => 'Management Toko',
            'page'  => 'management-toko',
            'toko'  => $this->model->getToko($idToko),
            'produk'=> model("ProdukModel")->getAllProduk($idToko),

        ];

        return view('toko_supplier/detail_toko', $data);
    }


    public function tambahToko()
    {
        if(!$this->validate([
            "namaToko" => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Toko Tidak Boleh Kosong'
                ]
            ]
        ])){
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        else
        {
            $this->model = model("TokoModel");
            $this->model->insertToko($_REQUEST);
            return redirect()->route('supplier/managementToko');
        }


    }

    public function tambahProduk()
    {
        $this->model = model("ProdukModel");
        $this->model->insertProduk($_REQUEST);

        return redirect()->back();
    }
}
