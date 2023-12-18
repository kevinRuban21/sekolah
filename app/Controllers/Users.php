<?php

namespace App\Controllers;

use App\Models\UsersModel;
class Users extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }
    public function index(): string
    {
        $data['users'] = $this->UsersModel->getUsers();
        return view('users/index', $data);
    }

    public function tambah()
    {
        return view('users/tambah');
    }

    public function simpan()
    {
        $namaSekolah = $this->request->getVar('namaSekolah');
        $namaKepsek = $this->request->getVar('namaKepsek');
        $alamatSekolah = $this->request->getVar('alamatSekolah');
        $jenjangSekolah = $this->request->getVar('jenjangSekolah');

        $data = [
            'nama_sekolah'=> $namaSekolah,
            'nama_kepsek'=> $namaKepsek,
            'alamat_sekolah'=> $alamatSekolah,
            'jenjang_sekolah'=> $jenjangSekolah
        ];

        $this->UsersModel->save($data);
        return redirect()->to('/users');
    }

    public function ubah($id)
    {
        $data['users'] = $this->UsersModel->getUsers($id);
        return view('users/ubah', $data);

    }

    public function update()
    {
        $id = $this->request->getVar('kode');
        $namaSekolah = $this->request->getVar('namaSekolah');
        $namaKepsek = $this->request->getVar('namaKepsek');
        $alamatSekolah = $this->request->getVar('alamatSekolah');
        $jenjangSekolah = $this->request->getVar('jenjangSekolah');

        $data = [
            'id'=> $id,
            'nama_sekolah'=> $namaSekolah,
            'nama_kepsek'=> $namaKepsek,
            'alamat_sekolah'=> $alamatSekolah,
            'jenjang_sekolah'=> $jenjangSekolah
        ];
        $this->UsersModel->save($data);
        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $this->UsersModel->delete($id);
        return redirect()->to('/users');
    }
}
