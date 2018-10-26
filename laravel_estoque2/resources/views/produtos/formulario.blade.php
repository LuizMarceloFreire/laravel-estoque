@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Informe abaixo as informações dos produtos
                	<a class="float-right" href="{{url('produtos') }}">
                	 Listagem de Produto
                	  </a>

                </div>

                <div class="card-body">
                     
                     @if(Session::has('mensagem_sucesso'))
                	<div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}
                   </div>
                	 @endif

                  @if(Request::is('*/editar'))
                    {{ Form::model($produto, ['method' => 'PATCH', 'url' => 'produtos/'.$produto->id]) }}
                  @else
                    {{ Form::open(['url' => 'produtos/salvar']) }}


                  @endif

                {{ Form::label('nome', 'Nome') }}
                  {{ Form::input('text', 'nome', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Nome']) }}

                  {{ Form::label('valor', 'Valor') }}
                  {{ Form::input('text', 'valor', null, ['class' => 'form-control', '','required', 'placeholder' => 'Valor']) }}

                  {{ Form::label('descricao', 'Descrição') }}
                  {{ Form::input('text', 'descricao', null, ['class' => 'form-control', '', 'placeholder' => 'Descrição']) }}

                   {{ Form::label('quantidade', 'Quantidade') }}
                  {{ Form::input('text', 'quantidade', null, ['class' => 'form-control', '', 'required', 'placeholder' => 'Quantidade']) }}

             
                  {{ Form::label('total', 'Total')}}
                 
                 <output id="total" class="form-control"> 

                 

                  </output>

                 <br/>


                  {{ Form::submit('Salvar', ['class'=> 'btn btn-primary']) }}

 

                  <a href="http://localhost/LUIZ-MARCELO/laravel-estoque/public/produtos">

                 <input class="btn btn-primary" type="button" value="Cancelar">

                </a>
                  

                	{{ Form::close() }}
                  <br/>

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection