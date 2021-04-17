<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary showAddModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            <br><br>
            <h3>Citizen Records</h3>
            <ul class="list-group">
                <?php foreach ($data['ctz'] as $ctz) : ?>
                    <li class="list-group-item">
                        <?= $ctz['nama_warga']; ?>
                        <a href="<?= ROOT; ?>data/delete/<?= $ctz['url_warga'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Want to delete this data ?')">Delete</a>
                        <a href="<?= ROOT; ?>data/edit/<?= $ctz['url_warga'] ?>" class="badge badge-warning float-right ml-1 showEditModal" data-bs-toggle="modal" data-bs-target="#exampleModal" data-url_warga="<?= $ctz['url_warga'] ?>">Edit</a>
                        <a href="<?= ROOT; ?>data/detail/<?= $ctz['url_warga'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?=ROOT;?>data/add" method="post">
                        <input type="hidden" name="url_warga" id="url_warga">
                        <h3>A. Data Pribadi</h3>
                        <table class="table table-striped table-middle">
                            <tr>
                                <th width="20%">NIK</th>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" id="nik_warga" name="nik_warga" required></td>
                            </tr>
                            <tr>
                                <th>Nama Warga</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nama_warga"  name="nama_warga" required></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="tempat_lahir_warga" name="tempat_lahir_warga" required></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td><input type="text" class="form-control datepicker" id="tanggal_lahir_warga" name="tanggal_lahir_warga" required placeholder="YYYY-MM-DD"></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control selectpicker" id="jenis_kelamin_warga" name="jenis_kelamin_warga" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <h3>B. Data Alamat</h3>
                        <table class="table table-striped table-middle">
                            <tr>
                                <th width="20%">Alamat KTP</th>
                                <td width="1%">:</td>
                                <td><textarea class="form-control" id="alamat_ktp_warga" name="alamat_ktp_warga" required></textarea></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><textarea class="form-control" id="alamat_warga" name="alamat_warga" required></textarea></td>
                            </tr>
                            <tr>
                                <th>Desa/Kelurahan</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="desa_kelurahan_warga" name="desa_kelurahan_warga"></td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="kecamatan_warga" name="kecamatan_warga"></td>
                            </tr>
                            <tr>
                                <th>Kabupaten/Kota</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="kabupaten_kota_warga" name="kabupaten_kota_warga"></td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="provinsi_warga" name="provinsi_warga"></td>
                            </tr>
                            <tr>
                                <th>Negara</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="negara_warga" name="negara_warga"></td>
                            </tr>
                            <tr>
                                <th>RT</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="rt_warga" name="rt_warga"></td>
                            </tr>
                            <tr>
                                <th>RW</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="rw_warga" name="rw_warga"></td>
                            </tr>
                        </table>
                        <h3>C. Data Lain-lain</h3>
                        <table class="table table-striped table-middle">
                            <tr>
                                <th width="20%">Agama</th>
                                <td width="1%">:</td>
                                <td>
                                    <select class="form-control selectlive" id="agama_warga" name="agama_warga" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control selectlive" id="pendidikan_terakhir_warga" name="pendidikan_terakhir_warga" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                        <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="pekerjaan_warga" name="pekerjaan_warga"></td>
                            </tr>
                            <tr>
                                <th>Status Perkawinan</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control selectpicker" id="status_perkawinan_warga" name="status_perkawinan_warga" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Tidak Kawin">Tidak Kawin</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Status Tinggal</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control selectpicker" id="status_warga" name="status_warga" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>