<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ProdukController extends Controller
{
    public function ProdukIndex(){
        $data = ProdukModel::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function ProdukData($id){
        $data = ProdukModel::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function ProdukStore(Request $request){

        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',

        ]);

        $data = ProdukModel::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'gambar' => $request->gambar
        ]);

        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'gambar' => $request->gambar
            ]
        ],200);
    }

    public function ProdukEdit(Request $request, $id){
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',
        ]);

        $data = ProdukModel::findOrFail($id);

        if($request){

            $data_update = [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'gambar' => $request->gambar
            ];
        } else {
            $data_update = [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'gambar' => $request->gambar
            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'gambar' => $request->gambar
            ],
            $data->update($data_update)
        ],200);
    }

    public function ProdukDelete($id){
        $data = ProdukModel::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }
}

