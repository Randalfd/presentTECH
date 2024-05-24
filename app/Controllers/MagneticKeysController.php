<?php

namespace App\Controllers;
use App\Models\MagneticKeysModel;

class MagneticKeysController extends BaseController
{
  private $magneticKeysModel;
  public function __construct()
  {
      $this->magneticKeysModel = new MagneticKeysModel();
  }

  public function index()
  {
      return view('magneticKeys/index');
  }

  public function delete($id)
  {
      $this->magneticKeysModel->delete($id); 
  }
  public function edit($id)
  {
      $magneticKey = $this->magneticKeysModel->find($id);
      return view('magneticKeys/edit', ['magneticKey' => $magneticKey]);
  }

}