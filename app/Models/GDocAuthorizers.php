<?php

namespace App\Models;

use CodeIgniter\Model;

class GDocAuthorizers extends Model
{
    protected $table = 'g_docs_authorizers';
    protected $primaryKey = 'g_doc_auth_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'g_doc_auth_doc_id',
        'g_doc_auth_user_id',
        'g_doc_auth_status',
        'g_doc_auth_comment',
        'g_doc_auth_status_at',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getGDocAuthorizationsByUserId($userId): array
    {
        return $this->select('g_docs_authorizers.*, g_docs.g_doc_id, g_docs.g_doc_ref, g_docs.g_doc_title, g_docs.g_doc_comment, g_docs.g_doc_upload, g_docs.g_doc_status, users.user_name')
            ->join('g_docs', 'g_docs.g_doc_id = g_docs_authorizers.g_doc_auth_doc_id')
            ->join('users', 'users.user_id = g_docs.g_doc_uploaded_by')
            ->where('g_docs_authorizers.g_doc_auth_user_id', $userId)
            ->findAll();
    }
}
