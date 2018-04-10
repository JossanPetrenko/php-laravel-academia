<!-- Stored in resources/views/layouts/master.blade.php -->
@extends('layouts.app')
@section('content')

<form class="form-horizontal" action="{{route("pessoas.store")}}" method="POST">
    @csrf 
    <div>

            <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input name="nome" value='{{old('nome') ?: $pessoa->nome}}' class="form-control"/>
                    <input name="id" value='{{$pessoa->id}}' class="form-control" type="hidden"/>
            </div>
            
            <div class="form-row">
                <div class="form-group col-sm-9 ">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="nome" value='{{old('email') ?: $pessoa->email}}' class="form-control"/>
                </div>
                <div class="form-group col-sm-3 ">
                        <label for="exampleInputEmail1">Idade</label>
                        <input name="nome" value='{{old('idade') ?: $pessoa->idade}}' class="form-control"/>
                </div>
            </div>


            <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input name="nome" value='{{old('endereco') ?: $pessoa->endereco}}' class="form-control"/>
            </div>


            <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input name="nome" value='{{old('telefone') ?: $pessoa->telefone}}' class="form-control"/>
            </div>




        <button class="btn btn-info btn-sm">Salvar</button>
    </div>
</form>

@endsection
