<?php
namespace App\Controllers;
use App\Models\AttendancesModel;

class AttendancesController extends BaseController
{
  private $attendancesModel;
  public function __construct()
  {
      $this->attendancesModel = new AttendancesModel();
  }
  public function index()
  {
      return view('attendances/index');
  }
}