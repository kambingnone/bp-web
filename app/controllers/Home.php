<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getUser();
        $data['inb'] = $this->model('Inbound_model')->getAllInbound();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


    public function detail($id)
    {
        $data['title'] = 'Detail Barang';
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $this->model('user_model')->getUser();
        $data['inb'] = $this->model('Inbound_model')->getInboundById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["username"]);
        $this->view('login/index');
    }
}
