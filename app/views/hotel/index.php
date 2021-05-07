<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary showAddModalHotel" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Hotel
            </button>
            <br><br>
            <h3>Data Hotel</h3>
            <ul class="list-group">
                <?php foreach ($data['hotel'] as $htl) : ?>
                    <li class="list-group-item">
                        <?= $htl['nama_hotel']; ?>
                        <a href="<?= ROOT; ?>hotel/delete/<?= $htl['id_hotel'] ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('Want to delete this hotel ?')">Delete</a>
                        <a href="#" class="badge bg-secondary float-end ms-1 showEditModalHotel" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id_hotel="<?= $htl['id_hotel'] ?>">Edit</a>
                        <a href="<?= ROOT; ?>hotel/detail/<?= $htl['id_hotel'] ?>" class="badge bg-dark float-end ms-1">Detail</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Hotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="action" action="<?=ROOT;?>hotel/add" method="post">
                    <input type="hidden" name="id_hotel" id="id_hotel">
                        <h3>Data Hotel</h3>
                        <table class="table table-striped table-middle">
                            <tr>
                                <th width="20%">Nama Hotel</th>
                                <td width="1%">:</td>
                                <td><input type="text" class="form-control" id="nama_hotel" name="nama_hotel" required></td>
                            </tr>
                            <tr>
                                <th>Jenis Hotel</th>
                                <td>:</td>
                                <td>
                                    <select class="form-control selectpicker" id="jenis_hotel" name="jenis_hotel" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Bintang 1">Bintang 1</option>
                                        <option value="Bintang 2">Bintang 2</option>
                                        <option value="Bintang 3">Bintang 3</option>
                                        <option value="Bintang 4">Bintang 4</option>
                                        <option value="Bintang 5">Bintang 5</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Manager</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="nama_manager"  name="nama_manager" required></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="alamat" name="alamat" required></td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="no_tlp" name="no_tlp" required></td>
                            </tr>
                            <tr>
                                <th>Jumlah Kamar</th>
                                <td>:</td>
                                <td><input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" required></td>
                            </tr>
                            <tr>
                                <th>Tanggal Mulai Operasi</th>
                                <td>:</td>
                                <td><input type="date" class="form-control datepicker" id="tgl_mulai_operasi date-picker-example" name="tgl_mulai_operasi" required placeholder="Select Date"></td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Hotel</button>
                </form>
            </div>
        </div>
    </div>
</div>