<?php

namespace App\Models;

use CodeIgniter\Model;

class IdentificationCardModel extends Model
{
    protected $table            = 'identificationcards';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['admin_id', 'place_of_birth', 'date_of_birth', 'addres', 'religion', 'marital_status', 'status', 'job', 'nationality', 'identity_number', 'blood_type', 'created_at', 'updated_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAdmin()
    {
        return $this->table('identificationcards')
        // ->select('identificationcards.*', 'admins.name')
            ->join('admins', 'admins.id = identificationcards.admin_id')
            ->findAll();
    }
}
