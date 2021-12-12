<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{


       
    public function index()
    {   
        $session = session();
        if (!session()->get('isLoggedIn'))
        {
             $session->setFlashdata('msg', 'Anda Harus Login Terlebih Dahulu');
          
            return redirect()
                ->to('/home');
        }else{
              return view('dashboard');
        }
      
      
    }
}