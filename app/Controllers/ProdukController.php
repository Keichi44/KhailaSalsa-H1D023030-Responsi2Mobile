<?php

namespace App\Controllers;

use App\Models\MProduk;

class ProdukController extends RestfulController
{
    // 1. Fungsi Tambah Produk (Create)
    public function create()
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga'       => $this->request->getVar('harga')
        ];

        $model = new MProduk();
        $model->insert($data);
        $produk = $model->find($model->getInsertID());

        return $this->responseHasil(200, true, $produk);
    }

    // 2. Fungsi Lihat Semua Produk (Read - List)
    public function list()
    {
        $model = new MProduk();
        $produk = $model->findAll();
        return $this->responseHasil(200, true, $produk);
    }

    // 3. Fungsi Lihat Satu Produk (Read - Detail)
    public function detail($id)
    {
        $model = new MProduk();
        $produk = $model->find($id);
        return $this->responseHasil(200, true, $produk);
    }

    // 4. Fungsi Ubah Produk (Update)
    public function ubah($id)
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga'       => $this->request->getVar('harga')
        ];

        $model = new MProduk();
        $model->update($id, $data);
        $produk = $model->find($id);

        return $this->responseHasil(200, true, $produk);
    }

    // 5. Fungsi Hapus Produk (Delete)
    public function hapus($id)
    {
        $model = new MProduk();
        $produk = $model->delete($id);
        return $this->responseHasil(200, true, $produk);
    }
}