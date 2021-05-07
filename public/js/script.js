$(function(){

    $('.showAddModal').on('click', function(){
        $('#exampleModalLabel').html('Add Data Citizen');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('.action').attr('action', 'http://localhost/Sertifikasi/public/data/add');
        $('#nik_warga').val('');
        $('#nama_warga').val('');
        $('#tempat_lahir_warga').val('');
        $('#tanggal_lahir_warga').val('');
        $('#jenis_kelamin_warga').val('');
        $('#alamat_ktp_warga').val('');
        $('#alamat_warga').val('');
        $('#desa_kelurahan_warga').val('');
        $('#kecamatan_warga').val('');
        $('#kabupaten_kota_warga').val('');
        $('#provinsi_warga').val('');
        $('#negara_warga').val('');
        $('#rt_warga').val('');
        $('#rw_warga').val('');
        $('#agama_warga').val('');
        $('#pendidikan_terakhir_warga').val('');
        $('#pekerjaan_warga').val('');
        $('#status_perkawinan_warga').val('');
        $('#status_warga').val('');
        $('#url_warga').val('');
    });

    $('.showEditModal').on('click', function(){
        $('#exampleModalLabel').html('Edit Data Citizen');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('#action').attr('action', 'http://localhost/Sertifikasi/public/data/edit');

        const url_warga = $(this).data('url_warga');
        $.ajax({
            url: 'http://localhost/Sertifikasi/public/data/getEdit',
            data: {url_warga : url_warga},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nik_warga').val(data.nik_warga);
                $('#nama_warga').val(data.nama_warga);
                $('#tempat_lahir_warga').val(data.tempat_lahir_warga);
                $('#tanggal_lahir_warga').val(data.tanggal_lahir_warga);
                $('#jenis_kelamin_warga').val(data.jenis_kelamin_warga);
                $('#alamat_ktp_warga').val(data.alamat_ktp_warga);
                $('#alamat_warga').val(data.alamat_warga);
                $('#desa_kelurahan_warga').val(data.desa_kelurahan_warga);
                $('#kecamatan_warga').val(data.kecamatan_warga);
                $('#kabupaten_kota_warga').val(data.kabupaten_kota_warga);
                $('#provinsi_warga').val(data.provinsi_warga);
                $('#negara_warga').val(data.negara_warga);
                $('#rt_warga').val(data.rt_warga);
                $('#rw_warga').val(data.rw_warga);
                $('#agama_warga').val(data.agama_warga);
                $('#pendidikan_terakhir_warga').val(data.pendidikan_terakhir_warga);
                $('#pekerjaan_warga').val(data.pekerjaan_warga);
                $('#status_perkawinan_warga').val(data.status_perkawinan_warga);
                $('#status_warga').val(data.status_warga);
                $('#url_warga').val(data.url_warga);
            }
        });
    });

    // HOTEL

    $('.showAddModalHotel').on('click', function(){
        $('#exampleModalLabel').html('Add Data Hotel');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('.action').attr('action', 'http://localhost/Sertifikasi/public/hotel/add');
        $('#id_hotel').val('');
        $('#nama_hotel').val('');
        $('#jenis_hotel').val('');
        $('#nama_manager').val('');
        $('#alamat').val('');
        $('#no_tlp').val('');
        $('#jumlah_kamar').val('');
        $('#tgl_mulai_operasi').val('');
        $('#id_hotel').val('');
    });

    $('.showEditModalHotel').on('click', function(){
        $('#exampleModalLabel').html('Edit Data Hotel');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('#action').attr('action', 'http://localhost/Sertifikasi/public/hotel/edit');

        const id_hotel = $(this).data('id_hotel');
        $.ajax({
            url: 'http://localhost/Sertifikasi/public/hotel/getEdit',
            data: {id_hotel : id_hotel},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama_hotel').val(data.nama_hotel);
                $('#jenis_hotel').val(data.jenis_hotel);
                $('#nama_manager').val(data.nama_manager);
                $('#alamat').val(data.alamat);
                $('#no_tlp').val(data.no_tlp);
                $('#jumlah_kamar').val(data.jumlah_kamar);
                $('#alamat_warga').val(data.alamat_warga);
                $('#tgl_mulai_operasi').val(data.tgl_mulai_operasi);
                $('#id_hotel').val(data.id_hotel);
            }
        });
    });

    $('.date-picker-example').pickdate();
});

