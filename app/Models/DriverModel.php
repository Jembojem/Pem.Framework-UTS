<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class DriverModel extends Model
    {
        protected $table = 'drivers';
        protected $useTimestamps = true;
        // protected $allowedFields = ['nama','email'];

        public function search($keyword)
        {
            $builder = $this->table('drivers');
            // $builder->like('nama', $keyword);
            // return $builder;

            $builder->like('type', $keyword);
            $builder->orLike('series', $keyword);
            $builder->orLike('product', $keyword);
            $builder->orLike('os', $keyword);
            $builder->orLike('download', $keyword);
            return $builder;

            // return $this->table('staff')->like('interest', $keyword);
        }
    }

?>