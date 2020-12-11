<?php namespace App\Models;

use CodeIgniter\Model;

class prestamosModel extends Model
{
    protected $table      = 'solicitud';
    protected $primaryKey = 'idSolicitud';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idSolicitud', 'idUsuario', 'tituloLibro', 'autor', 'fecha'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
} 
