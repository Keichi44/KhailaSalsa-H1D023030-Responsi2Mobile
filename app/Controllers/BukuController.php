<?php

namespace App\Controllers;

use App\Models\MBuku;

class BukuController extends RestfulController
{
    // 1. Tambah Buku
    public function create()
    {
        $data = [
            'judul' => $this->request->getVar('judul'),
            'harga' => $this->request->getVar('harga'),
            'jumlah' => $this->request->getVar('jumlah'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'volume' => $this->request->getVar('volume'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
        ];

        $model = new MBuku();
        $model->insert($data);
        $buku = $model->find($model->getInsertID());

        return $this->responseHasil(200, true, $buku);
    }

    // 2. List Buku
    public function list()
    {
        $model = new MBuku();
        $buku = $model->findAll();
        return $this->responseHasil(200, true, $buku);
    }

    // 3. Detail Buku
    public function detail($id)
    {
        $model = new MBuku();
        $buku = $model->find($id);
        return $this->responseHasil(200, true, $buku);
    }

    // 4. Ubah Buku
    public function ubah($id)
    {
        $data = [
            'judul' => $this->request->getVar('judul'),
            'harga' => $this->request->getVar('harga'),
            'jumlah' => $this->request->getVar('jumlah'),
            'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
            'volume' => $this->request->getVar('volume'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
        ];

        $model = new MBuku();
        $model->update($id, $data);
        $buku = $model->find($id);

        return $this->responseHasil(200, true, $buku);
    }

    // 5. Hapus Buku
    public function hapus($id)
    {
        $model = new MBuku();
        $buku = $model->delete($id);
        return $this->responseHasil(200, true, $buku);
    }
}