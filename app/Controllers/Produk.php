<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProdukModel;
class Produk extends Controller
{


       
    public function index()
    {   
        $produk = new ProdukModel();
         $data = $produk->getProduk();
return view('produk',compact('data'));
    }

    function hapus_produk($id_produk=null){

      
      $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
                                                 
            $model = new ProdukModel();

            
        $data = $model->where('id_produk', $id_produk)->delete();
        
            $session->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong>Produk berhasil Di Hapus
             </div>');
        return redirect()->to( base_url('produk') );
    }
}

function edit_produk($id_produk){

            helper(['form', 'url']);
    $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {   


            $postModel = new ProdukModel();
            
             $postModel->update($id_produk, [
                'nama_produk'   => $this->request->getPost('nama_produk'),
                'harga'   => $this->request->getPost('harga'),
                'deskripsi'   => $this->request->getPost('deskripsi'),
                'kategori'   => $this->request->getPost('kategori'), 
                'status'   => $this->request->getPost('status')
            ]);

            session()->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong> Produk berhasil Di Edit
             </div>');

            return redirect()->to(base_url('produk')); 
            
        }
}

    function tambah_produk(){
      
    $session = session();
    helper(['form', 'url']);
        $file =  $this->request->getFile('gambar');
        
        $randomName = $file->getName();
        if ($file->isValid() && ! $file->hasMoved())
        {
            $postModel = new ProdukModel();
            
            $postModel->insert([
                'nama_produk'   => $this->request->getPost('nama_produk'),
                'harga' => $this->request->getPost('harga'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'kategori' => $this->request->getPost('kategori'),
                'status' => $this->request->getPost('status'),
                'gambar' => $file->getName(),
            ]);

            $file->move(ROOTPATH.'public/gambar/',$randomName);
            session()->setFlashData('msg','Berhasil upload');
        }else{
            session()->setFlashData('msg','Gagal upload');
        }
        
        return redirect()->to(base_url("produk"));
    
    }
}