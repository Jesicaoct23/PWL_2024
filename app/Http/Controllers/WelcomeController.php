<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
     {
        return 'Hello World';
     }
     public function index()
     {
        return 'Selamat Datang';
     }
     public function about()
     {
        return 'NIM 2341728014 <br> Nama : Jesica Oktavia Manik';
     }
     public function articles($id)
     {
        return 'Halaman Artikel Dengan Id'.$id;
     }
}
