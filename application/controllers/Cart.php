<?php
class Cart extends CI_Controller {

    public function add($id)
    {
        $this->load->model('Produk_model');
        $produk = $this->Produk_model->get_by_id($id);

        // Jika produk tidak ditemukan
        if (!$produk) redirect('katalog');

        // Tambah ke session cart
        $cart = $this->session->userdata('cart') ?? [];

        // Jika produk sudah ada, tambah quantity
        if (isset($cart[$id])) {
            $cart[$id]['qty'] += 1;
        } else {
            $cart[$id] = [
                'id' => $produk->id,
                'nama' => $produk->nama,
                'harga' => $produk->harga,
                'gambar' => $produk->gambar,
                'qty' => 1
            ];
        }

        $this->session->set_userdata('cart', $cart);

        redirect('katalog');
    }
}
