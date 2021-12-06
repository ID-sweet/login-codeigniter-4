<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Input1;

class AdminController extends BaseController
{
    protected $M_Input1;
    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
        $this->M_Input1 = new M_Input1();
    }

    public function index()
    {
        return view("admin/v_dashboard");
    }

    public function data()
    {
        $input = new M_Input1();
        $data['input'] = $input->findAll();
        // $data['title'] = "Data input";
        // $data['appname'] = "SIKAP";
        // $data['heading'] = "Data input";
        return view("admin/v_data_rps");
    }

}
