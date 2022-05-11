<?php

namespace App\Controllers;

use Core\View;

class Home
{
    public $site_name = 'U.E Colegio San Francisco';
    
    public function index()
    {
        $views = ['home/index'];
        $args  = [
            'title' => 'Inicio',
            'site_name' => $this->site_name
        ];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }

    public function college()
    {
        $views = ['home/college'];
        $args  = [
            'title' => 'Colegio',
            'site_name' => $this->site_name
        ];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }
    
    public function gallery()
    {
        $views = ['home/gallery'];
        $args  = [
            'title' => 'Galería',
            'site_name' => $this->site_name
        ];
        $header = 'templates/home/header';
        $footer = 'templates/home/footer';
        View::render($views, $args, $header, $footer);
    }

    public function login()
    {
        $views = ['home/login'];
        $args  = [
            'title' => 'Inicia Sesión',
            'site_name' => $this->site_name
        ];
        View::render($views, $args, $header = null, $footer = null);
    }
    

}
