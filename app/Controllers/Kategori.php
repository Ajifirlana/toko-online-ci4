<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KategoriModel;
class Kategori extends Controller
{

    public function index()
    {
 $session = session();
        if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
            $kategori = new KategoriModel();
        $data = $kategori->getKategori();
        return view('kategori', compact('data'));
    }
        
    }
    function hapus_kategori($id_kategori=null){

      
      $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
            $model = new KategoriModel();
        $data['kategori'] = $model->where('id_kategori', $id_kategori)->delete();

            $session->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong> Kategori berhasil Di Hapus
             </div>');
        return redirect()->to( base_url('kategori') );
    }
}
function edit_kategori($id_kategori){
    $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
            $postModel = new KategoriModel();
            
            $postModel->update($id_kategori, [
                'nama_kategori'   => $this->request->getPost('nama_kategori'),
                'status'   => $this->request->getPost('status'),
            ]);
            session()->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong> Kategori berhasil Di Edit
             </div>');

            return redirect()->to(base_url('kategori')); 
        }
}

public function tambah_kategori()
    {
$session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
        helper(['form', 'url']);
            $postModel = new KategoriModel();
            
            $postModel->insert([
                'nama_kategori'   => $this->request->getPost('nama_kategori'),
                'status' => $this->request->getPost('status'),
            ]);

            session()->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong> Kategori berhasil Di Simpan
             </div>');

            return redirect()->to(base_url('kategori'));
    
    }
}
}