<?php namespace App\Models;

use CodeIgniter\Model;
class ProdukModel extends Model{
protected $table = 'produk';
	
    protected $primaryKey = 'id_produk';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_produk', 'harga','deskripsi','gambar','kategori','status'];

	public function getProduk()
    {
		return $this->findAll();
    }
}