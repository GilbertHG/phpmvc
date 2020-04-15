<?php 

Class Admin extends Controller{
    public function index($nama = 'Gilbert'){
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header');
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }
}