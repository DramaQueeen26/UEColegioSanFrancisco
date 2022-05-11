<?php

namespace App\Controllers;

use Core\Util;
use App\Model\SubjectModel;

class SubjectController extends SubjectModel
{

	public function new_subject()
	{
	$util = new Util();

	$code = $util->clean_string($_POST['code']);
    $name = $util->clean_string($_POST['name']);

	if(empty($code) || empty($name) || empty($_POST['checkbox'])){
		$alert = [
	    	"alert"=>"simple",
	        "type"=>"error",
	        "title"=>"Oh no!",
	        "text"=>"Ningún campo puede estar vacío"
	    ];
	}else{

		$grade = $_POST['checkbox'];

		if(strlen($code) > 10){
			$alert = [
	            "alert"=>"simple",
	            "type"=>"error",
	            "title"=>"Oh no!",
	            "text"=>"El código no puede ser mayor a 10 carácteres"
	    	];
		}else{
			if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $name)){
				$alert = [
	                "alert"=>"simple",
	                "type"=>"error",
	                "title"=>"Oh no!",
	                "text"=>"Sólo se permiten letras para el nombre"
	    		];
			}else{

				/*AQUÍ IRÍA LA COMPROBACIÓN PARA SABER SI YA EL CÓDIGO EXITES EN LA BASE DE DATOS, PERO COMO AÚN NO TRABAJAMOS CON BD NO LO COLOCO*/

				$alert = [
	                "alert"=>"clean",
	                "type"=>"success",
	                "title"=>"!",
	                "text"=>"La materia ha sido agregada con éxito"
	    		];

        		}
        	}
        }

        return $util->sweet_alert($alert);
	}

}