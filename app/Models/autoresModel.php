<?php namespace App\Models;

use CodeIgniter\Model;

class prestamosModel extends Model
{
    protected $table      = 'autor';
    protected $primaryKey = 'idAutor';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idAutor', 'nombre'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
} 
