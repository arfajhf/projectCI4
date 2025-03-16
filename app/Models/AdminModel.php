<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'admins';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'password', 'role', 'phone', 'created_at', 'updated_at'];

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
    protected $validationRules      = [
        'email'    => 'required|valid_email',
        'password' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getAdminWithIDCard($adminId)
    {
        return $this->db->table('admins')
            ->select('admins.*, identificationcards.*')
            ->join('identificationcards', 'identificationcards.admin_id = admins.id')
            ->where('admins.id', $adminId)
            ->get()
            ->getRow();
    }
    public function getAllAdminsWithIDCards()
    {
        return $this->db->table('admins')
            ->select('admins.id, admins.name, admins.email, admins.phone, identificationcards.identity_number')
            ->join('identificationcards', 'identificationcards.admin_id = admins.id', 'left') // Pakai LEFT JOIN biar tetap dapat semua admin walau tanpa kartu identitas
            ->where('admins.role', 'penduduk')
            ->get()
            ->getResultArray(); // Gunakan array agar lebih mudah diakses di View
    }
    public function searchAdminsByIdentity($identityNumber)
    {
        return $this->db->table('admins')
            ->select('admins.*, identificationcards.identity_number, identificationcards.place_of_birth, identificationcards.date_of_birth, identificationcards.religion, identificationcards.marital_status, identificationcards.job, identificationcards.nationality, identificationcards.blood_type')
            ->join('identificationcards', 'identificationcards.admin_id = admins.id', 'left')
            ->like('identificationcards.identity_number', $identityNumber)
            ->get()
            ->getResult(); // Hasilnya tetap array of objects
    }
}
