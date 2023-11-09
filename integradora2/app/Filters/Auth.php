<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;


class Auth implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		//Se usa para autenticar si el usuario esta o no logueado
		if (!session()->get('logged_in')){
			// si su valor es falso entonces redirecciona a la pagina de login
			return redirect()->to('/login');

		}

	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)

	{
	}
	
}
