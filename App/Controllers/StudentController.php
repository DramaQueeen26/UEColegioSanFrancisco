<?php

namespace App\Controllers;

use Core\Util;
use App\Model\StudentModel;

class StudentController extends StudentModel
{

	public function new_student()
	{
		$util = new Util();

		$name = $util->clean_string($_POST['name']);
		$last_name = $util->clean_string($_POST['last_name']);
		$address = $util->clean_string($_POST['address']);
		$email = $util->clean_string($_POST['r_email']);
		$phone = $util->clean_string($_POST['r_phone']);
		$gender = $util->clean_string($_POST['gender']);
		$photo = $_FILES['photo']['name'];
		$grade = $util->clean_string($_POST['grade']);
		$r_name = $util->clean_string($_POST['r_name']);
		$r_ci = $util->clean_string($_POST['r_ci']);
		$r_relationship = $util->clean_string($_POST['r_relationship']);


		if(empty($name) || empty($last_name) || empty($address) || empty($email) || empty($phone) || empty($r_name) || empty($r_ci) || empty($r_relationship)){

			$alert = [
		    	"alert"=>"simple",
		        "type"=>"error",
		        "title"=>"Oh no!",
		        "text"=>"Ningún campo puede estar vacío"
	    	];

		}else{
			if(!preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $name) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $last_name) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $r_name) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{1,40}$/", $r_relationship)){

				$alert = [
			    	"alert"=>"simple",
			        "type"=>"error",
			        "title"=>"Oh no!",
			        "text"=>"Los campos nombre, apellido y parentesco sólo pueden tener letras"
	    		];

			}else{

				if(!is_numeric($phone) || !is_numeric($r_ci)){

					$alert = [
				    	"alert"=>"simple",
				        "type"=>"error",
				        "title"=>"Oh no!",
				        "text"=>"La cédula y el número de teléfono solo pueden tener números"
	    			];

				}else{
					if(strlen($phone) > 11 || strlen($phone) < 11){
						$alert = [
					    	"alert"=>"simple",
					        "type"=>"error",
					        "title"=>"Oh no!",
					        "text"=>"El número de teléfono solo puede tener 11 dígitos"
	    				];
					}else{
						if(strlen($r_ci) < 7 || strlen($r_ci) > 8){
							$alert = [
						    	"alert"=>"simple",
						        "type"=>"error",
						        "title"=>"Oh no!",
						        "text"=>"Introduce una cédula válida"
	    					];
						}else{

							if(!isset($photo) || $photo == ''){

								$alert = [
							    	"alert"=>"simple",
							        "type"=>"error",
							        "title"=>"Oh no!",
							        "text"=>"Por favor, agrega una foto"
	    						];

							}else{

								$type = $_FILES['photo']['type'];
						     	$size = $_FILES['photo']['size'];
						    	$temp = $_FILES['photo']['tmp_name'];

						    	if(!((strpos($type, "gif") || strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png")) && ($size < 20000000))){

						    		$alert = [
								    	"alert"=>"simple",
								        "type"=>"error",
								        "title"=>"Oh no!",
								        "text"=>"Se permiten archivos .gif, .jpg, .png. y de 2mb como máximo"
	    							];

						    	}else{
						    		if(move_uploaded_file($temp, './img/'.$photo)){
						    			chmod('./img/'.$photo, 0777);

						    			/*AQUI IRIA LA INSERCIÓN EN LA BASE DE DATOS*/

						    			$alert = [
									    	"alert"=>"clean",
									        "type"=>"success",
									        "title"=>"!",
									        "text"=>"Se ha agregado el administrador correctamente"
	    								];

						    		}
						    	}
							}
						}
					}
				}
			}
		}

		return $util->sweet_alert($alert);
	}

}