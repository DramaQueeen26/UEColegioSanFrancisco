<?php

namespace App\Controllers;

use Core\View;

class Home
{
    public function index()
    {
        $views = ['home/index'];
        $args  = ['title' => 'Home'];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }

    public function college()
    {
        $views = ['home/college'];
        $args  = ['title' => 'Colegio'];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }
    
    public function gallery()
    {
        $views = ['home/gallery'];
        $args  = ['title' => 'Galería'];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }
    

}
