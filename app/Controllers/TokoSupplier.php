<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TokoModel;


class TokoSupplier extends BaseController
{
    public function index()
    {
        $this->model = model("TokoModel");
        $data = [
            'title' => 'Dashboard Supplier',
            'toko'  => $this->model->findAll()
        ];
        // d($data);
        return view('toko_supplier/dashboard_supplier', $data);
    }
}
