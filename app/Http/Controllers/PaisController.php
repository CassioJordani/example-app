<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index(){
        $paises = [
            ['nome' => 'Brasil', 'capital' => 'Brasilia'],
            ['nome' => 'Argentina', 'capital' => 'Buenos Aires'],
            ['nome' => 'Chile', 'capital' => 'Santiago'],
        ];
    }
    public function show($nome){
        switch($nome){
            case 'Brasil':
                echo 'Brasilia';
                break;
            case 'Argentina':
                echo 'Buenos Aires';
                break;
            case 'Chile':
                echo 'Santiago';
                break;
            default:
                echo 'País não encontrado';
        }
    }
    
}
