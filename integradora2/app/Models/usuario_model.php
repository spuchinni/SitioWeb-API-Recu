<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_uduario';
	protected $allowedFields = ['nombre', 'apellido', 'usuario','email','pass','id_perfil','baja'];
}

?>