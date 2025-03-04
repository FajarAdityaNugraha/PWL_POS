<?php
namespace App\Http\Controllers;

use app\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
