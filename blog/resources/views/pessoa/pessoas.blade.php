<!-- Stored in resources/views/layouts/master.blade.php -->
@extends('layouts.app')
@section('content')

<div>
<div class="text-right py-2 ">
    <button class="btn btn-primary">Novo</button>
</div>

<div class="card">
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
            @foreach($pessoas as $item)
            <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->email}}</td>
                <td class="text-right" ><a href={{route('pessoas.edit', ['id'=> $item->id])}} 
                    class="btn btn-primary btn-sm"><span class="mdi mdi-pencil"/></a></td>
                    <td class="text-right" ><a href={{route('pessoas.edit', ['id'=> $item->id])}} 
                            class="btn btn-danger btn-sm"><span class="mdi mdi-delete"/></a></td>
            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection
