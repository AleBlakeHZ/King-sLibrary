<?php namespace App\Controllers;

use App\Models\librosModel;
use App\Models\estudianteModel;

class crud extends BaseController
{
	public function alta()
	{
        $request = \Config\Services::request();
        $nombre=$request->getPost('user');
        $grado= $request->getPost('grado');
        $grupo= $request->getPost('grupo');
        $tipo= $request->getPost('tipo');
        $contrasenia= $request->getPost('password');
        $correo= $request->getPost('email');

        $data=[
            'nombre' => $nombre,
            'grado' => $grado,
            'grupo' => $grupo,
            'tipo' => $tipo,
            'contrasenia' => $contrasenia,
            'correo' => $correo
        ];

        $alta = new estudianteModel($db);
        $alta->insert($data);

        return view('head').view('header_nr').view('login').view('footer');
    }

    public function modificar()
	{
        $request = \Config\Services::request();
        $id=$request->getPost('id');
        $nombre=$request->getPost('user');
        $grado= $request->getPost('grado');
        $grupo= $request->getPost('grupo');
        $tipo= $request->getPost('tipo');
        $contrasenia= $request->getPost('password');
        $correo= $request->getPost('email');

        $data=[
            'nombre' => $nombre,
            'grado' => $grado,
            'grupo' => $grupo,
            'tipo' => $tipo,
            'contrasenia' => $contrasenia,
            'correo' => $correo
        ];

        $alta = new estudianteModel($db);
        $alta->update($id, $data);

        return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function baja(){
        $request = \Config\Services::request();
        $id=$request->getPost('id');

        $baja= new estudianteModel($db);
        $baja->where('id', $id)->delete();

        return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function altaAdmin()
	{
        $request = \Config\Services::request();
        $nombre=$request->getPost('user');
        $grado= $request->getPost('grado');
        $grupo= $request->getPost('grupo');
        $tipo= $request->getPost('tipo');
        $contrasenia= $request->getPost('password');
        $correo= $request->getPost('email');

        $data=[
            'nombre' => $nombre,
            'grado' => $grado,
            'grupo' => $grupo,
            'tipo' => $tipo,
            'contrasenia' => $contrasenia,
            'correo' => $correo
        ];

        $alta = new estudianteModel($db);
        $alta->insert($data);

        return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function altaLibro()
	{
        $request = \Config\Services::request();
        $nombre=$request->getPost('nombre');
        $edicion= $request->getPost('edicion');
        $formato= $request->getPost('formato');
        $idAutor= $request->getPost('idAutor');
        $descripcion= $request->getPost('desc');

        $data=[
            'titulo' => $nombre,
            'edicion' => $edicion,
            'formato' => $formato,
            'idAutor' => $idAutor,
            'descripcion' => $descripcion
        ];

        $alta = new librosModel($db);
        $alta->insert($data);

		return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function bajaLibro(){
        $request = \Config\Services::request();
        $id=$request->getPost('id');

        $baja= new librosModel($db);
        $baja->where('idLibro', $id)->delete();

        return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function modLibro()
	{
        $request = \Config\Services::request();
        $id=$request->getPost('id');
        $nombre=$request->getPost('nombre');
        $edicion= $request->getPost('edicion');
        $formato= $request->getPost('formato');
        $idAutor= $request->getPost('idAutor');
        $descripcion= $request->getPost('desc');

        $data=[
            'titulo' => $nombre,
            'edicion' => $edicion,
            'formato' => $formato,
            'idAutor' => $idAutor,
            'descripcion' => $descripcion
        ];

        $alta = new librosModel($db);
        $alta->update($id, $data);

		return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
    }

    public function login(){
        $request=\Config\Services::request();
        $correo=$request->getPost('user');
        $contraseña=$request->getPost('password');

        if($correo == "solracsajor22@gmail.com"){
            if($contraseña == 123456789){
                return view('head').view('header_ad').view('nav_ad').view("admin").view('footer');
            }else{
                return view('head').view('header_nr').view('login').view('footer');
            }
        }else{
            return view('head_index').view('header').view('nav_r').view('contenido_index').view('footer');
        }
    }
}