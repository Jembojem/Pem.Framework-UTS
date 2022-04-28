<?php

namespace App\Controllers;

use App\Models\DriverModel;

class Driver extends BaseController
{
    protected $driverModel;
    public function __construct()
    {
        $this->driverModel = new DriverModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_drivers') ? $this->request->getVar('page_drivers') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $search2 = $this->driverModel->search($keyword);
        } else {
            $search2 = $this->driverModel;
        }

        $data = [
            'title' => 'Our Drivers',
            'drivers' => $search2->paginate(5, 'drivers'),
            'pager' => $this->driverModel->pager,
            'currentPage' => $currentPage
        ];


        return view('pages/driver', $data);
    }
}
