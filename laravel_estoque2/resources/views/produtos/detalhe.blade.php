@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	
                <a  href="{{url('produtos') }}"> Voltar </a>

                </div>

                <div class="card-body">

                    <table class="table">
                        <th> Nome </th>
                        <th> Valor </th>
                        <th> Descrição</th>
                        <th> Quantidade</th>
                        
                      
                        <tbody> 

                          

                            <tr> 
                                <td> {{$produto->nome}} </td>
                                <td> {{$produto->valor}} </td>
                                <td> {{$produto->descricao}} </td>
                                <td> {{$produto->quantidade}} </td>

                            </tr>


                           

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
