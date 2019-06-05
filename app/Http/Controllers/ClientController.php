<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use \App\User;

class ClientController extends Controller
{
    public function index() {
        $data = User::all();
        return $data;
    }


    public function add() {
        $data = New User;
        $data->username = 'Nico';
        $data->password = bcrypt('12345');
        $data->site = 'New York';
        $data->save();

        return 'Success';
    }
}

