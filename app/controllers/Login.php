<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/index');
    }

    public function proses()
    {
        $hasil = $this->model('Login_model')->getHasil();

        if ($hasil == true) {
            $data['title'] = 'Home';
            $data['judul'] = 'Home';
            $data['nama'] = $this->model('user_model')->getUser();
            $data['inb'] = $this->model('Inbound_model')->getAllInbound();
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        } else {
            $this->view('login/index');
        }
    }
}
