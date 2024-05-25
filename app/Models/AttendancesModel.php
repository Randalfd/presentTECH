<?php 

namespace App\Models;

use CodeIgniter\Model;

Class attendancesModel extends Model
{
  protected $table = 'attendances';
  protected $primaryKey = 'id_attendance';

  protected $useAutoIncrement = true;

  protected $returnType = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'id_attendance',
    'id_mk',
    'day',
    'hour',
    'movent',
    'id_location'
  ];

  public function getAttendancesOfUsers($id_mk){
    return $this->db->query("
    SELECT 
      u.first_name,
      u.last_name,
      a.day,
      a.hour, 
      a.movent, 
      a.id_location,

      CASE 
        WHEN hour <= '07:45:00' OR hour <= '07:50:00' THEN 'Llegada a timepo' 
        WHEN hour >= '07:50:01' THEN 'Llegada tarde'
        ELSE 'No se ha registrado'
      END AS 'arrived'

      FROM attendances AS a
      
      INNER JOIN magnetic_keys AS mk
        ON a.id_mk = mk.id_mk

      INNER JOIN users AS u
        ON mk.id_user = u.id_user

      WHERE mk.id_mk = $id_mk
    ")
    ->getResult();
  }

}