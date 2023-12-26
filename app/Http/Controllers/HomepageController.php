<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomepageController extends Controller
{   
    private $project_info = [
        [
            'logo'  => 'pypi-seeklogo.com.svg',
            'title' => 'Data Factory',
            'desc'  => 'Python App for generating data.',
            'links' => ['Link'=>'https://pypi.org/project/dfac/']
        ],
        [
            'logo'  => 'hdisplay.png',
            'title' => 'H-Display',
            'desc'  => 'Wordpress plugin to add banner to a site.',
            'links' => [
                        'Link'=>'https://wordpress.org/plugins/h-display/',
                        'Code'=> 'https://plugins.trac.wordpress.org/browser/h-display/'
                        ]
        ]
    ];

    public function index(){
        return view('home', ['projects'=>array_slice($this->project_info, 0, 3)]);
    }

}
