<?php
class getId{
    public function get_random_string_max($length)
    {

        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";

        $length = rand(4, $length);

        for ($i = 0; $i < $length; $i++) {

            $random = rand(0, 61);

            $text .= $array[$random];
        }

        return $text;
    }
}
class Hotel_model extends getId
{

    private $table = 'hotel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHotel()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getHotelById($id_hotel)
    {
        $this->db->query("SELECT * FROM ". $this->table ." WHERE id_hotel = :id_hotel");
        $this->db->bind('id_hotel', $id_hotel);
        return $this->db->single();
    }
    public function addData($data)
    {
        $data['id_hotel'] = parent::get_random_string_max(60);
        $query = "INSERT INTO ". $this->table ." (id_hotel, nama_hotel, jenis_hotel, nama_manager, alamat, no_tlp, jumlah_kamar, tgl_mulai_operasi) VALUES
                        (:id_hotel, :nama_hotel, :jenis_hotel, :nama_manager, :alamat, :no_tlp, :jumlah_kamar, :tgl_mulai_operasi)";

        $this->db->query($query);
        $this->db->bind('id_hotel', $data['id_hotel']);
        $this->db->bind('nama_hotel', $data['nama_hotel']);
        $this->db->bind('jenis_hotel', $data['jenis_hotel']);
        $this->db->bind('nama_manager', $data['nama_manager']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('jumlah_kamar', $data['jumlah_kamar']);
        $this->db->bind('tgl_mulai_operasi', $data['tgl_mulai_operasi']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteData($id_hotel)
    {
        $query = "DELETE FROM ". $this->table ." WHERE id_hotel = :id_hotel";
        $this->db->query($query);
        $this->db->bind('id_hotel', $id_hotel);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editData($data)
    {
        $query = "UPDATE ". $this->table ." SET
                            nama_hotel = :nama_hotel,
                            jenis_hotel = :jenis_hotel, 
                            nama_manager = :nama_manager, 
                            alamat = :alamat, 
                            no_tlp = :no_tlp, 
                            jumlah_kamar = :jumlah_kamar, 
                            tgl_mulai_operasi = :tgl_mulai_operasi
                    WHERE id_hotel = :id_hotel";

        $this->db->query($query);
        $this->db->bind('id_hotel', $data['id_hotel']);
        $this->db->bind('nama_hotel', $data['nama_hotel']);
        $this->db->bind('jenis_hotel', $data['jenis_hotel']);
        $this->db->bind('nama_manager', $data['nama_manager']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_tlp', $data['no_tlp']);
        $this->db->bind('jumlah_kamar', $data['jumlah_kamar']);
        $this->db->bind('tgl_mulai_operasi', $data['tgl_mulai_operasi']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
