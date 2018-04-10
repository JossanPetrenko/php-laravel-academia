<!-- Stored in resources/views/layouts/master.blade.php -->
@extends('layouts.app')
@section('content')

<div>
<div class="text-right py-2 ">
    <a class="btn btn-info" href={{route('pessoas.create')}}>Novo</a>
</div>

<div class="card">
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th class="text-right">Editar</th>
                <th class="text-right">Excluir</th>
            </tr>
            @foreach($pessoas as $item)
            <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td class="text-right" ><a href={{route('pessoas.edit', ['id'=> $item->id])}} 
                    class="btn btn-info btn-sm"><span class="mdi mdi-pencil"/></a></td>
                <td class="text-right" >
                    <button type="button" onclick="deleteItem('{{route('pessoas.destroy', ['id'=> $item->id])}}')" 
                            class="btn btn-danger btn-sm"><span class="mdi mdi-delete"/>
                    </button>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection
