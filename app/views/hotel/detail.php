<div class="container mt-5">
    <h1 class="page-header">Data Hotel</h1>
    <table class="table table-striped">
        <tr>
            <th width="20%">Nama Hotel</th>
                <td width="1%">:</td>
                <td><?=$data['htl']['nama_hotel']?></td>
        </tr>
        <tr>
            <th>Jenis Hotel</th>
                <td>:</td>
                <td><?=$data['htl']['jenis_hotel'] ?></td>
        </tr>
        <tr>
            <th>Nama Manager</th>
                <td>:</td>
                <td><?=$data['htl']['nama_manager'] ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
                <td>:</td>
                <td><?=$data['htl']['alamat'] ?></td>
        </tr>
        <tr>
            <th>No Telephone</th>
                <td>:</td>
                <td><?=$data['htl']['no_tlp'] ?></td>
        </tr>
        <tr>
            <th>Jumlah Kamar</th>
                <td>:</td>
                <td><?=$data['htl']['jumlah_kamar'] ?></td>
        </tr>
        <tr>
            <th>Tanggal Mulai Operasi</th>
                <td>:</td>
                <td>
                <?=($data['htl']['tgl_mulai_operasi'] != '0000-00-00') ? date('d-m-Y', strtotime($data['htl']['tgl_mulai_operasi'])) : ''?>
                </td>
        </tr>
    </table>
</div>