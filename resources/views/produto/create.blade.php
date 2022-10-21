@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Produto</div>

                <div class="card-body">
                   <form method="post" action="{{ route('produto.store')}}">
                   @csrf
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Produto</label>
<input type="text" class="form-control" name="produto">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Preço Produto</label>
<input type="decimal" class="form-control" name="preco">
<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
