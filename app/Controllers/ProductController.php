<?php

namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    // Display all products
    public function index() {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('ProductList', $data);
    }

    // Add new product
    public function create() {
        return view('AddProduct');
    }

    public function store() {
        $model = new ProductModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'price' => $this->request->getPost('price'),
        ];
        if ($model->insert($data)) {
            return redirect()->to('/')->with('success', 'Product Added Successfully');
        } else {
            return redirect()->to('/')->with('error', 'Failed to Add Product');
        }
    }

    // Edit product
    public function edit($id) {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('EditProduct', $data);
    }

    public function update($id) {
        $model = new ProductModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'price' => $this->request->getPost('price'),
        ];
        if ($model->update($id, $data)) {
            return redirect()->to('/')->with('success', 'Product Updated Successfully');
        } else {
            return redirect()->to('/')->with('error', 'Failed to Update Product');
        }
    }

    // Delete product
    public function delete($id) {
        $model = new ProductModel();
        if ($model->delete($id)) {
            return redirect()->to('/')->with('success', 'Product Deleted Successfully');
        } else {
            return redirect()->to('/')->with('error', 'Failed to Delete Product');
        }
    }
}
