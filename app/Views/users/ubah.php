<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<h3>Ubah Data</h3>
<form action="<?= base_url('users/update'); ?>" method="POST">
    <input type="hidden" name="kode" value="<?= $users['id']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
    <input type="text" class="form-control" name="namaSekolah" value="<?= $users['nama_sekolah']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kepala Sekolah</label>
    <input type="text" class="form-control" name="namaKepsek" value="<?= $users['nama_kepsek']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Sekolah</label>
    <input type="text" class="form-control" name="alamatSekolah" value="<?= $users['alamat_sekolah']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenjang Sekolah</label>
    <input type="text" class="form-control" name="jenjangSekolah" value="<?= $users['jenjang_sekolah']; ?>">
  </div>

  <button type="submit" class="btn btn-success">Ubah</button>
</form>

<?php $this->endSection(); ?>