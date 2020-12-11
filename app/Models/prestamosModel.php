<?php namespace App\Models;

use CodeIgniter\Model;

class prestamosModel extends Model
{
    protected $table      = 'prestamo';
    protected $primaryKey = 'idPrestamo';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idUsuario', 'idLibro', 'fecha'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
} 
