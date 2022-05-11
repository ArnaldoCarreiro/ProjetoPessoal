<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
                                'login_usuario',
                                'login_senha'
                            ];

    protected $useTimestamps = true;
    protected $createdField  = 'dataCriado';
    protected $updatedField  = 'dataEditado';
    protected $deletedField  = 'dataExcluido';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

 ?>
