<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<h3>Tambah Data</h3>
<form action="<?= base_url('users/simpan'); ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
    <input type="text" class="form-control" name="namaSekolah">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kepala Sekolah</label>
    <input type="text" class="form-control" name="namaKepsek">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Sekolah</label>
    <input type="text" class="form-control" name="alamatSekolah">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenjang Sekolah</label>
    <input type="text" class="form-control" name="jenjangSekolah">
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?php $this->endSection(); ?>