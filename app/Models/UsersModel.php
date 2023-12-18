<?php

namespace App\Models;

use CodeIgniter\Model;
class UsersModel extends Model
{
    protected $table = "tbl_sekolah";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama_sekolah', 'nama_kepsek', 'alamat_sekolah', 'jenjang_sekolah'];

    public function getUsers($id = false)
    {
        if ($id === false){
            return $this->findAll();
        }else{
            return $this->where(['id' => $id])->first();
        }
        
    }
}