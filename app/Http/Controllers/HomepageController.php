<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomepageController extends Controller
{   
    private $project_info =[
        ['pypi-seeklogo.com.svg','Data Factory','Python App for generating data ',['Link'=>'https://pypi.org/project/dfac/']],
        ['simplex.png','Simplex','Static Content Management System',['Link'=>'https://packagist.org/packages/zaqlabs/simplex']]
    ];

    public function index(){
        return view('home', ['p'=>array_slice($this->project_info, 0, 3)]);
    }

    public function projects(){
        return view('projects',[ 'p'=>$this->project_info]);
    }

}
