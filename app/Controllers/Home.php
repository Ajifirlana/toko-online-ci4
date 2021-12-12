<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
class Home extends BaseController
{
    public function index()
    {

        helper(['form']);
        return view('login');
    }

    public function auth()
    {
      
      $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/home');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/home');
        }

}
public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/home');
    }
}
