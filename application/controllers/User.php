<?php
class User extends CI_Controller{
    public function index(){
        $this->load->model('Users');
        $data = $this->Users->fetchUsers();
        $this->load->view('index',["data"=>$data]);
    }
    public function addUser(){
        $this->load->view('addUser');
    }
    public function about(){
        $this->load->view('about');
    }
    public function addUserData(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('job_title', 'Job Title', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
        if($this->form_validation->run()){
            $data = $this->input->post();
            $this->load->model('Users');
            $status = $this->Users->insertUser($data);
            if($status){
                echo "true";
            }
            else{
                echo "false";
            }
        }
        else{
            $this->load->view('addUser');
        }
    }
}
