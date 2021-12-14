<?php namespace App\Models;

use CodeIgniter\Model;
class PelangganModel extends Model{
protected $table = 'pelanggan';
	
    protected $primaryKey = 'id_pelanggan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'no_telp','email','password','status'];

	public function getPelanggan()
    {
		return $this->findAll();
    }
}