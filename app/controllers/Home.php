<?php

class Home extends Controller{
    public function index(){
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswa();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}