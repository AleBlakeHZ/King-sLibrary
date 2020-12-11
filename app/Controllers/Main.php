<?php namespace App\Controllers;
use App\Models\prestamosModel;
use App\Models\usuariosModel;
use App\Models\librosModel;
use App\Models\autoresModel;
use App\Models\solicitudModel;
use App\Models\estudianteModel;

class Main extends BaseController
{
	public function index()
	{
		return view('head_index').view('header_nr').view('nav_nr').view('contenido_index_nr').view('footer');
	}

	public function reg(){
		return view('head_index').view('header').view('nav_r').view('contenido_index').view('footer');
	}

	public function perfil(){
		$prestamos = new prestamosModel($bd);
		$indices['prestamos'] = $prestamos->where('idUsuario','1')->findAll();

		//$db      = \Config\Database::connect();
		//$builder = $db->table('prestamos');
		//$builder->select('*');
		//$builder->join('libro', 'libro.idLibro = prestamo.idLibro');
		//$builder->join('usuario', 'usuario.idUsuario = prestamo.idUsuario');

		//$query = $builder->get();
		//$indices['prestamos'] = $query->getResultArray();

		return view('head').view('header').view('nav_r').view('perfil', $indices).view('footer');
	}

	public function busqueda(){
		return view('head').view('header').view('nav_r').view('busqueda').view('footer');
	}

	public function busqueda_nr(){
		return view('head').view('header_nr').view('nav_nr').view('busqueda').view('footer');
	}

	public function login(){
		return view('head').view('header_nr').view('login').view('footer');
	}

	public function registro(){
		return view('head').view('header_nr').view('registro').view('footer');
	}

	public function libro(){
		return view('head').view('header').view('nav_r').view('libro').view('footer');
	}

	public function libros(){
		return view('head').view('header').view('nav_r').view('libros').view('footer');
	}

	public function libros_nr(){
		return view('head').view('header').view('nav_nr').view('libros_nr').view('footer');
	}

	public function qa(){
		return view('head').view('header').view('nav_r').view('q&a').view('footer');
	}

	public function qa_nr(){
		return view('head').view('header_nr').view('nav_nr').view('q&a').view('footer');
	}

	public function ad_prestamo(){
		$prestamos = new prestamosModel($bd);
		$indices['prestamos'] = $prestamos->findAll();

		return view('head').view('header_ad').view('nav_ad').view('adPres', $indices).view('footer');
	}

	public function ad_usuario(){
		$usuarios = new estudianteModel($bd);
		$indices['people'] = $usuarios->findAll();
		
		return view('head').view('header_ad').view('nav_ad').view('adUsu', $indices).view('footer');
	}


	public function modUsuario(){
		return view('head').view('header_ad').view('modificarUser').view('footer');
	}

	public function bajaUser(){
		return view('head').view('header_ad').view('bajaUser').view('footer');
	}

	public function altaAd(){
		return view('head').view('header_ad').view("altaAdmin").view('footer');
	}

	public function ad_libro(){
		$libros = new librosModel($bd);
		$indices['libros'] = $libros->findAll();

		return view('head').view('header_ad').view('nav_ad').view('adLibr', $indices).view('footer');
	}

	public function ad_autor(){
		$autores = new autoresModel($bd);
		$indices['autores'] = $autores->findAll();

		return view('head').view('header_ad').view('nav_ad').view('adAut', $indices).view('footer');
	}

	public function regLibro(){
		return view('head').view('header_ad').view('registroLibro').view('footer');
	}

	public function bajaLibro(){
		return view('head').view('header_ad').view('bajaLibro').view('footer');
	}

	public function modLibro(){
		return view('head').view('header_ad').view('modificarLibro').view('footer');
	}

	public function admin(){
		return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
	}

	public function mantenimientoAdmin(){
		return view('head').view('header_ad').view('Mantenimiento').view('footer');
	}

	
	//--------------------------------------------------------------------

}