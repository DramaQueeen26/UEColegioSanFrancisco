<?php

namespace App\Controllers;

use Core\Util;
use App\Model\SectionModel;

class SectionController extends SectionModel
{

	public function new_section()
	{
		$util = new Util();

    	$section = $util->clean_string($_POST['section']);

		if(empty($section) || empty($_POST['checkbox'])){
			$alert = [
		    	"alert"=>"simple",
		        "type"=>"error",
		        "title"=>"Oh no!",
		        "text"=>"Ningún campo puede estar vacío"
		    ];
		}else{

		$grade = $_POST['checkbox'];

			if(strlen($section) > 1){
				$alert = [
			    	"alert"=>"simple",
			        "type"=>"error",
			        "title"=>"Oh no!",
			        "text"=>"La sección no puede tener más de un carácter"
			    ];
			}else{

				if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $section)){
					$alert = [
		                "alert"=>"simple",
		                "type"=>"error",
		                "title"=>"Oh no!",
		                "text"=>"Sólo se permiten letras para la sección"
		    		];
		    	}else{
		    		/*AQUI IRIA LA INSERCIÓN A LA BASE DE DATOS*/

		    		$alert = [
		                "alert"=>"clean",
		                "type"=>"success",
		                "title"=>"!",
		                "text"=>"La sección ha sido agregada con éxito"
		    		];
		    	}
		    }
		
	    }

		return $util->sweet_alert($alert);
	}

}