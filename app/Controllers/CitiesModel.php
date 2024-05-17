<?php
namespace App\Controllers;  
use App\Models\CitiesModel; 

class CitiesController extends BaseController
{
    private $citiesModel;

    public function __construct()
    {
        $this->citiesModel = new CitiesModel();
    }
    public function index()
    {
        return view('cities/index');
    }
}