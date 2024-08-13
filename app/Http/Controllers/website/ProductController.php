<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $allCompany=[
            ['id'=> 1 ,'Product Name'=> 'iPhone' ,'Product Company'=>'amazon','Count'=> 3 ,'Created at' => '12323'],
        ];
        return view('company'.['company'=>$allCompany]);
    }

    public function updatee($id){
        $theCompany=[
            ['id'=> 1 ,'Product Name'=> 'iPhone' ,'Product Company'=>'amazon','Count'=> 3 ,'Created at' => '12323'],
            ];
        return view('update'.['company'=>$theCompany]);
    }

    public function delete($id){
        return view('delete');

    }
}
