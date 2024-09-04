<?php

namespace App\Models;

use CodeIgniter\Model;

class GDoc extends Model
{
    protected $table = 'g_docs';
    protected $primaryKey = 'g_doc_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'g_doc_ref',
        'g_doc_title',
        'g_doc_comment',
        'g_doc_upload',
        'g_doc_uploaded_by',
        'g_doc_last_status_update_by',
        'g_doc_status',
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

    public function getDocById($g_doc_id): object|array|null
    {
        $document = $this->select('g_docs.*, uploader.user_name AS uploader_name, uploader.user_email AS uploader_email')
            ->join('users AS uploader', 'uploader.user_id = g_docs.g_doc_uploaded_by', 'left')
            ->where('g_doc_id', $g_doc_id)
            ->first();

        if (!$document) {
            return null;
        }

        $authorizers = $this->db->table('g_docs_authorizers')
            ->select('g_docs_authorizers.*, users.user_name, users.user_email')
            ->join('users', 'users.user_id = g_docs_authorizers.g_doc_auth_user_id')
            ->where('g_docs_authorizers.g_doc_auth_doc_id', $g_doc_id)
            ->get()
            ->getResultArray();

        $document['authorizers'] = $authorizers;

        // Search for the current user's authorizer details
        $current_user_authorizer = null;
        foreach ($authorizers as $authorizer) {
            if ($authorizer['g_doc_auth_user_id'] == session()->get('user_id')) {
                $current_user_authorizer = $authorizer;
                break;
            }
        }

        // Include the current user's authorizer details in the document array
        $document['current_user_authorizer'] = $current_user_authorizer;

        return $document;
    }
}
