<?php

namespace App\Controllers;

use Core\View;

class Error
{
    public function index()
    {
        self::pageNotFound();
    }

    public function pageNotFound()
    {
        http_response_code(404);
        $views = ['error/404'];
        $args  = ['title' => 'Error 404 | Page Not Found'];
        $header = "templates/admin/header";
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }
}
