<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //

    public function contato() {
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        return view('site.contato', ['titulo' => 'Contato (controller)']);
    }
}
