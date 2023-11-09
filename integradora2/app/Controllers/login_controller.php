<?php
namespace App\Controllers;
use App\Models\usuario_model; //traemos los datos de la tabla usuario
use CodeIgniter\Controller;

class login_controller extends BaseController
{

	public function index(){
		helper(['form' , 'url']);


		$data['titulo']='Login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
	}

	public function auth(){

		$session = session();
		$model = new usuario_model();

		//traemos los datos del formulario
		$email= $this->request->getVar('email');
		$password= $this->request->getVar('pass');

		//Guarda en data el modelo donde el email es igual al email de la base de datos
		$data= $model->where('email',$email)->first();

		//condicional
		if ($data){
			//Toma los datos de la clave y del campo baja
			$pass = $data['pass'];
			$baja=$data['baja'];

			if ($baja == 'SI'){
				$session->setFlashdata('msg', 'El usuario fue dado de Baja');
				return redirect()->to('/login_controller');
			}
			//Si no fue dado de baja se pasa a la verificacion de los datos para iniciar sesion

			$verificar_pass = password_verify($password, $pass); 

			if ($verificar_pass) {
				$sesion_data= [
					'id_usuario' => $data ['id_usuario'],
					'nombre' => $data ['nombre'],
					'apellido' => $data ['apellido'],
					'email' => $data ['email'],
					'usuario' => $data ['usuario'],
					'id_perfil' => $data ['id_perfil'],
					'logged_in' => TRUE

				];

				//una vez que cargamos los datos iniciamos sesion
				$session->set($sesion_data);

				//Le damos la bienvenida y redireccionamos al panel

				session()->setFlashdata('msg', 'Bienvenido!!');
				return redirect()->to('panel');

			} else{
				//no se pudo validar los datos de la contraseña
				session()->setFlashdata('msg', 'Clave incorrecta');
				return redirect()->to('login');
			}

		} else {
			session()->setFlashdata('msg','El Correo ingresado es Incorrecto');
			return redirect()-> to('login');

			}

		}
		public function logout(){

			$session = session();
			$session->destroy();
			return redirect()->to('login');
	}

}
