<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    //

    public function index(){

        // recebe TODOS os resgitros da tabela contato
        //$contato = Contato::all();
        //$contato = Contato::where('idContato','=', 2)->get();
        $contato = Contato::where('nome','<>', 'Bruno ')->get();
        // <> é o sinal de diferente 

        foreach($contato as $c){
            echo "Id: ". $c->idContato . "<br />";
            echo "Nome: ". $c->nome . "<br />";
            echo "Email: ". $c->email . "<br />";
            echo "Assunto: ". $c->assunto . "<br />";
            echo "Mensagem: ". $c->mensagem . "<br />";
            echo "<br />";
        }

    }

    public function create(){

    }




}
