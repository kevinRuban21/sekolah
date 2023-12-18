<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="row">
    <div class="col-md-10">
        <h3>Data Sekolah</h3>
    </div>
    <div class="col">
        <a href="<?= base_url('logout'); ?>" class="btn btn-info text-white btn-sm">
        Logout
        </a>
    </div>
</div>

 <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col">Nama Kepala Sekolah</th>
            <th scope="col">Alamat Sekolah</th>
            <th scope="col">Jenjang Sekolah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($users as $data): ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $data['nama_sekolah']; ?></td>
                <td><?= $data['nama_kepsek']; ?></td>
                <td><?= $data['alamat_sekolah']; ?></td>
                <td><?= $data['jenjang_sekolah']; ?></td>
                <td>
                    <a href="<?= base_url('users/ubah/' . $data['id']); ?>" class="btn btn-warning btn-sm text-white"><span class="material-symbols-outlined">stylus</span></a>
                    <a href="<?= base_url('users/delete/' . $data['id']); ?>" class="btn btn-danger btn-sm text-white"><span class="material-symbols-outlined">delete</span></a>
                </td>
            </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>
<a href="<?= base_url('users/tambah'); ?>" class="btn btn-success btn-sm">+ ADD</a>
<?php $this->endSection(); ?>