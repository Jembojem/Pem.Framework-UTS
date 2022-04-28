<?php 

    namespace App\Models;

    use CodeIgniter\Model;

    class ProductModel extends Model
    {
        protected $table = 'products';
        protected $useTimestamps = true;
        // protected $allowedFields = ['nama','email'];

        public function search($keyword)
        {
            $builder = $this->table('products');
            // $builder->like('nama', $keyword);
            // return $builder;

            $builder->like('product', $keyword);
            $builder->orLike('desc', $keyword);
            $builder->orLike('price', $keyword);
            return $builder;

            // return $this->table('staff')->like('interest', $keyword);
        }
    }

?>