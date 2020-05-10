<?php

class Home extends Controller{
    public function index(){
        $data['mhs'] = $this->model('Data_model')->getAllMahasiswa();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}