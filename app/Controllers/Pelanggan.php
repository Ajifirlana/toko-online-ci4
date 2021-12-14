<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\PelangganModel;

class Pelanggan extends Controller
{
       
    public function index()
    {   
        if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');

            return redirect()
                ->to('/home');
        }else
      
            {$pelanggan = new PelangganModel();
            $data = $pelanggan->getPelanggan();
              return view('pelanggan',compact('data'));}
        
      
      
    }
    function edit_pelanggan($id_pelanggan){
    $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
            $postModel = new PelangganModel();
            
            $postModel->update($id_pelanggan, [
                'nama'   => $this->request->getPost('nama'), 
                'no_telp'   => $this->request->getPost('no_telp'), 
                'email'   => $this->request->getPost('email'),
                'status'   => $this->request->getPost('status'),
            ]);
            session()->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong>Pelanggan berhasil Di Edit
             </div>');

            return redirect()->to(base_url('pelanggan')); 
        }
}
function hapus_pelanggan($id_pelanggan=null){

      
      $session = session();
     if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else
        {
            $model = new PelangganModel();
        $data = $model->where('id_pelanggan', $id_pelanggan)->delete();

            $session->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong>Pelanggan berhasil Di Hapus
             </div>');
        return redirect()->to( base_url('pelanggan') );
    }
}

public function tambah_pelanggan()
    {
        $ceksesi = $this->auth();
        
        helper(['form', 'url']);
            $postModel = new PelangganModel();
            
            $postModel->insert([
                'nama'   => $this->request->getPost('nama'),
                'no_telp'   => $this->request->getPost('no_telp'),
                'email'   => $this->request->getPost('email'),
                'status' => $this->request->getPost('status'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('msg', '
             <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Sukses!</strong>Pelanggan berhasil Di Simpan
             </div>');

            return redirect()->to(base_url('pelanggan'));
    
    
}
}