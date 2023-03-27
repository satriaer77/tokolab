<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Supplier',
            // 'supplier' => $this->supplier->findAll()
        ];
        return view('toko_supplier/dashboard_supplier', $data);
    }
}
