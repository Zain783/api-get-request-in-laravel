<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyController extends Controller
{
    public function index(){
   
        $data=Http::get("https://jsonplaceholder.typicode.com/photos");
        
       return view('apiget',['collection'=>$data]);
    
    }
}
