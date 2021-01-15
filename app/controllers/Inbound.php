<?php

class Inbound extends Controller
{
    public function index()
    {
        $data['title'] = 'Inbound';
        $data['judul'] = 'Inbound';
        $data['inb'] = $this->model('Inbound_model')->getAllInbound();
        $this->view('templates/header', $data);
        $this->view('inbound/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Inbound_model')->tambahDataInbound($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/inbound');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/inbound');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Inbound_model')->hapusDataInbound($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/inbound');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/inbound');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Inbound_model')->getInboundById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Inbound_model')->ubahDataInbound($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('location: ' . base_url . '/inbound');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('location: ' . base_url . '/inbound');
            exit;
        }
    }
}
