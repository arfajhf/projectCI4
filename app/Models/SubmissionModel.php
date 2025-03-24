<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmissionModel extends Model
{
    protected $table            = 'submissions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['admin_id', 'document_id', 'status', 'queue', 'created_at', 'updated_at', 'deleted_at'];

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

    public function getWithDocument()
    {
        return $this->select('submissions.*, documentcategories.name as document_name')
            ->join('documentcategories', 'documentcategories.id = submissions.document_id')
            ->findAll();
    }

    public function getWithDocuments()
    {
        return $this->select('submissions.*, documentcategories.name as document_name, documentcategories.requirements as requirements , documentcategories.category as document_category, admins.name as admin_name, admins.email as admin_email, admins.phone as admin_phone, identificationcards.place_of_birth, identificationcards.date_of_birth, identificationcards.nationality, identificationcards.identity_number, identificationcards.admin_id as id_admin')
            ->join('documentcategories', 'documentcategories.id = submissions.document_id', 'left')
            ->join('admins', 'admins.id = submissions.admin_id', 'left')
            ->join('identificationcards', 'identificationcards.admin_id = submissions.admin_id', 'left');
    }
}
