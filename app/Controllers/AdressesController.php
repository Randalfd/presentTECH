<?php 
namespace App\Controllers;
use App\Models\AdressesModel;

class AdressesController extends BaseController
{
  private $adressesModel;
  public function __construct()
  {
      $this->adressesModel = new AdressesModel();
  }

  public function index()
  {
      return view('adresses/index');
  }
}