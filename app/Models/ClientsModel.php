<?php
    namespace App\Models;
    use CodeIgniter\Model;
    
    class ClientsModel extends Model{
        protected $table = 'clients';
        protected $primaryKey = 'id';
        protected $allowedFields = ['name','id_document','email','address'];

        public function getClient($data){
            $user = $this->db->table('clients');
            $user->where($data);
            return $user->get()->getResultArray();
        }


    }

?>