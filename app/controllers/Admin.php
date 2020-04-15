<?php 

Class Admin extends Controller{
    public function index($nama = 'Gilbert'){
        $data['nama'] = $nama;
        $this->view('templates/header');
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }
}