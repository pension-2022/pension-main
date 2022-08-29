<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\I18n\Time;
use DateTime;

class PostController extends BaseController
{
    private $db;
    private $ionAuth;
    private $session; 
    use ResponseTrait;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->session = \Config\Services::session(); 
        helper('filesystem');
    }

    public function register_users()
    {
        $username = 'admin';
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');
        $additional_data = array(
            'first_name' => $this->request->getPost('firstName'),
            'last_name' => $this->request->getPost('lastName'),
            'created_date' => Time::now('Asia/Bangkok', 'en_US'),
        );
        $group = array(1);

        $this->ionAuth->register($username, $password, $email, $additional_data, $group);

        return redirect()->to(base_url('sign-in'));
    }


    public function login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $sqldheck = "select ug.group_id, u.is_approved from users u join users_groups ug on u.id = ug.user_id where u.email = ?";
        $querycheck = $this->db->query($sqldheck, $username)->getResultArray();

        foreach($querycheck as $check){
            if($check['group_id'] != 1){
                return redirect('sign-in');
            }

            if($check['is_approved'] != 1){
                return redirect('sign-in');
            }
        }
        
        if($this->ionAuth->login($username, $password) == TRUE){
            $sql = "select * from users where email = ?";
            $query1 = $this->db->query($sql, $username)->getResultArray();
            foreach($query1 as $data){
                $newdata = [
                    'id_user'  => $data['id']
                ];
                $this->session->set($newdata);
            }
            return redirect('/');
        } else {
            return redirect('sign-in');
        }
    }

    public function logout(){
        $this->ionAuth->logout();
        $response = [
            'success'   => TRUE
        ];

        return $this->respond($response, 200);
    }

    public function newcomment($idArtikel){
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 
        
        $input = [
            'n_comment' => $this->request->getPost('comment'),
            'i_articleid' => $idArtikel,
            'd_date' => Time::now('Asia/Bangkok', 'en_US'),
            'i_userid' => $this->session->get('id_user'),
            'c_active' => 1
        ];
        $this->db->table('t_comment')->insert($input);

        $response = [
            'success'   => TRUE
        ];

        return $this->respond($response, 200);
    }
}