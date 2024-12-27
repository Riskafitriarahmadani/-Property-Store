<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PropertyModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarProperty()
    {
        $propertyModel = new PropertyModel();

        $data['propertys'] = $propertyModel->findAll();

        return view('admin/daftar-property', $data);
    }

    public function daftarPropertyTambah()
    {
        return view('admin/daftar-property-tambah');
    }

    public function createProperty()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $propertyModel = new PropertyModel();

        if ($propertyModel->insert($data, false)) {
            return redirect()->to('admin/daftar-property')->with('berhasil', 'Data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-property')->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function daftarPropertyEdit($id)
    {
        $propertyModel = new PropertyModel();
        $property = $propertyModel->find($id);
    
        if (!$property) {
            return redirect()->to('admin/daftar-property')->with('gagal', 'Data property tidak ditemukan!');
        }
    
        return view('admin/daftar-property-edit', ['property' => $property]);
    }
    
    public function changeProperty($id)
    {
        $propertyModel = new PropertyModel(); 
        $existingproperty = $propertyModel->find($id); 
    
        if (!$existingproperty) {
            return redirect()->to('admin/daftar-property')->with('gagal', 'Data property tidak ditemukan!');
        }
    
        $data = $this->request->getPost(); 
        $file = $this->request->getFile('gambar');
    
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path; 
        } else {
            $data['gambar'] = $existingproperty['gambar'];
        }
    
        if ($propertyModel->update($id, $data)) {
            return redirect()->to('admin/daftar-property')->with('berhasil', 'Data berhasil diperbarui!');
        } else {
            return redirect()->to('admin/daftar-property')->with('gagal', 'Data gagal diperbarui!');
        }
    }
    public function hapusProperty($id)
    {
        $propertyModel = new \App\Models\PropertyModel();
    
        $property = $propertyModel->find($id);
    
        if ($property) {
            $propertyModel->delete($id);
    

            return redirect()->to('/admin/daftar-property')->with('success', 'Property berhasil dihapus.');
        }

        return redirect()->to('/admin/daftar-property')->with('error', 'Property tidak ditemukan.');
    }
    
    

    public function transaksi()
    {
        return view('admin/transaksi');
    }
 
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }
}