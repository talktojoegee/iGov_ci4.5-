<?php

namespace App\Models;

use CodeIgniter\Model;

class ContractAttachment extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'contract_attachments';
	protected $primaryKey           = 'contract_attachment_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['contract_att_contract_id','contract_att_attachment'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

    public function getAllContractAttachmentsByContractId($contract_id){
        $builder = $this->db->table('contract_attachments');
        $builder->where('contract_att_contract_id = '.$contract_id);
        return $builder->get()->getResultObject();
    }
}
