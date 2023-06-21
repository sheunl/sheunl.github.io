<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomepageController extends Controller
{   
    private $project_info =[
        ['wordpress.svg','Test 1','hdhdj fjdjdjfdmdvdk',['kdjfjfj'=>'344']],
        ['www.svg','Test 1','hdhdj fjdjdjfdmdvdk',['kdjfjfj'=>'664','dgfefdfv'=>'774']]
    ];

    public function index(){
        return view('home', ['p'=>array_slice($this->project_info, 1)]);
    }

    public function projects(){
        return view('projects',[ 'p'=>$this->project_info]);
    }

}
