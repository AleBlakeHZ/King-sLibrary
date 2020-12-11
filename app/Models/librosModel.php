<?php namespace App\Models;

use CodeIgniter\Model;

class librosModel extends Model
{
    protected $table      = 'libro';
    protected $primaryKey = 'idLibro';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idLibro', 'titulo', 'edicion', 'formato', 'idAutor', 'descripcion'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
} 
