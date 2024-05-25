<?php
namespace App\Models;

use CodeIgniter\Model;

class RolsModel extends Model
{
  protected $table      = 'rols';
  protected $primaryKey = 'id_rol';

  protected $useAutoIncrement = true;
  
  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = ['rol_name', 'autority'];

  public function getRols()
  {
    return $this->db->query("SELECT * FROM rols")->getResult();
  }
}
?>