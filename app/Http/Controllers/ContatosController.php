<?php

namespace App\Http\Controllers;

use App\Contato;
use GuzzleHttp\Client;
use App\Services\CriadorContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContatosController extends Controller
{
    public function index(){
        $contatos = Contato::where('user_id',Auth::id())->get();
        return view('contatos.list',['contatos'=> $contatos]);
    }

    public function new(){
        return view('contatos.form');
    }

    public function add(Request $request)
    {
        
        $contato = new CriadorContato();
        $contato = $contato->criarContato($request);
        return redirect('/');
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
        
        
        return view('contatos.projetos',compact('responseBody'));

    }
}
