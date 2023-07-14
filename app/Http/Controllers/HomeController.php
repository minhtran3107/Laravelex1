<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return 'Home';
    }

    public function getNews(){
        return 'Danh sách tin tức';
    }

    public function getCategory($id){
        return 'Chuyên mục: '.$id;
    }
}
