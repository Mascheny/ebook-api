<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return['nis' =>'3103118057',
        'name' => 'Faathir Rahman',
        'gender' => 'Laki - Laki',
        'phone' => '+62 896-2608-3160',
        'class' => 'XII RPL 2'];
     }
}
