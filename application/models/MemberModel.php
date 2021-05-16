<?php namespace application\Models;

use CodeIgniter\Model;

class MemberModel extends CI_Model
{
    protected $table         = 'members';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'first_name', 'last_name', 'email', 'mobile', 'active', 'password'
    ];
    protected $returnType    = 'application\Entities\Member';
    protected $useTimestamps = true;
}