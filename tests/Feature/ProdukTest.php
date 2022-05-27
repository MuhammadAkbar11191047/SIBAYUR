<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\ProdukModel;
use App\Http\Controllers\ProdukController;
use Tests\TestCase;

class FAQTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_masuk_ke_dalam_menu_produk()
    {

        $response = $this->get(route('produk.index'));
        $response->assertStatus(200);
    }

    public function test_input_data_menu_produk(){


        $response = $this->post(route('produk.store'), [
            'nama' => 'Kentang',
            'harga' => 20000,
            'jumlah' => 13,
            'gambar' => 'test1'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_edit_data_menu_produk(){


        $response = $this->put(route('produk.edit', 1), [
            'nama' => 'Wortel',
            'harga' => 20000,
            'jumlah' => 13,
            'gambar' => 'test1'
        ]);

        $response->assertStatus(200);
        
    }

    public function test_delete_data_menu_produk(){

        $response = $this->delete(route('produk.delete', 1));

        $response->assertStatus(200);
        
    } 


}

