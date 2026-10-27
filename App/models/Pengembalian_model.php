<?php
class Mahasiswa_model
{
    private $table = 'Pengembalian Buku';
    private $db; // database handler

    public function __construct()
    {

        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id
            ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengembalian($data)
    {

        $query = "INSERT INTO $this->table
               (Kd_kembali044, NimMhs044, NmMhs044, NmBuku044, JumBuku044, TglKembali044, Denda044)
               VALUES
               (:Kd_kembali044, :NimMhs044, :NmMhs044, :NmBuku044, :JumBuku044, :TglKembali044, :Denda044)";

        $this->db->query($query);
        $this->db->bind('Kd_kembali044', $data['Kd_kembali044']);
        $this->db->bind('NimMhs044', $data['NimMhs044']);
        $this->db->bind('NmMhs044', $data['NmMhs044']);
        $this->db->bind('NmBuku044', $data['NmBuku044']);
        $this->db->bind('JumBuku044', $data['JumBuku044']);
        $this->db->bind('TglKembali044', $data['TglKembali044']);
        $this->db->bind('Denda044', $data['Denda044']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengembalian($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataPengembalian($data)
    {
        $query = "UPDATE $this->table SET
            Kd_kembali044 = :Kd_kembali044,
            NimMhs044 = :NimMhs044,
            NmMhs044 = :NmMhs044,
            NmBuku044 = :NmBuku044
            JumBuku044 = :JumBuku044
            TglKembali044 = :TglKembali044
            Denda044 = : Denda044
            WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('Kd_kembali044', $data['Kd_kembali044']);
        $this->db->bind('NimMhs044', $data['NimMhs044']);
        $this->db->bind('NmMhs044', $data['NmMhs044']);
        $this->db->bind('NmBuku044', $data['NmBuku044']);
        $this->db->bind('NmBuku044', $data['NmBuku044']);
        $this->db->bind('JumBuku044', $data['JumBuku044']);
        $this->db->bind('TglKembali044', $data['TglKembali044']);
        $this->db->bind('Denda044', $data['Denda044']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
