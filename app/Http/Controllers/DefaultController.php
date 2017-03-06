<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DefaultController extends Controller
{
    public function index()
    {
        auth()->loginUsingId(1);

        $book = Book::findOrFail(1);

        /*$this->authorize('show-book', $book);*/

        //Mesma coisa que de cima
        /*if(Gate::denies('show-book', $book)) {
            abort(403, 'Você não é dono deste livro');
        }*/

        //Pode ser usado can aqui ao invez da view
        //auth()->user()->can('update-book', $book);
        

        //Usando Policies
        $this->authorize('update', $book);

        return view('home', compact('book'));
    }
}
