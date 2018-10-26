<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function lista()
    {
    	$produtos = Produto::get();
    	return view('produtos.lista', ['produtos' => $produtos]);
    }

    public function novo()
    {
    	return view('produtos.formulario');
    }

    public function salvar(Request $request)
    {
    	$produto = new Produto();

    	$produto = $produto->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Produto cadastrado com sucesso!');

    	return Redirect('produtos/novo');

    }

        public function detalhe($id)
        {
               $produto = Produto::findOrFail($id);
          return view('produtos.detalhe', ['produto' => $produto]);

        
       
        }
   

   public function editar($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.formulario', ['produto' => $produto]);
    }  

     public function atualizar($id, Request $request)
    {
         $produto = Produto::findOrFail($id);

         $produto->update($request->all());

         \Session::flash('mensagem_sucesso', 'Produto atualizado com sucesso!');

         return Redirect('produtos/'.$produto->id.'/editar');
    } 

    public function deletar($id)
    {
        $produto = Produto::findOrFail($id);

        $produto->delete();

         \Session::flash('mensagem_sucesso', 'Produto deletado com sucesso!');

         return Redirect('produtos');

    }

    public function mostra()
    {
        return view('detalhes');
    }


}

