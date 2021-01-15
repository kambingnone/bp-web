<?php

class Inbound_model
{
    private $table = 'inbound';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllInbound()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getInboundById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataInbound($data)
    {
        $query = "INSERT INTO inbound 
                    VALUES
                    ('', :nama_barang, :kategori, :qty, :suplier)";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('suplier', $data['suplier']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataInbound($id)
    {
        $query = "DELETE FROM inbound WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataInbound($data)
    {
        $query = "UPDATE inbound SET
                    nama_barang = :nama_barang,
                    kategori = :kategori,
                    qty = :qty,
                    suplier = :suplier
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('suplier', $data['suplier']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
