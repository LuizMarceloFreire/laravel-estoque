@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Produtos
                	<a class="float-right" href="{{url('produtos/novo') }}"> Novo Produto </a>

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}} </div>
                     @endif

                    <table class="table">
                        <th> Nome </th>
                        <th> Valor </th>
                        <th> Descrição</th>
                        <th> Quantidade</th>
                        <th> Ações </th>
                        <tbody> 

                            @foreach($produtos as $produto)

                            <tr> 
                                <td> {{$produto->nome}} </td>
                                <td> {{$produto->valor}} </td>
                                <td> {{$produto->descricao}} </td>
                                <td> {{$produto->quantidade}} </td>
                                
                                <td>

                                <a href="produtos/{{ $produto->id }}/editar" class="btn btn-sm"> Editar
                                </a>

                            


                        {{ Form::open(['method' => 'DELETE', 'url' =>'/produtos/'.$produto->id, 'style' => 'display:inline']) }}
                        <button 
                        type="submit"class="btn btn-default btn-sm"> Excluir
                        </button>
                        {{ Form::close() }}            
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
