<?php

namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $allCompany=[
            ['id'=> 1 ,'Company Name'=> 'amazon' ,'Company Country'=>'egypt','Company City'=>'cairo' ,'Created at' => '12323'],
            ['id'=> 2 ,'Company Name'=> 'google' ,'Company Country'=>'egypt','Company City'=>'cairo' ,'Created at' => '12323'],
        ];
        return view('company'.['company'=>$allCompany]);
    }

    public function updatee($id){
        $theCompany=[
            ['id'=> 1 ,'Company Name'=> 'amazon' ,'Company Country'=>'egypt','Company City'=>'cairo' ,'Created at' => '12323'],
            ];
        return view('update'.['company'=>$theCompany]);
    }

    public function delete($id){
        return view('delete');

    }
}
