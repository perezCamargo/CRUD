<?php
	//	app/controllers/crudController.php

	class crudController extends BaseController{

		public function saveCrud(){

			//guardar usuarios

			$usuario = Input::get('usuario');
			DB::table('usuarios')->insert([
				'usuario'=>$usuario
			]);

			return Redirect::to('/');
			
		}

		public function updateCrud(){

			//editar usuarios
			$id = Input::get('hideId');
			$usuario = Input::get('textEdit');

			DB::table('usuarios')->where('id', '=',$id)->update([
				'usuario' => $usuario
			]);
			return Redirect::to('editar');
		}

		public function deleteCrud($id){

			//borrar usuarios
			DB::table('usuarios')->where('id', '=', $id)->delete();
			return Redirect::to('editar');
		}

		/*public function showCrud(){

			//mostrar usuarios
			$usuarioShow = DB::table('usuarios')->get();
			return Redirect::to('editar')->with(['datos'=>$usuarioShow]);

		}*/
	}

?>