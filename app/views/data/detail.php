<div class="container mt-5">
    <h1 class="page-header">Citizen Records</h1>
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped">
        <tr>
            <th width="20%">NIK</th>
                <td width="1%">:</td>
                <td><?php echo $data['ctz']['nik_warga']?></td>
        </tr>
        <tr>
            <th>Nama Warga</th>
                <td>:</td>
                <td><?php echo $data['ctz']['nama_warga'] ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
                <td>:</td>
                <td><?php echo $data['ctz']['tempat_lahir_warga'] ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                <?php echo ($data['ctz']['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($data['ctz']['tanggal_lahir_warga'])) : ''?>
                </td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
                <td>:</td>
                <td><?php echo $data['ctz']['jenis_kelamin_warga'] ?></td>
        </tr>
    </table>

    <h3>B. Data Alamat</h3>
    <table class="table table-striped">
        <tr>
            <th width="20%">Alamat KTP</th>
                <td width="1%">:</td>
                <td><?php echo $data['ctz']['alamat_ktp_warga'] ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
                <td>:</td>
                <td><?php echo $data['ctz']['alamat_warga'] ?></td>
        </tr>
        <tr>
            <th>Desa/Kelurahan</th>
                <td>:</td>
                <td><?php echo $data['ctz']['desa_kelurahan_warga'] ?></td>
        </tr>
        <tr>
            <th>Kecamatan</th>
                <td>:</td>
                <td><?php echo $data['ctz']['kecamatan_warga'] ?></td>
        </tr>
        <tr>
            <th>Kabupaten/Kota</th>
                <td>:</td>
                <td><?php echo $data['ctz']['kabupaten_kota_warga'] ?></td>
        </tr>
        <tr>
            <th>Provinsi</th>
                <td>:</td>
                <td><?php echo $data['ctz']['provinsi_warga'] ?></td>
        </tr>
        <tr>
            <th>Negara</th>
                <td>:</td>
                <td><?php echo $data['ctz']['negara_warga'] ?></td>
        </tr>
        <tr>
            <th>RT</th>
                <td>:</td>
                <td><?php echo $data['ctz']['rt_warga'] ?></td>
        </tr>
        <tr>
            <th>RW</th>
                <td>:</td>
                <td><?php echo $data['ctz']['rw_warga'] ?></td>
        </tr>
    </table>

    <h3>C. Data Lain-lain</h3>
    <table class="table table-striped">
        <tr>
            <th width="20%">Agama</th>
                <td width="1%">:</td>
                <td><?php echo $data['ctz']['agama_warga'] ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
                <td>:</td>
                <td><?php echo $data['ctz']['pendidikan_terakhir_warga'] ?></td>
        </tr>
        <tr>
            <th>Pekerjaan</th>
                <td>:</td>
                <td><?php echo $data['ctz']['pekerjaan_warga'] ?></td>
        </tr>
        <tr>
            <th>Status Perkawinan</th>
                <td>:</td>
                <td><?php echo $data['ctz']['status_perkawinan_warga'] ?></td>
        </tr>
        <tr>
            <th>Status Tinggal</th>
                <td>:</td>
                <td><?php echo $data['ctz']['status_warga'] ?></td>
        </tr>
    </table>
</div>