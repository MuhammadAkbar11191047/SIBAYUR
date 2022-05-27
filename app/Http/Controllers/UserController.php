<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function UserIndex(){
        $data = User::all();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function UserData($id){
        $data = User::find($id);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Data' => [
                $data
            ]
        ],200);
    }

    public function UserStore(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil ditambah',
            'Data' => [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,

            ]
        ],200);
    }

    public function UserEdit(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
 
        ]);

        $data = User::findOrFail($id);

        if($request){

            $data_update = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ];
        } else {
            $data_update = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,

            ];
        }

        // $data->update($data_update);
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dirubah',
            'Data' => [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
  
            ],
            $data->update($data_update)
        ],200);
    }

    public function UserDelete($id){
        $data = User::findOrFail($id);
        $data->delete();
        return response()->json([
            'Number' => '200',
            'Status' => 'Berhasil',
            'Pesan' => 'Data berhasil dihapus'], 200);
    }
}
