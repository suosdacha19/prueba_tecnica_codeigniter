<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class UsersModel extends Model{
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $allowedFields = ['name','user','pass','rol'];

        public function getUser($data){
            $user = $this->db->table('users');
            $user->where($data);
            return $user->get()->getResultArray();
        }


    }

?>