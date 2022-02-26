<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return view('usuarios.list',['usuarios'=> $usuarios]);
    }

    public function new(){
        return view('usuarios.form');
    }

    public function add(Request $request)
    {
        $usuario = new Usuario();
        $usuario = $usuario->create($request->all());
        return redirect('/usuarios');
    }

    public function projetos(Request $request)
    {

        //var_dump($request->usuario_gh);
       
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://api.github.com/users/$request->usuario_gh/repos";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        
        $responseBody = json_decode($response->getBody());
        
        
        return view('usuarios.projetos',compact('responseBody'));

    }
}
