
<?php

class Pengembalian_model
{
    private $table = '`Pengembalian Buku`';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($Kd_kembalian044)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table .
                ' WHERE Kd_kembalian044 = :kode'
        );

        $this->db->bind('kode', $Kd_kembalian044);

        return $this->db->single();
    }

    public function tambahDataPengembalian($data)
    {
        $query = "INSERT INTO $this->table
            (Kd_kembalian044, NimMhs044, NmMhs044, NmBuku044,
             JumBuku044, TglKembali044, Denda044)
            VALUES
            (:kode, :nim, :nama, :buku, :jumlah, :tanggal, :denda)";

        $this->db->query($query);
        $this->db->bind('kode', $data['Kd_kembalian044']);
        $this->db->bind('nim', $data['NimMhs044']);
        $this->db->bind('nama', $data['NmMhs044']);
        $this->db->bind('buku', $data['NmBuku044']);
        $this->db->bind('jumlah', $data['JumBuku044']);
        $this->db->bind('tanggal', $data['TglKembali044']);
        $this->db->bind('denda', $data['Denda044']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengembalian($id)
    {
        $query = "DELETE FROM $this->table
                  WHERE Kd_kembalian044 = :kode";

        $this->db->query($query);
        $this->db->bind('kode', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPengembalian($data)
    {
        $query = "UPDATE $this->table SET
            NimMhs044 = :nim,
            NmMhs044 = :nama,
            NmBuku044 = :buku,
            JumBuku044 = :jumlah,
            TglKembali044 = :tanggal,
            Denda044 = :denda
            WHERE Kd_kembalian044 = :kode";

        $this->db->query($query);
        $this->db->bind('nim', $data['NimMhs044']);
        $this->db->bind('nama', $data['NmMhs044']);
        $this->db->bind('buku', $data['NmBuku044']);
        $this->db->bind('jumlah', $data['JumBuku044']);
        $this->db->bind('tanggal', $data['TglKembali044']);
        $this->db->bind('denda', $data['Denda044']);
        $this->db->bind('kode', $data['Kd_kembalian044']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
