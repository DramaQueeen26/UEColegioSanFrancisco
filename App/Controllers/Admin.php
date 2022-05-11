<?php

namespace App\Controllers;

use Core\View;
use App\Controllers\SubjectController;
use App\Controllers\SectionController;
use App\Controllers\AdminController;
use App\Controllers\TeacherController;
use App\Controllers\StudentController;


class Admin
{
    public $site_name = 'U.E Colegio San Francisco';
    
    public function index()
    {
        $views = ['admin/index'];
        $args  = [
            'title' => 'Inicio',
            'site_name' => $this->site_name
        ];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }
    public function subject()
    {
        if(isset($_POST['name']) && isset($_POST['code'])){

            $subject = new SubjectController();
            echo $subject->new_subject();

        }else{

            $views = ['admin/subject'];
            $args  = [
                'title' => 'Materias',
                'site_name' => $this->site_name
            ];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        }
    }
    public function section()
    {
        if(isset($_POST['section'])){

            $section = new SectionController();
            echo $section->new_section();
        }else{
            $views = ['admin/section'];
            $args  = [
                'title' => 'Secciones',
                'site_name' => $this->site_name
            ];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        }
    }
    public function admin()
    {
        $views = ['admin/admin'];
        $args  = [
            'title' => 'Administradores',
            'site_name' => $this->site_name
        ];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }
    public function teacher()
    {
        $views = ['admin/teacher'];
        $args  = [
            'title' => 'Docentes',
            'site_name' => $this->site_name
        ];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }
    public function student()
    {
        $views = ['admin/student'];
        $args  = [
            'title' => 'Estudiantes',
            'site_name' => $this->site_name
        ];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }
}