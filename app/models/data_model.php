<?php
class Data_model
{

    private $table = 'warga';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCitizen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getCitizenByURL($url_warga)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE url_warga = :url_warga');
        $this->db->bind('url_warga', $url_warga);
        return $this->db->single();
    }

    private function get_random_string_max($length)
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

    public function addData($data)
    {
        $data['url_warga'] = $this->get_random_string_max(60);
        $query = "INSERT INTO warga (nik_warga, url_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, alamat_ktp_warga, alamat_warga, desa_kelurahan_warga,kecamatan_warga, kabupaten_kota_warga, provinsi_warga,negara_warga, rt_warga, rw_warga,agama_warga, pendidikan_terakhir_warga, pekerjaan_warga, status_perkawinan_warga, status_warga) VALUES
                        (:nik_warga, :url_warga, :nama_warga, :tempat_lahir_warga, :tanggal_lahir_warga, :jenis_kelamin_warga, :alamat_ktp_warga, :alamat_warga, :desa_kelurahan_warga,:kecamatan_warga, :kabupaten_kota_warga, :provinsi_warga,:negara_warga, :rt_warga, :rw_warga,:agama_warga, :pendidikan_terakhir_warga, :pekerjaan_warga,:status_perkawinan_warga, :status_warga)";

        $this->db->query($query);
        $this->db->bind('nik_warga', $data['nik_warga']);
        $this->db->bind('url_warga', $data['url_warga']);
        $this->db->bind('nama_warga', $data['nama_warga']);
        $this->db->bind('tempat_lahir_warga', $data['tempat_lahir_warga']);
        $this->db->bind('tanggal_lahir_warga', $data['tanggal_lahir_warga']);
        $this->db->bind('jenis_kelamin_warga', $data['jenis_kelamin_warga']);
        $this->db->bind('alamat_ktp_warga', $data['alamat_ktp_warga']);
        $this->db->bind('alamat_warga', $data['alamat_warga']);
        $this->db->bind('desa_kelurahan_warga', $data['desa_kelurahan_warga']);
        $this->db->bind('kecamatan_warga', $data['kecamatan_warga']);
        $this->db->bind('kabupaten_kota_warga', $data['kabupaten_kota_warga']);
        $this->db->bind('provinsi_warga', $data['provinsi_warga']);
        $this->db->bind('negara_warga', $data['negara_warga']);
        $this->db->bind('rt_warga', $data['rt_warga']);
        $this->db->bind('rw_warga', $data['rw_warga']);
        $this->db->bind('agama_warga', $data['agama_warga']);
        $this->db->bind('pendidikan_terakhir_warga', $data['pendidikan_terakhir_warga']);
        $this->db->bind('pekerjaan_warga', $data['pekerjaan_warga']);
        $this->db->bind('status_perkawinan_warga', $data['status_perkawinan_warga']);
        $this->db->bind('status_warga', $data['status_warga']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteData($url_warga)
    {
        $query = "DELETE FROM ". $this->table ." WHERE url_warga = :url_warga";
        $this->db->query($query);
        $this->db->bind('url_warga', $url_warga);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editData($data)
    {
        //$data['url_warga'] = $this->get_random_string_max(60);
        $query = "UPDATE warga SET
                            nik_warga = :nik_warga,
                            nama_warga = :nama_warga, 
                            tempat_lahir_warga = :tempat_lahir_warga, 
                            tanggal_lahir_warga = :tanggal_lahir_warga, 
                            jenis_kelamin_warga = :jenis_kelamin_warga, 
                            alamat_ktp_warga = :alamat_ktp_warga, 
                            alamat_warga = :alamat_warga, 
                            desa_kelurahan_warga = :desa_kelurahan_warga,
                            kecamatan_warga = :kecamatan_warga, 
                            kabupaten_kota_warga = :kabupaten_kota_warga, 
                            provinsi_warga = :provinsi_warga,
                            negara_warga = :negara_warga, 
                            rt_warga = :rt_warga, 
                            rw_warga = :rw_warga,
                            agama_warga = :agama_warga, 
                            pendidikan_terakhir_warga = :pendidikan_terakhir_warga, 
                            pekerjaan_warga = :pekerjaan_warga, 
                            status_perkawinan_warga = :status_perkawinan_warga, 
                            status_warga = :status_warga
                    WHERE url_warga = :url_warga";

        $this->db->query($query);
        $this->db->bind('nik_warga', $data['nik_warga']);
        $this->db->bind('url_warga', $data['url_warga']);
        $this->db->bind('nama_warga', $data['nama_warga']);
        $this->db->bind('tempat_lahir_warga', $data['tempat_lahir_warga']);
        $this->db->bind('tanggal_lahir_warga', $data['tanggal_lahir_warga']);
        $this->db->bind('jenis_kelamin_warga', $data['jenis_kelamin_warga']);
        $this->db->bind('alamat_ktp_warga', $data['alamat_ktp_warga']);
        $this->db->bind('alamat_warga', $data['alamat_warga']);
        $this->db->bind('desa_kelurahan_warga', $data['desa_kelurahan_warga']);
        $this->db->bind('kecamatan_warga', $data['kecamatan_warga']);
        $this->db->bind('kabupaten_kota_warga', $data['kabupaten_kota_warga']);
        $this->db->bind('provinsi_warga', $data['provinsi_warga']);
        $this->db->bind('negara_warga', $data['negara_warga']);
        $this->db->bind('rt_warga', $data['rt_warga']);
        $this->db->bind('rw_warga', $data['rw_warga']);
        $this->db->bind('agama_warga', $data['agama_warga']);
        $this->db->bind('pendidikan_terakhir_warga', $data['pendidikan_terakhir_warga']);
        $this->db->bind('pekerjaan_warga', $data['pekerjaan_warga']);
        $this->db->bind('status_perkawinan_warga', $data['status_perkawinan_warga']);
        $this->db->bind('status_warga', $data['status_warga']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
