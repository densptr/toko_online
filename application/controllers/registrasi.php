<?php

class Registrasi extends CI_Controller
{
    public function index(){
        if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else {
            $data = array(
                'id'        => $this->input->post('id'),
                'nama'      =>$this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('pasword_1'),
                'role_id'   => 2,

            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
        
    }
}