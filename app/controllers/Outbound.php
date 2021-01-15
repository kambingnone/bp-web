<?php

class Outbound extends Controller
{
    public function index()
    {
        $data['title'] = 'Outbound';
        $data['judul'] = 'Outbound';
        $this->view('templates/header', $data);
        $this->view('outbound/index');
        $this->view('templates/footer');
    }
}
