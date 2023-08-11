<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Padaria;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        // recebe TODOS os resgitros da tabela contato
        //$contato = Contato::all();
        //$contato = Contato::where('idLanche','=', 2)->get();
        $contato = Contato::where('nome','<>', 'Hot Dog ')->get();
        // <> é o sinal de diferente 

        foreach($padaria as $c){

            echo "Id: ". $c->idLanche . "<br />";
            echo "Lanche: ". $c->lanche . "<br />";
            echo "Bebida: ". $c->bebida . "<br />";
            echo "Valor: ". $c->valor . "<br />";
            echo "Tipo: ". $c->tipo . "<br />";



        }

    }
}
